@extends('layouts.header')
@section('stylebody')
<body class="main-layout inner_page">
@endsection
@section('content')
     <div class="contact">
         <div class="container">
         <div id="map_canvas" style="width:100%; height:450px; border: 2px solid #3872ac;"></div>
            <div class="row">
                <div class="col-md-12">
                     <div class="titlepage text_align_left">
                        <h2>Titik Sebaran Virus Covid 19</h2>
                     </div>
                  </div>
            </div>
            <div class="row">
               <div class="col-md-12">
               <table  id="users" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                            <th>No</th>
                            <th >Name Of Province</th>
                            <th>Kasus Positif</th>
                            <th>Kasus Sembuh</th>
                            <th>Kasus Meninggal</th>
                        </tr>
                    </thead>
                    <tbody>
                    @for($i=0; $i < count($data); $i++)
                        <tr>
                            <td>{{$i+1}}</td>
                            <td>{{$data[$i]['attributes']['Provinsi']}}</td>
                            <td>{{$data[$i]['attributes']['Kasus_Posi']}}</td>
                            <td>{{$data[$i]['attributes']['Kasus_Semb']}}</td>
                            <td>{{$data[$i]['attributes']['Kasus_Meni']}}</td>
                        </tr>
                    @endfor
                    </tbody>
                </table>
            </div>
         </div>
@endsection