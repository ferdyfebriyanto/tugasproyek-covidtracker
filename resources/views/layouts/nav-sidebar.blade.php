 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
   <!-- Brand Logo -->
   <a href="../../index3.html" class="brand-link">
     <img src="{{ asset ('assets/dist/img/logoCovidTracker.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
     <span class="brand-text font-weight-light">Covid Tracker</span>
   </a>

   <!-- Sidebar -->
   <div class="sidebar">
     <!-- Sidebar user (optional) -->
     <div class="user-panel mt-3 pb-3 mb-3 d-flex">
       <div class="image">
         <img src="{{ asset ('assets/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
       </div>
       <!-- <div class="info">
         <a href="#" class="d-block">Administrator</a>
       </div> -->

       <!-- Right Side Of Navbar -->
       <ul class="info navbar-nav ml-auto dropdown-toggle">
         <!-- Authentication Links -->
         @guest
         @if (Route::has('login'))
         <li class="nav-item">
           <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
         </li>
         @endif

         @if (Route::has('register'))
         <li class="nav-item">
           <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
         </li>
         @endif
         @else
         <li class="nav-item dropdown">
           <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
             {{ Auth::user()->name }}
           </a>

           <!-- <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown"> -->
             <a class="dropdown-item bg-danger" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
               {{ __('Logout') }}
             </a>
             <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
               @csrf
             </form>
           <!-- </div> -->
         </li>
         @endguest
       </ul>





     </div>

     <!-- SidebarSearch Form -->
     <div class="form-inline">
       <div class="input-group" data-widget="sidebar-search">
         <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
         <div class="input-group-append">
           <button class="btn btn-sidebar">
             <i class="fas fa-search fa-fw"></i>
           </button>
         </div>
       </div>
     </div>

     <!-- Sidebar Menu -->
     <nav class="mt-2">
       <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
         <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
         <li class="nav-item">
           <a href="/admin/dashboard" class="nav-link">
             <i class="nav-icon fas fa-tachometer-alt"></i>
             <p>
               Dashboard
             </p>
           </a>
         </li>
         <li class="nav-item">
           <a href="/admin/news" class="nav-link">
             <i class="nav-icon fas fa-copy"></i>
             <p>
               News
             </p>
           </a>
         </li>
         <li class="nav-item">
           <a href="/admin/category" class="nav-link">
             <i class="nav-icon fas fa-tag"></i>
             <p>
               Categories
             </p>
           </a>
         </li>
         <li class="nav-item">
           <a href="/admin/users" class="nav-link">
             <i class="nav-icon fas fa-user-circle"></i>
             <p>
               Users
             </p>
           </a>
         </li>
       </ul>
     </nav>
   </div>
   <!-- /.sidebar -->
 </aside>