@extends('layouts.master2')

@section('content')

<h6 class="text-uppercase">Detail Product</h6>
       <hr>
      <div class="row">
        <div class="col-lg-6">
         <div class="card card-primary">
          <img src="{{ url($product->image) }}" class="card-img-top" alt="Card image cap">
          <div class="card-body">
          <h5 class="card-title text-primary">Name : {{ $product->name }}</h5>
          <p class="card-text"> Description {{ $product->description }}</p>
        <hr>
        @foreach($product->categories as $category)
        <a href="javascript:void();" class="btn btn-inverse-primary waves-effect waves-light m-1">{{$category->name}}</a>
      @endforeach
            <hr>
            Created At : <p class="card-text">{{ $product->created_at }}</p>
            Update At : <p class="card-text">{{ $product->updated_at }}</p>
          </div>
        </div>
        </div>
      </div><!--End Row-->

{{-- 
<h6 class="text-uppercase">Cards with colums</h6>
       <hr>
	   <div class="card">
	     <div class="row">
		   <div class="col-4 col-md-4 col-lg-4 d-flex align-items-stretch">
		     <img class="" src="{{ url($product->image) }}"  style="background-repeat:no-repeat;bacground-position center center;background-size:cover;" alt="Card image">
		   </div>
		   <div class="col-4 col-md-4 col-lg-4 d-flex align-items-center">
			   <div class="card-body text-center">
				<h5 class="card-title text-secondary">Name : {{ $product->name }}</h5>
         <p class="card-text">Description {{ $product->description}}</p>
        <hr><h5 class="card-title text-secondary">Kategori</h5>
        <ul class="pl-3">
          @foreach($product->categories as $category)
            <a href="javascript:void();" class="btn btn-inverse-secondary waves-effect waves-light m-1"><i class="fa fa-globe mr-1"></i> {{$category->name}}</a>
          @endforeach
          </ul>
			  </div>
		   </div>
		 </div>
    </div> --}}
@endsection

@section('top')
    <!--Data Tables -->
    <link href="{{ asset('assets/plugins/bootstrap-datatable/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/plugins/bootstrap-datatable/css/buttons.bootstrap4.min.css') }}" rel="stylesheet" type="text/css">
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

