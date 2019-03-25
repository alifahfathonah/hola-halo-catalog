<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\CategoryProduct;
use App\Traits\UploadTrait;

class ProductController extends Controller
{
    use UploadTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $title = "POS | Data Produk";
        $products = Product::orderBy('id','desc')->paginate(10);
        $categories = Category::orderBy('name','asc')->get();

        $category=$request->get('category');

        if($category) {
            // $products = Product::where('category_id', $category_id)->orderBy('id','desc')->paginate(10);
            // $products = Product::where('category_id', $category_id)->categories()->orderBy('id','desc')->paginate(10);
            // $products = Product::with('categories')->where('category_id',$category_id)->paginate(10);
            // $products_instance = new Product();
            // $products = $products_instance->categories()::where('category_id', $category_id)->paginate(10);
            $category=$request->get('category');
            $products = Product::whereHas('categories', function($q) use ($category) {
                $q->where('category_id', $category);
            })->paginate(10);

        } else {
            $products = Product::orderBy('id','desc')->paginate(10);
        }

        return view('produk.index', compact('title','products','categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = "POS | Tambah Data Produk";
        $categories = Category::orderBy('name','asc')->get();
        return view('produk.create',compact('title','categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name'              => 'required|string|min:3',
            'image'             => 'required',
            'description'       => 'required|min:5',
            // 'category_id'       => 'required',
        ]);

        $product = new Product();
        $product->name = $request->get('name');
        $product->description = $request->get('description');
    
        // $input = $request->all();
        // $input['name']  = $request->get('name');
        // $image_upload = $request->file('image');
        // if ($image_upload){
        //     // $image_path = '/upload/products/'.str_slug($request->file('image'), '_').str_random(8).'.'.$request->image->getClientOriginalExtension();
        //     // $product->image =  $request->image->move(public_path('/upload/products/'));
        //     // $image_path = $image->store('products', 'public');
        //     // $product->image = $image_path;
        //     // $input['image'] = '/upload/products/'.str_slug($input['name'], '-').'.'.$request->image->getClientOriginalExtension();
        //     // $path = $request->image->move(public_path('/upload/products/'), $input['image']);
        //     // $path = $image_upload->store('product', 'public');
        //     // $path = $image_upload->move();
        //     $product->image = $path;
        // }

        if ($request->has('image')) {
            $image = $request->file('image');
            $name = str_slug($request->input('name'),'_').'_'.str_random(8);
            $folder = '/uploads/images/';
            $filePath = $folder . $name.'.'.$image->getClientOriginalExtension();
            $this->uploadOne($image, $folder, 'public',$name);
            $product->image = $filePath;
        }
        $product->save();
        $product->categories()->attach($request->get('categories'));

        // $input = $request->all();
        // if ($request->hasFile('image')){
        //     $input['image'] = '/upload/products/'.str_slug($input['name'], '_').str_random(8).'.'.$request->image->getClientOriginalExtension();
        //     $request->image->move(public_path('/upload/products/'), $input['image']);
        // }
        // Product::create($input);

        // foreach ($request->get('categories') as $value) {
        //     $product_category = new CategoryProduct();
        //     $product_category->product_id = $input['id'];
        //     $product_category->category_id = $value;
        //     $product_category->save();
        // }
        // $product_category = new Product();
        // $product_category->id;
        // $product_category->categories()->attach($input['categories']);


        // Product::categories()->attach($input['categories']);
        
        return redirect()->back()->with('status','Anda berhasil menambahkan product');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $title = "Hola-Halo | Show/Detail Produk";
        $product = Product::findOrFail($id);
        return view('produk.show',compact('product','title'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $title = 'POS | Edit Data Produk';
        $product = Product::findOrFail($id);
        $categories = Category::orderBy('name','asc')->get();
        return view('produk.edit', compact('product', 'title','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name'              => 'required|string|min:3',
            // 'image'             => 'required',
            'description'       => 'required|min:5',
            // 'category_id'       => 'required',
        ]);

        $product = Product::findOrFail($id);
        $product->name = $request->get('name');
        $product->description = $request->get('description');

        if ($request->has('image')) {
            if (!$product->image == NULL){
                unlink(public_path($product->image));
            }
            $image = $request->file('image');
            $name = str_slug($request->input('name'),'_').'_'.str_random(8);
            $folder = '/uploads/images/';
            $filePath = $folder . $name.'.'.$image->getClientOriginalExtension();
            $this->uploadOne($image, $folder, 'public',$name);
            $product->image = $filePath;
        }

        $product->update();
        $product->categories()->detach($request->get('categories'));
        $product->categories()->attach($request->get('categories'));

        // $input = $request->all();
        // $product = Product::findOrFail($id);
        // $input['image'] = $product->image;

        // if ($request->hasFile('image')){
        //     if (!$product->image == NULL){
        //         unlink(public_path($product->image));
        //     }
        //     $input['image'] = '/upload/products/'.str_slug($input['name'], '_').'_'.str_random(8).'.'.$request->image->getClientOriginalExtension();
        //     $request->image->move(public_path('/upload/products/'), $input['image']);
        // }

        // $product->update($input);
        return redirect()->back()->with('status','Anda berhasil mengubah data produk');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::findOrFail($id);

        if (!$product->image == NULL){
            unlink(public_path($product->image));
        }

        Product::destroy($id);
        return redirect()->back()->with('status','Anda berhasil menghapus produk');
    }

    // public function publish($id)
    // {
    //     $product = Product::where('id',$id)->first();
    //     $product->status = 'publish';
    //     $product->save();

    //     return redirect()->back()->with('status','Anda berhasil mengubah status produk');
    // }

    // public function draft($id)
    // {
    //     $product = Product::where('id',$id)->first();
    //     $product->status = 'draft';
    //     $product->save();

    //     return redirect()->back()->with('status','Anda berhasil mengubah status produk');
    // }

    // public function search($id)
    // {
    //     $product = Product::findOrFail($id);
    //     return $product;
    // }
}
