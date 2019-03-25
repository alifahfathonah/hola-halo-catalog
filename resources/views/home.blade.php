@extends('layouts.master')

@section('top')
    <!-- notifications css -->
  <link rel="stylesheet" href="{{ asset('assets/plugins/notifications/css/lobibox.min.css') }}"/>
  <!-- Vector CSS -->
  <link href="{{ asset('assets/plugins/vectormap/jquery-jvectormap-2.0.2.css') }}" rel="stylesheet"/>
@endsection

@section('content')
<div class="row mt-4">
        <div class="col-12 col-lg-6 col-xl-3">
          <div class="card gradient-purpink">
            <div class="card-body">
              <div class="media">
              <div class="media-body text-left">
                <h4 class="text-white">{{ \App\Category::count() }}</h4>
                <span class="text-white">Kategori</span>
              </div>
			  <div class="align-self-center"><span id="dash-chart-1"></span></div>
            </div>
            </div>
          </div>
        </div>
		<div class="col-12 col-lg-6 col-xl-3">
          <div class="card gradient-scooter">
            <div class="card-body">
              <div class="media">
              <div class="media-body text-left">
                <h4 class="text-white">{{ \App\Product::count() }}</h4>
                <span class="text-white">Produk</span>
              </div>
			  <div class="align-self-center"><span id="dash-chart-2"></span></div>
            </div>
            </div>
          </div>
        </div>
        {{-- <div class="col-12 col-lg-6 col-xl-3">
          <div class="card gradient-ibiza">
            <div class="card-body">
              <div class="media">
			  <div class="media-body text-left">
                <h4 class="text-white">{{ \App\Stock::count() }}</h4>
                <span class="text-white">Stok</span>
              </div>
               <div class="align-self-center"><span id="dash-chart-3"></span></div>
            </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-lg-6 col-xl-3">
          <div class="card gradient-ohhappiness">
            <div class="card-body">
              <div class="media">
              <div class="media-body text-left">
                <h4 class="text-white">{{ \App\Refund::count() }}</h4>
                <span class="text-white">Refund</span>
              </div>
			  <div class="align-self-center"><span id="dash-chart-4"></span></div>
            </div>
            </div>
          </div>
        </div> --}}
        {{-- <div class="col-12 col-lg-6 col-xl-3">
                <div class="card gradient-ohhappiness">
                  <div class="card-body">
                    <div class="media">
                    <div class="media-body text-left">
                      <h4 class="text-white">{{ \App\Transaction::count() }}</h4>
                      <span class="text-white">Transaksi</span>
                    </div>
                    <div class="align-self-center"><span id="dash-chart-5"></span></div>
                  </div>
                  </div>
                </div>
              </div> --}}
      </div><!--End Row-->

@endsection

@section('bot')
    <!-- Vector map JavaScript -->
  <script src="{{ asset('assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js') }}"></script>
  <script src="{{ asset('assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
  <!-- Sparkline JS -->
  <script src="{{ asset('assets/plugins/sparkline-charts/jquery.sparkline.min.js') }}"></script>
  <!-- Chart js -->
  <script src="{{ asset('assets/plugins/Chart.js/Chart.min.js') }}"></script>
  <!--notification js -->
  <script src="{{ asset('assets/plugins/notifications/js/lobibox.min.js') }}"></script>
  <script src="{{ asset('assets/plugins/notifications/js/notifications.min.js') }}"></script>
  <!-- Index js -->
  <script src="{{ asset('assets/js/index.js') }}"></script>
  
@endsection