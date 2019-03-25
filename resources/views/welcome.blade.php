@extends('layouts.master2') 
@section('content')

<form action="{{route('beranda')}}">

    <div class="form-group row">
        <div class="col-sm-10">
                <select name="category" class="form-control single-select" id="basic-select">
                  <option value="">Pilih Kategori</option>
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}">{{ ucwords($category->name) }}</option>
                        @endforeach
                    </select>
                    {{-- <input 
                            type="text" 
                            class="form-control" 
                            placeholder="cari data berdasarkan nama kategori"
                            value="{{Request::get('category')}}"
                            name="category"> --}}
        </div>

        <div class="col-sm-1">
            <input type="submit" value="Filter" class="btn btn-primary">
        </div>
    </div>

</form> 


<h6 class="text-uppercase">List Produk</h6>
       <hr>
      <div class="row">
          @foreach ($products as $product)
        <div class="col-lg-4">
         <div class="card card-pink">
          <img src="{{  url($product->image) }}" class="card-img-top" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title text-primary">{{ $product->name }}</h5>
            <p class="card-text">{{ substr($product->description,0,80) }}</p>
            <hr> Kategori:
            @foreach($product->categories as $category)
            <b>{{ $category->name }}</b>,
            @endforeach
            <hr>
            <a href="{{ route('beranda.show', ['id' => $product->id]) }}" class="btn btn-gradient-bloody btn-sm">Show</a>
          </div>
        </div>
        </div>
        @endforeach
      </div><!--End Row-->
      <br> {{ $products->links() }}
@endsection
 
@section('top')
<!--Data Tables -->
<link href="{{ asset('assets/plugins/bootstrap-datatable/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('assets/plugins/bootstrap-datatable/css/buttons.bootstrap4.min.css') }}" rel="stylesheet" type="text/css">
<!--Select Plugins-->
<link href="{{ asset('assets/plugins/select2/css/select2.min.css') }}" rel="stylesheet" />

@endsection
 
@section('bot')
<!--Data Tables js-->
<script src="{{ asset('assets/plugins/bootstrap-datatable/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/plugins/bootstrap-datatable/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets/plugins/bootstrap-datatable/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('assets/plugins/bootstrap-datatable/js/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets/plugins/bootstrap-datatable/js/jszip.min.js') }}"></script>
<script src="{{ asset('assets/plugins/bootstrap-datatable/js/pdfmake.min.js') }}"></script>
<script src="{{ asset('assets/plugins/bootstrap-datatable/js/vfs_fonts.js') }}"></script>
<script src="{{ asset('assets/plugins/bootstrap-datatable/js/buttons.html5.min.js') }}"></script>
<script src="{{ asset('assets/plugins/bootstrap-datatable/js/buttons.print.min.js') }}"></script>
<script src="{{ asset('assets/plugins/bootstrap-datatable/js/buttons.colVis.min.js') }}"></script>
<!--Select Plugins Js-->
<script src="{{  asset('assets/plugins/select2/js/select2.min.js') }}"></script>


<script>
        $(document).ready(function() {
            $('.single-select').select2();
          });
    </script>

<script>
    $(document).ready(function() {
             //Default data table
              $('#default-datatable').DataTable();
       
       
              var table = $('#example').DataTable( {
               lengthChange: false,
               buttons: [ 'copy', 'excel', 'pdf', 'print', 'colvis' ]
             } );
        
            table.buttons().container()
               .appendTo( '#example_wrapper .col-md-6:eq(0)' );
             
             } );
</script>


@endsection