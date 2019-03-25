@extends('layouts.master')

@section('content')
<div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header"><i class="fa fa-table"></i>Data Kategori</div>
            <div class="card-body">
                    <a href="{{ route('categories.create') }}"><button type="button" class="btn btn-primary waves-effect waves-light m-1">Tambah Data</button></a><br><br>
              
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
              <table  class="table table-hover">
                <thead class="thead-info shadow-info">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Slug</th>
                        {{-- <th>Created At</th>
                        <th>Updated At</th> --}}
                        <th>Status</th>
                        <th width="20px"></th>
                        <th width="70px"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                    <tr>
                        <td>{{ $category->id }}</td>
                        <td>{{ ucwords($category->name) }}</td>
                        <td>{{ $category->slug }}</td>
                        <td>
                            @if ($category->status == 'publish')
                                <button type="button" class="btn btn-inverse-primary waves-effect btn-sm">{{ $category->status }}</button>
                            @elseif ($category->status == 'draft')
                            <button type="button" class="btn btn-inverse-danger waves-effect btn-sm">{{ $category->status }}</button>
                            @endif
                        </td>
                        {{-- <td>{{ $category->created_at }}</td>
                        <td>{{ $category->updated_at }}</td> --}}
                       <td>

                            <a href="{{ route('categories.edit', ['id' => $category->id]) }}" class="btn btn-gradient-purpink btn-sm">Ubah</a>
                        </td>
                            <td>
                                    <form 
                                    class="d-inline"
                                    action="{{route('categories.destroy', ['id' => $category->id])}}"
                                    method="POST"
                                    onsubmit="return confirm('Anda yakin akan menghapus data ini dan memindahkan ke tong sampah ?')"
                                    >
                  
                                    @csrf 
                  
                                    <input 
                                      type="hidden" 
                                      value="DELETE" 
                                      name="_method">
                  
                                    <input 
                                      type="submit" 
                                      class="btn btn-gradient-ibiza btn-sm" 
                                      value="Hapus">
                  
                                  </form>
                            </td>
                    <tr>
                    @endforeach
                </tbody>
                {{-- <tfoot class="thead-danger shadow-danger">
                        <th>ID</th>
                        <th>Name</th>
                        <th>Slug</th>
                        <th>Created At</th>
                        <th>Updated At</th>
                </tfoot> --}}
                </table>
                <br>
                {{ $categories->links() }}
            </div>
            </div>
          </div>
        </div>
      </div><!-- End Row-->
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

