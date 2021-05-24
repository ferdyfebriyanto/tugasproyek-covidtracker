@extends('layouts.header')
@section('stylebody')
 <body class="main-layout">
@endsection
@section('content')
            <div class="full_bg">
      <!-- header inner -->
         <div class="section">
            <!-- carousel code -->
            <div id="banner1" class="carousel slide slider_main">
               <ol class="carousel-indicators ">
                  <li data-target="#banner1" data-slide-to="0" class="indicator-li-1">01</li>
                  <li data-target="#banner1" data-slide-to="1" class="">02</li>
                  <li data-target="#banner1" data-slide-to="2" class="active">03</li>
               </ol>
               <div class="carousel-inner">
                  <!-- first slide -->
                  <div class="carousel-item active">
                     <div class="carousel-caption cuplle">
                        <div class="container">
                           <div class="row">
                              <div class="col-md-8">
                                 <div class="photog">
                                    <h1>Care early<br>Coronavirus</h1>
                                    <a class="read_more" href="javascript:void(0)" >Read More</a>
                                    <a class="read_more" href="about.html" >About Us</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- second slide -->
                  <div class="carousel-item">
                     <div class="carousel-caption cuplle">
                        <div class="container">
                           <div class="row">
                              <div class="col-md-8">
                                <div class="photog">
                                    <h1>Care early<br>Coronavirus</h1>
                                    <a class="read_more" href="javascript:void(0)" >Read More</a>
                                    <a class="read_more" href="about.html" >About Us</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- third slide -->
                  <div class="carousel-item">
                     <div class="carousel-caption cuplle">
                        <div class="container">
                           <div class="row">
                              <div class="col-md-8">
                                <div class="photog">
                                    <h1>Care early<br>Coronavirus</h1>
                                    <a class="read_more" href="javascript:void(0)" >Read More</a>
                                    <a class="read_more" href="about.html" >About Us</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- controls -->
               <a class="carousel-control-prev" href="#banner1" role="button" data-slide="prev">
               <i class="fa fa-angle-left" aria-hidden="true"></i>
               <span class="sr-only">Previous</span>
               </a>
               <a class="carousel-control-next" href="#banner1" role="button" data-slide="next">
               <i class="fa fa-angle-right" aria-hidden="true"></i>
               <span class="sr-only">Next</span>
               </a>
            </div>
         </div>
      </div>
      <!-- end banner -->

      <!-- about -->
      <div class="about">
         <div class="container_width">
            <div class="row d_flex">
            <div class="col-md-5">
                  <div class="about_img text_align_center">
                     <figure><img src="{{url('web/images/covid1.jpeg')}}" alt="#"/></figure>
                  </div>
                  </div>
                  <div class="col-md-7">
                  <div class="titlepage text_align_left">
                     <h2>Tentang Virus Corona </h2>
                     <p>Awal mula penyebaran virus corona di Indonesia terjadi pada tanggal 14 Februari 2020, pasien terinfeksi virus corona berdansa dengan WNA Jepang. Pasien berusia 31 tahun ini memang bekerja sebagai guru dansa dan WNA asal Jepang ini juga merupakan teman dekatnya. Selang dua hari, yakni 16 Februari 2020 pasien terkena sakit batuk.
                        Pasien kemudian melakukan pemeriksaan di rumah sakit terdekat. Namun, saat itu pasien langsung dibolehkan untuk rawat jalan atau kembali ke rumah. Namun, sakit yang dideritanya tidak kunjung sembuh. Hingga pada 26 Februari 2020, pasien dirujuk ke rumah sakit dan diminta untuk menjalani rawat inap. Pada saat inilah, batuk yang diderita pasien mulai disertai sesak napas.
                        Pada 28 Februari 2020, pasien mendapatkan telepon dari temannya yang di Malaysia. Dalam sambungan telepon tersebut, pasien mendapatkan informasi jika WNA Jepang yang merupakan temannya itu positif terinfeksi virus corona.
                     </p>
                     <a class="read_more" href="/about">About More</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- end about -->
   <!-- coronata -->
   <div class="about">
         <div class="container_width">
            <div class="row d_flex">
            <div class="col-md-5">
                  <div class="about_img text_align_center">
                     <figure><img src="{{url('web/images/corona.png')}}" alt="#"/></figure>
                  </div>
                  </div>
                  <div class="col-md-7">
                  <div class="titlepage text_align_left">
                  <h2>Apa Itu CoronaVirus?</h2>
                  <p>Virus Corona atau severe acute respiratory syndrome coronavirus 2 (SARS-CoV-2) adalah virus yang menyerang sistem pernapasan. Penyakit karena infeksi virus ini disebut COVID-19. Virus Corona bisa menyebabkan gangguan ringan pada sistem pernapasan, infeksi paru-paru yang berat, hingga kematian.
                  </p>
                     <a class="read_more" href="/about">About More</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   
   <!-- end coronata -->
   
   <!-- gejala -->
   <div class="cases">
         <div class="container-fluid">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage text_align_center ">
                     <h2>Gejala Umum</h2>
                  </div>
               </div>
            </div>
            <div class="row d_flex">
               <div class=" col-md-4">
                  <div class="latest text_align_center">
                     <figure><img src="web/images/gejala1.png" alt="#"/></figure>
                     <div class="nostrud">
                        <h3>DEMAM</h3>
                        <p>Suhu tubuh di atas 38 derajat Celsius
                        </p>
                     </div>
                  </div>
               </div>
               <div class=" col-md-4">
                  <div class="latest text_align_center">
                     <figure><img src="web/images/gejala2.png" alt="#"/></figure>
                     <div class="nostrud">
                        <h3>Batuk kering</h3>
                        <p>Batuk yang disertai gatalnya tenggorokan
                     </div>
                  </div>
               </div>
               <div class=" col-md-4">
                  <div class="latest text_align_center">
                     <figure><img src="web/images/gejala3.png" alt="#"/></figure>
                     <div class="nostrud">
                        <h3>Sesak Napas</h3>
                        <p>dispnea merupakan kondisi di mana seseorang kesulitan untuk bernafas.</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end gejala -->
    </body>
   <!-- protect -->
