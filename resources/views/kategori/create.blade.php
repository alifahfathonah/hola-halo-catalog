@extends('layouts.master')

@section('content')
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <form id="signupForm" action="{{ route('categories.store') }}" method="POST">
                    @csrf
                <h4 class="form-header text-uppercase">
                  <i class="fa fa-bars"></i>
                   Tambah Data Kategori
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
                

                <div class="form-group row">
                  <label for="input-10" class="col-sm-2 col-form-label">Nama Kategori</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="input-10" name="name" value="{{ old('name') }}">
                <div class="form-footer">
                    <button type="reset" class="btn btn-danger"><i class="fa fa-times"></i> RESET</button>
                    <button type="submit" class="btn btn-success"><i class="fa fa-check-square-o"></i> SAVE</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div><!--End Row-->

@endsection

@section('top')
@endsection

@section('bot')
<!--Form Validatin Script-->
<script src="{{ asset('assets/plugins/jquery-validation/js/jquery.validate.min.js') }}"></script>
<script>

$().ready(function() {

$("#personal-info").validate();

// validate signup form on keyup and submit
$("#signupForm").validate({
    rules: {
        name: {
                required: true,
                minlength: 3
            },
    },
    messages: {
        name: {
            required: "Mohon, masukan nama kategori",
            minlength: "Nama kategori minimal harus 3 digit"
        },
    }
});

});

</script>

@endsection

