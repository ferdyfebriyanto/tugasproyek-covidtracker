@extends('layouts.header')
@section('stylebody')

<body class="main-layout inner_page">
   @endsection
   @section('content')
   <div class="contact">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="titlepage text_align_left">
                  <h2>Hubungi Kami</h2>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-md-6">

               @if(Session::has('success'))
               <div class="alert alert-success">
                  {{ Session::get('success') }}
                  @php
                  Session::forget('success');
                  @endphp
               </div>
               @endif

               <form method="POST" action="{{ route('contact-form.store') }}" id="request" class="main_form">
                  <!-- {{ csrf_field() }} -->

                  @csrf 
                  <!-- @method ('PUT') -->
                  <div class="row">
                     <div class="col-md-12 ">
                        <input class="contactus" placeholder="Nama Lengkap" type="text" name="name" value="{{ old('name') }}">
                        @if ($errors->has('name'))
                        <span class="text-danger">{{ $errors->first('name') }}</span>
                        @endif
                     </div>

                     <div class="col-md-12">
                        <input class="contactus" placeholder="No Telfon" type="number" name="phone" value="{{ old('phone') }}">
                        @if ($errors->has('phone'))
                        <span class="text-danger">{{ $errors->first('phone') }}</span>
                        @endif
                     </div>

                     <div class="col-md-12">
                        <input class="contactus" placeholder="Email" type="email" name="email" value="{{ old('email') }}">
                        @if ($errors->has('email'))
                        <span class="text-danger">{{ $errors->first('email') }}</span>
                        @endif
                     </div>

                     <div class="col-md-12">
                        <input class="contactus" placeholder="Subject" type="text" name="subject" value="{{ old('subject') }}">
                        @if ($errors->has('subject'))
                        <span class="text-danger">{{ $errors->first('subject') }}</span>
                        @endif
                     </div>

                     <div class="col-md-12">
                        <textarea class="textarea" placeholder="Pesan" type="type" name="message">{{ old('message') }}</textarea>
                        @if ($errors->has('message'))
                        <span class="text-danger">{{ $errors->first('message') }}</span>
                        @endif
                     </div>

                     <div class="col-md-12">
                        <button class="send_btn">Kirim</button>
                     </div>
                  </div>
               </form>
            </div>
            <div class="col-md-6">
               <div class="map-responsive">
                  <iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&amp;q=Malang+Jawa+Timur+Indonesia" width="600" height="540" frameborder="0" style="border:0; width: 100%;" allowfullscreen=""></iframe>
               </div>
            </div>
         </div>
      </div>
   </div>
   @endsection