<div class="protect">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage text_align_center">
                  <br></br>
                     <h2>Bagaimana Pencegahan dari CoronaVirus?</h2>
                     <h3>Lindungi diri Anda dan orang lain di sekitar Anda dengan mengetahui fakta-fakta terkait virus ini dan mengambil langkah pencegahan yang sesuai. Ikuti saran yang diberikan oleh otoritas kesehatan setempat.</h3>
                  </div>
               </div>
            </div>
         </div>
           <div class="protect_bg">
         <div class="container">
             <div class="row">
               <div class="col-md-12">
                  <!--  Demos -->
                  <div class="owl-carousel owl-theme">
                     <div class="item">
                        <div class="protect_box text_align_center">
                          <div class="desktop">
                             <i><img src="web/images/pro1.png" alt="#"/></i>
                           <h3> Menggunakan Masker</h3>
                           <span>Gunakan masker saat beraktivitas di tempat umum atau keramaian, termasuk saat pergi berbelanja bahan makanan .Tutup mulut dan hidung dengan tisu saat batuk atau bersin, kemudian buang tisu ke tempat sampah.Pakai masker dan sarung tangan bila sedang berada di tempat umum atau sedang bersama orang lain.</span>
                          </div>
                        </div>
                     </div>
                     <div class="item">
                          <div class="protect_box text_align_center">
                          <div class="desktop">
                             <i><img src="web/images/pro2.png" alt="#"/></i>
                           <h3> Mencuci Tangan</h3>
                           <span>Rutin mencuci tangan dengan air dan sabun atau hand sanitizer yang mengandung alkohol minimal 60%, terutama setelah beraktivitas di luar rumah atau di tempat umum.
                              Jangan menyentuh mata, mulut, dan hidung sebelum mencuci tangan.</span>
                          </div>
                        </div>
                     </div>
                     <div class="item">
                          <div class="protect_box text_align_center">
                          <div class="desktop">
                             <i><img src="web/images/pro4.png" alt="#"/></i>
                           <h3>Jangan Sentuh Beberapa Bagian Tubuh</h3>
                           <span>Jangan sentuh mata, hidung, atau mulut Anda.Karena kita tidak tau apakah tangan kita bersih atau kotor maka dari itu diusahakan untuk selalu mencuci tangan dan jaga kebersihan tangan</span>
                          </div>          
                        </div>
                     </div>
                     <div class="item">
                          <div class="protect_box text_align_center">
                          <div class="desktop">
                             <i><img src="web/images/pro5.png" alt="#"/></i>
                           <h3>Tutup Mulut/Hidung saat Batuk/Bersin</h3>
                           <span>Hal ini diperlukan guna mencegah penyebaran virus corona dilingkungan sekitar kita jika kita tidak memakai masker, virus corona bisa menempel pada dinding,meja,maupun lantai rumah , karena itu hal-hal kecil harus diperhatikan seperti menutup hidung dan mulut ketika batuk atau bersih dengan menggunakan lengan atau tisu</span>
                          </div>                          
                        </div>
                     </div>
                     <div class="item">
                          <div class="protect_box text_align_center">
                          <div class="desktop">
                             <i><img src="web/images/pro6.png" alt="#"/></i>
                           <h3>Segera cari bantuan medis.</h3>
                           <span>Jika demam, batuk, atau kesulitan bernapas, segera cari bantuan medis.Karena itu perlu dilakukan pengecekan apabila kondisi semakin parah/buruk dengan menelepon atau mencari bantuan medis yang terdekat.</span>
                          </div>
                        </div>
                     </div>
                     <div class="item">
                         <div class="protect_box text_align_center">
                          <div class="desktop">
                             <i><img src="web/images/pro3.png" alt="#"/></i>
                           <h3> Stay at Home</h3>
                           <span>Jangan keluar rumah jika merasa tidak enak badan sebisa mungkin hindari kontak dengan penderita COVID-19, orang yang dicurigai positif terinfeksi virus Corona, atau orang yang sedang sakit demam, batuk, atau pilek.Jaga kebersihan benda yang sering disentuh dan kebersihan lingkungan, termasuk kebersihan rumah.</span>
                          </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
          </div>
      </div>
      <a class="read_more" href="/protect">Read More</a>
         </div>
      </div>
      <!-- end protect -->
      <div class="protect">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage text_align_center">
                  <br></br>
                     <h2>Total kasus virus covid di Indonesia</h2>
                     <h3>Total positif, total sembuh, total meninggal</h3>
                  </div>
               </div>
            </div>
         </div>
           <div class="protect_bg">
         <div class="container">
             <div class="row">
               <div class="col-md-12">
                  <!--  Demos -->
                  <div class="owl-carousel owl-theme">
                     <div class="item">
                        <div class="protect_box text_align_center">
                          <div class="desktop">
                        
                           <h3> Total Positif</h3>
                           <h2>{{$global[0]['positif']}} Jiwa</h2>
                          </div>
                        </div>
                     </div>
                     <div class="item">
                          <div class="protect_box text_align_center">
                          <div class="desktop">
                            
                             <h3> Total Meninggal</h3>
                           <h2>{{$global[0]['meninggal']}} Jiwa</h2>
                          </div>
                        </div>
                     </div>
                     <div class="item">
                          <div class="protect_box text_align_center">
                          <div class="desktop">
                             
                             <h3> Total Sembuh</h3>
                           <h2>{{$global[0]['sembuh']}} Jiwa </h2>
                          </div>          
                        </div>
                     </div>
                     <div class="item">
                          <div class="protect_box text_align_center">
                          <div class="desktop">
                          <h3> Total Dirawat</h3>
                           <h2>{{$global[0]['dirawat']}} Jiwa</h2>
                          </div>                          
                        </div>
                     </div>
                  </div>
               </div>
            </div>
          </div>
      </div>
      <a class="read_more" href="/protect">Read More</a>
         </div>
      </div>
      <!-- end protect -->
   <!-- cases -->
      <div class="cases">
         <div class="container-fluid">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage text_align_center ">
                     <h2>Kasus CoronaVirus</h2>
                     <p>Kasus - Kasus CoronaVirus di Indonesia</p>
                  </div>
               </div>
            </div>
            <div class="row d_flex">
               <div class=" col-md-4">
                  <div class="latest text_align_center">
                     <figure><img src="web/images/cases1.png" alt="#"/></figure>
                      <a class="read_more" href="https://megapolitan.kompas.com/read/2020/03/02/14272791/kronologi-2-wni-positif-corona-berawal-dari-dansa-dengan-wn-jepang?page=all">Read More</a>
                     <div class="nostrud">
                        <h3>Awal Mula Pasien Bertemu WNA Jepang</h3>
                        <p>
                           Menteri Kesehatan Terawan Agus Putranto menjelaskan dari kedua pasien, salah satunya merupakan guru dansa. Pasien berusia 31 tahun ini lantas melakukan kontak fisik dengan WNA Jepang. Untuk informasi, sebelum ke Indonesia, WNA Jepang ini bermukim di Malaysia sejak 14 Februari 2020 lalu.
                           "Jadi si pasien cewek ini yang 31 tahun itu guru dansa. Dia berdansa dengan teman dekatnya itu (WNA Jepang)," ujar Terawan kepada wartawan di RSPI Sulianto Saroso, Jakarta Utara, Senin (2/3).</p>
                     </div>
                  </div>
               </div>
               <div class=" col-md-4">
                  <div class="latest text_align_center">
                     <figure><img src="web/images/cases2.png" alt="#"/></figure>
                      <a class="read_more" href="https://www.bbc.com/indonesia/indonesia-55316219">Read More</a>
                     <div class="nostrud">
                        <h3>Eva Rahmi, Bogor</h3>
                        <p>Saya merasa mama masih ada di rumah. Berat rasanya. Waktu itu saya pikir dalam beberapa hari kondisi mama akan membaik, ternyata malah meninggal tanpa sakit berkepanjangan.
                           Kita biasanya bisa merelakan kepergian seseorang kalau dia sudah sakit berbulan-bulan, sedangkan kemarin awalnya mama saya tidak sakit apa-apa.
                           Ada orang yang menuduh pandemi ini sengaja dibuat, tapi orang-orang itu tidak mengalami sendiri bagaimana dashyat virus ini.
                           Sangat berat untuk beranjak dari rasa kehilangan ini. Tapi saya yakin, yang terjadi dalam kehidupan ini sudah ditentukan.
                           </p>
                     </div>
                  </div>
               </div>
               <div class=" col-md-4">
                  <div class="latest text_align_center">
                     <figure><img src="web/images/cases3.png" alt="#"/></figure>
                      <a class="read_more" href="https://www.bbc.com/indonesia/indonesia-55316219">Read More</a>
                     <div class="nostrud">
                        <h3>Mira Megasari, Bandung</h3>
                        <p>
                           Perjalanan kasus Covid-19 di keluarga kami berawal dari suami saya yang bekerja di salah satu bank. Kami tinggal satu rumah dengan orang tua kami.
                           Pada 6 November 2020, suami saya mengalami gejala, seperti demam dan batuk yang makin hari makin parah. Dia juga sariawan. Tiga hari kemudian, giliran saya yang mengalami gejala seperti badan lemas, demam, dan kehilangan daya penciuman.
                           Setelah beberapa hari, salah satu rekan kerja suami positif terkena Covid-19. Saya dan suami menjalani swab test, tapi hasilnya negatif.
                           Karena masih sakit, kami menjalani rontgen dan rapid test. .</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end cases -->
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
                        <a class="read_more" href="https://health.detik.com/berita-detikhealth/d-5518763/long-covid-bisa-diidap-pasien-gejala-ringan-ini-kata-dokter-paru">Read More</a>
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
                           <a class="read_more" href="https://newsmeter.id/news/6068976aaf8f895b41a54b47">Read More</a>
                     </div>
                  </div>
               </div>
         </div>
    </div>
    <!-- end doctors -->
   <!-- update -->
<div class="update">
   <div class="cevery_white">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="titlepage">
                  <h2>Contact Kami</h2>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="cevery_bg">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <form id="colof" class="form_subscri">
                  <input class="newsl" placeholder="Your Email" type="text" name="Email">
                  <button class="subsci_btn">Subscribe Now</button>
               </form>
            </div>
         </div>
      </div>
   </div>
</div>
   <!-- end contact -->
   @endsection
   