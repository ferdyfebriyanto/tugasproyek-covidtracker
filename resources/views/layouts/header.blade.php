<!DOCTYPE html>
<html lang="en">

<head>
   <!-- basic -->
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <!-- mobile metas -->
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="viewport" content="initial-scale=1, maximum-scale=1">
   <!-- site metas -->
   <title>@yield('title')</title>
   <meta name="keywords" content="">
   <meta name="description" content="">
   <meta name="author" content="">
   <!-- bootstrap css -->
   <link rel="stylesheet" href="{{url('web/css/bootstrap.min.css')}}">
   <!-- style css -->
   <link rel="stylesheet" href="{{url('web/css/style.css')}}">
   <!-- Responsive-->
   <link rel="stylesheet" href="{{url('web/css/responsive.css')}}">
   <!-- fevicon -->
   <link rel="icon" href="{{url('web/images/fevicon.png')}}" type="image/gif" />
   <!-- Scrollbar Custom CSS -->
   <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
   <link rel="stylesheet" href="{{url('web/css/owl.carousel.min.css')}}">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
   <link rel="stylesheet" href="https://rawgit.com/LeshikJanz/libraries/master/Bootstrap/baguetteBox.min.css">

   <!--[if lt IE 9]>
      
      <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">

      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<!-- body -->
@yield('stylebody')
<!-- loader  -->
<div class="loader_bg">
   <div class="loader"><img src="{{url('web/images/loading2.gif')}}" alt="#" /></div>
</div>
<!-- end loader -->
<!-- top -->
<!-- header -->
<header class="header-area">
   <!-- <div class="left">
      <a href="Javascript:void(0)"><i class="fa fa-search" aria-hidden="true"></i></a>
   </div> -->
   <div class="right">
      <a href="/login"><i class="fa fa-user" aria-hidden="true"></i></a>
   </div>
   <div class="container">
      <div class="row d_flex">
         <div class="col-sm-3 logo_sm">
            <div class="logo">
               <a href="{{url('/')}}"></a>
            </div>
         </div>
         <div class="col-lg-10 offset-lg-1 col-md-12 col-sm-9">
            <div class="navbar-area">
               <nav class="site-navbar">
                  <ul>
                     @php $active = Session::get('active'); @endphp
                     <li><a class="" href="{{url('/')}}">Home</a></li>
                     <li><a class="" href="{{url('gejala')}}">Gejala</a></li>
                     <li><a class="" href="{{url('doctor')}}">Doctor</a></li>

                     <li><a href="{{url('covid_maps')}}" class="logo_midle" style="margin-left:45px; text-align:center">Covid Tracker</a></li>

                     <li><a class="" href="{{url('pencegahan')}}">Pencegahan</a></li>
                     <li><a class="" href="{{url('news')}}">News</a></li>
                     <li><a class="" href="{{url('contact')}}">Contact </a></li>
                     <!-- <li><a class="" href="{{url('login_web')}}">Login</a></li> -->
                  </ul>
                  <button class="nav-toggler">
                     <span></span>
                  </button>
               </nav>
            </div>
         </div>
      </div>
   </div>
</header>
<!-- end header -->
@yield('content')
@include('layouts.footer')