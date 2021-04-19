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
                     <p>Coronavirus adalah suatu kelompok virus yang dapat menyebabkan penyakit pada hewan atau manusia. 
                        Beberapa jenis coronavirus diketahui menyebabkan infeksi saluran nafas pada manusia mulai dari batuk pilek hingga yang lebih serius seperti Middle East Respiratory Syndrome (MERS) dan Severe Acute Respiratory Syndrome (SARS). 
                        Coronavirus jenis baru yang ditemukan menyebabkan penyakit COVID-19.</p>
                     <p>COVID-19 adalah penyakit menular yang disebabkan oleh jenis coronavirus yang baru ditemukan.  Virus baru dan penyakit yang disebabkannya ini tidak dikenal sebelum mulainya wabah di Wuhan, Tiongkok, bulan Desember 2019.
                        COVID-19 ini sekarang menjadi sebuah pandemi yang terjadi di banyak negara di seluruh dunia. 
                        Virus corona bisa menimbulkan beragam gejala pada pengidapnya. Gejala yang muncul ini bergantung pada jenis virus corona yang menyerang, dan seberapa serius infeksi yang terjadi. 
                        Berikut beberapa gejala virus corona yang terbilang ringan: Hidung beringus, sakit kepala, batuk, sakit tenggorokan,demam, merasa tidak enak badan </p>
                     <!-- <a class="read_more" href="about.html">Selengkapnya</a> -->
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