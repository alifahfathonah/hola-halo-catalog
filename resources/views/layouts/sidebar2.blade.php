<!--Start sidebar-wrapper-->
<div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
    <div class="brand-logo">
     <a href="index.html">
      <img src=" {{asset('assets/images/logo-icon.png') }}" class="logo-icon" alt="logo icon">
      <h5 class="logo-text"> Hola-Hola</h5>
    </a>
    </div>
    <ul class="sidebar-menu do-nicescrol">
      <li class="sidebar-header">LOGIN </li>
      <li>
          <a class="waves-effect" href="{{ route('login') }}">
                      <i class="icon-power text-success"></i> {{ __('Login') }}</a>

       </li>

    
  </div>
  <!--End sidebar-wrapper-->