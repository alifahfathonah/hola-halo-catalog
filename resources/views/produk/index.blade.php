@extends('layouts.master') 
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header"><i class="fa fa-table"></i>Data Produk</div>
            <div class="card-body">
                <a href="{{ route('product.create') }}"><button type="button" class="btn btn-primary waves-effect waves-light m-1">Tambah Data</button></a><br><br>               
                 
                <form action="{{route('product.index')}}">

                    <div class="form-group row">
                        <div class="col-sm-10">
                                <select name="category" class="form-control single-select" id="basic-select">
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


                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead class="thead-info shadow-info">
                            <tr>
                                <th>Id</th>
                                {{-- <th>Deskripsi</th> --}}
                                <th>Nama</th>
                                <th>Gambar</th>
                                <th>Kategori</th>
                                <th width="20px"></th>
                                <th width="70px"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $no =1;
                            @endphp
                            @foreach ($products as $product)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ ucwords($product->name) }}</td>
                                <td><img class="rounded-square" width="50" height="50" src="{{ url($product->image) }}" alt="gambar produk"></td>
                                <td>
                                    <ul class="pl-3">
                                    @foreach($product->categories as $category)
                                      <li>{{$category->name}}</li>  
                                    @endforeach
                                    </ul>
                                  </td>
                                <td>
                                        <a href="{{ route('product.show', ['id' => $product->id]) }}" class="btn btn-gradient-bloody btn-sm">Show</a>
                                </td>
                                <td>
                                        <a href="{{ route('product.edit', ['id' => $product->id]) }}" class="btn btn-gradient-purpink btn-sm">Ubah</a>
                                

                                        <form class="d-inline" action="{{route('product.destroy', ['id' => $product->id])}}" method="POST" onsubmit="return confirm('Anda yakin akan menghapus data ini dan memindahkan ke tong sampah ?')">

                                                @csrf
        
                                                <input type="hidden" value="DELETE" name="_method">
        
                                                <input type="submit" class="btn btn-gradient-ibiza btn-sm" value="Hapus">
        
                                            </form>
                                   
                                   
                                   </td>
                                <tr>
                                    @endforeach
                        </tbody>
                        {{--
                        <tfoot class="thead-danger shadow-danger">
                            <th>ID</th>
                            <th>Name</th>
                            <th>Slug</th>
                            <th>Created At</th>
                            <th>Updated At</th>
                        </tfoot> --}}
                    </table>
                    <br> {{ $products->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Row-->
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