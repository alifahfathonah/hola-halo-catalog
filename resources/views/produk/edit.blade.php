@extends('layouts.master')

@section('content')
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <form action="{{ route('product.update', ['id'=> $product->id]) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                <h4 class="form-header text-uppercase">
                  <i class="fa fa-bars"></i>
                   Ubah Data Produk
                </h4>

                @if (session('status'))
                <div class="alert alert-success alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <div class="alert-icon contrast-alert">
                         <i class="icon-check"></i>
                        </div>
                        <div class="alert-message">
                          <span><strong>Success!</strong> {{ session('status') }}</span>
                        </div>
                      </div> 
                @endif
                
                <input type="hidden" name="id" value="{{ $product->id }}">

                <div class="form-group row">
                        <label for="input-10" class="col-sm-2 col-form-label">Nama Produk</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="input-10" name="name" value="{{ old('name')? old('name'):$product->name }}">
                        </div>
                      </div>

                      <div class="form-group row">
                            <label for="input-11" class="col-sm-2 col-form-label">Kategori</label>
                            <div class="col-sm-10">
                              <select name="categories[]" class="form-control multiple-select" multiple="multiple">
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}">{{ ucwords($category->name) }}</option>
                                @endforeach
                            </select>
                            </div>
                          </div>
      
                      <div class="form-group row">
                        <label for="input-14" class="col-sm-2 col-form-label">Gambar</label>
                        <div class="col-sm-10">
                          <input type="file" class="form-control" id="image" name="image" placeholder="Enter image" value="{{ old('image') }}"  >
                        </div>
                      </div>
                      
                      <div class="form-group row">
                        <label for="input-17" class="col-sm-2 col-form-label">Deskripsi</label>
                        <div class="col-sm-10">
                          <textarea class="form-control" name="description" rows="4" id="input-17">{{ old('description')? old('description'):$product->description }}</textarea>
                        </div>
                      </div>
                      <div class="form-footer">
                          <button type="submit" class="btn btn-danger"><i class="fa fa-times"></i> CANCEL</button>
                          <button type="submit" class="btn btn-success"><i class="fa fa-check-square-o"></i> SAVE</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div><!--End Row-->

@endsection

@section('top')
<!--Select Plugins-->
<link href="{{ asset('assets/plugins/select2/css/select2.min.css') }}" rel="stylesheet" />
<!--multi select-->
<link href="{{ asset('assets/plugins/jquery-multi-select/multi-select.css') }}" rel="stylesheet" type="text/css">
@endsection

@section('bot')
<!--Form Validatin Script-->
<script src="{{ asset('assets/plugins/jquery-validation/js/jquery.validate.min.js') }}"></script>
<!--Select Plugins Js-->
<script src="{{  asset('assets/plugins/select2/js/select2.min.js') }}"></script>
<script src="{{ asset('assets/plugins/jquery-multi-select/jquery.multi-select.js') }}"></script>


<script>
  $(document).ready(function() {
      $('.single-select').select2();

      $('.multiple-select').select2();
    });
    
</script>

<script>

        $().ready(function() {
    
        $("#personal-info").validate();
    
       // validate signup form on keyup and submit
        $("#signupForm").validate({
            rules: {
                category_id: "required",
                // image: "required",
                status: "required",
                name: {
                    required: true,
                    minlength: 3
                },
                price: {
                    required: true,
                    minlength: 3,
                },
                color: {
                    required: true,
                    minlength: 3,
                },
                description: {
                    required: true,
                    minlength:5,
                },
            },
            messages: {
                category_id: "Mohon, masukan kategori produk",
                // image: "Mohon, upload gambar produk",
                status: "Mohon masukan status produk",
                name: {
                    required: "Mohon, masukan nama produk",
                    minlength: "Nama produk minimal harus 3 digit"
                },
                price: {
                    required: "Mohon, masukan harga produk",
                    minlength: "Nama produk minimal harus 3 digit"
                },
                color: {
                    required: "Mohon, masukan warna produk",
                    minlength: "Nama produk minimal harus 3 digit"
                },
                description: {
                    required: "Mohon, masukan deskirpsi produk",
                    minlength: "Nama produk minimal harus 5 digit"
                },
            }
        });
    
    });
    
        </script>

@endsection

