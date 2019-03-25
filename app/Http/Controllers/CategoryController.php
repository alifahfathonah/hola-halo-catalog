<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use Yajra\DataTables\Datatables;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $title = "Hola-Hola | Data Kategori";
        $categories = Category::paginate(10);
        $filterKeyword = $request->get('name');
        $status=$request->get('status');
        
        if($status){
            $categories = Category::where('status', $status)->paginate(10);
        } else {
            $categories = Category::paginate(10);
        }

        if($filterKeyword){
            if ($status) {
                $categories = Category::where('name', 'LIKE', "%$filterKeyword%")
                ->where('status', $status)
                ->paginate(10);
            } else {
                $categories = Category::where('name', 'LIKE', "%$filterKeyword%")
                ->paginate(10);
            }
        }

        return view('kategori.index',compact('categories','title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Hola-Hola | Buat Kategori';
        return view('kategori.create');
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
            'name'  => 'required|string|min:3'
        ]);

        $category = new Category();
        $category->name = $request->get('name');
        $category->slug = str_slug($request->get('name'),'-');
        $category->save();

        return redirect()->back()->with('status','Anda berhasil menambahkan data kategori');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $title = 'Hola-Hola | Edit Data Kategori';
        $category = Category::findOrFail($id);
        return view('kategori.edit',compact('category', 'title'));
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
            'name'  => 'required|string|min:3'
        ]);
        
        $category = Category::findOrFail($id);
        $category->name = $request->get('name');
        $category->slug = str_slug($request->get('name'),'-');
        $category->update();

        return redirect()->back()->with('status','Anda berhasil mengubah data kategori');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();
        return redirect()->back()->with('status','Anda berhasil menghapus data kategori');
    }

    public function publish($id)
    {
        $category = Category::where('id',$id)->first();
        $category->status = 'publish';
        $category->save();

        return redirect()->back()->with('status','Anda berhasil mengubah status kategori');
    }

    public function draft($id)
    {
        $category = Category::where('id',$id)->first();
        $category->status = 'draft';
        $category->save();

        return redirect()->back()->with('status','Anda berhasil mengubah status kategori');
    }
}
