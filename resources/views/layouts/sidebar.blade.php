<!--Start sidebar-wrapper-->
<div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
    <div class="brand-logo">
     <a href="index.html">
      <img src=" {{asset('assets/images/logo-icon.png') }}" class="logo-icon" alt="logo icon">
      <h5 class="logo-text"> Hola-Hola</h5>
    </a>
    </div>
    <div class="user-details">
     <div class="media align-items-center user-pointer collapsed" data-toggle="collapse" data-target="#user-dropdown">
       <div class="avatar"><img class="mr-3 side-user-img" src=" {{ asset('assets/images/avatars/avatar-4.png') }} " alt="user avatar"></div>
        <div class="media-body">
        <h6 class="side-user-name">{{ ucwords(Auth::user()->name) }}</h6>
       </div>
      </div>
      <div id="user-dropdown" class="collapse">
         <ul class="user-setting-menu">
           <li><a  href="{{ route('logout') }}" onclick="event.preventDefault();
                                  document.getElementById('logout-form').submit();">
                                  <i class="icon-power"></i> {{ __('Logout') }}</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </li>

                                    
         </ul>
      </div>
     </div>
    <ul class="sidebar-menu do-nicescrol">
     <li class="sidebar-header">MAIN NAVIGATION</li>
     
     <li class="sidebar-header">LABELS</li>
     <li><a href="{{ url('/home') }}" class="waves-effect"><i class="fa fa-dashboard text-info"></i><span>Dashboard</span></a></li>

     
     <li>
       <a href="javaScript:void();" class="waves-effect">
          <i class="fa fa-bars"></i><span>Kategori</span>
         <i class="fa fa-angle-left pull-right"></i>
       </a>
       <ul class="sidebar-submenu">
         <li><a href="{{ route('categories.index') }}"><i class="fa fa-long-arrow-right"></i>Lihat Data</a></li>
             <li><a href="{{  route('categories.create') }}"><i class="fa fa-long-arrow-right"></i> Buat Data</a></li>
       </ul>
     </li>

     
     <li>
        <a href="javaScript:void();" class="waves-effect">
        <i class="fa fa-cubes"></i><span>Produk</span> 
           <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="sidebar-submenu">
                <li><a href="{{ route('product.index') }}"><i class="fa fa-long-arrow-right"></i> Lihat Data</a></li>
                <li><a href="{{ route('product.create') }}"><i class="fa fa-long-arrow-right"></i> Buat Data</a></li>
        </ul>
      </li>

     <li class="sidebar-header">LABELS</li>
     <li>
            <a class="waves-effect" href="{{ route('logout') }}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        <i class="icon-power text-danger"></i> {{ __('Logout') }}</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>

         </li>
   </ul>
    
  </div>
  <!--End sidebar-wrapper-->