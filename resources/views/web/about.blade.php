@extends('layouts.header')
@section('stylebody')
<body class="main-layout inner_page">
@endsection
@section('content')
      <!-- about -->
      <div class="about">
         <div class="container_width">
            <div class="row d_flex">
                   <div class="col-md-7">
                  <div class="titlepage text_align_left">
                     <h2>Tentang Virus Corona </h2>
                     <p>Penyakit virus corona (COVID-19) adalah penyakit menular yang disebabkan oleh virus corona yang baru-baru ini ditemukan.
                     Sebagian besar orang yang tertular COVID-19 akan mengalami gejala ringan hingga sedang, dan akan pulih tanpa penanganan khusus.
                     </p>
                     <a class="read_more" href="about.html">Selengkapnya</a>
                  </div>
               </div>
               <div class="col-md-5">
                  <div class="about_img text_align_center">
                     <figure><img src="{{url('web/images/covid1.jpeg')}}" alt="#"/></figure>
                  </div>
               </div>
              
            </div>
         </div>
      </div>
      <!-- end about -->
@endsection