@extends('layouts.header')
@section('stylebody')
    <body class="main-layout inner_page">
@endsection
@section('content')
<!-- doctors -->
    <div class="doctors">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage text_align_center ">
                     <h2>Apa Kata Dokter ?</h2>
                  </div>
               </div>
            </div>
            <div class="row d_flex">
               <div class=" col-md-6">
                     <div id="ho_efcet" class="reader text_align_center">
                        <i><img src="web/images/doctor1.png" alt="#"/></i>
                        <h3>Dr.Siti Chandra Widjanantie Sp.KFR</h3>
                        <h4>Dokter spesialis fisik dan rehabilitasi</h4>
                        <p>gejala ini bisa ada selama 6 bulan sampai 1 tahun pasca kesembuhan dari COVID-19. Menurutnya, keluhan terbanyak pasien long COVID beragam usia adalah kelelahan terus-menerus (fatigue).Terbesar keluhan adalah cepat lelah. Capek rasanya nggak ngapa-ngapain, kok capek? Aktivitas sedikit, capek. Mungkin COVID nggak parah, isolasi mandiri di rumah.</p>
                        <span><img src="images/do.png" alt="#"/></span>
                     </div>
                  </div>
                          <div class=" col-md-6">
                     <div id="ho_efcet" class="reader text_align_center">
                        <i><img src="web/images/doctor2.png" alt="#"/></i>
                        <h3>Dr.Diah Handayani Sp.P</h3>
                        <h4>Dokter spesialis paru</h4>
                        <p>isu long COVID di Indonesia hingga kini kerap dianggap sebagai upaya menakut-nakuti.
                           Padahal, kondisi ini benar-benar ada dan bisa berimbas pada beragam organ tubuh. Di antaranya, masalah paru-paru dan kardiovaskular yang baru timbul setelah pasien dinyatakan sembuh dari COVID-19.
                           Bukan mengada-ngada, tapi ini sindrom yang menyeluruh. Bisa saja tidak hanya 1 (gejala), tapi banyak. Bisa multiple</p>
                        <span><img src="images/do.png" alt="#"/></span>
                     </div>
                  </div>
               </div>
         </div>
    </div>
    <!-- end doctors -->
@endsection