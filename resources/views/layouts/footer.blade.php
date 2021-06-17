      <!--  footer -->
      <footer>
         <div class="footer">
            <div class="container">
               <div class="row">
                        <div class="col-lg-2 col-md-6 col-sm-6">
                           <div class="hedingh3 text_align_left">
                              <h3>Halaman</h3>
                              <ul class="menu_footer">
                                 <li><a class="active" href="/">Home</a></li>
                                 <li><a href="/gejala">Gejala</a></li>
                                 <li><a href="index.html" >Pencegahan</a></li>
                                 <li><a href="news.html">Maps</a></li>
                                <li><a href="about.html">Tentang</a></li>
                                 <li><a href="contact.html">Contact </a></li>
                                 <!-- <li><a href="contact.html">Login</a></li> -->
                              </ul>
                             
           
                           </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                           <div class="hedingh3 text_align_left">
                             <h3>Tentang</h3>
                              <p>Penyakit virus corona (COVID-19) adalah penyakit menular yang disebabkan oleh virus corona yang baru-baru ini ditemukan. Sebagian besar orang yang tertular COVID-19 akan mengalami gejala ringan hingga sedang, dan akan pulih tanpa penanganan khusus.</p>
                           </div>
                        </div>
                     
                
                       
                        <div class="col-lg-3 col-md-6 col-sm-6">
                           <div class="hedingh3  text_align_left">
                              <h3>Contact  Us</h3>
                                <ul class="top_infomation">
                        <li><i class="fa fa-map-marker" aria-hidden="true"></i>
                           Malang , Jawa Timur  
                        </li>
                        <li><i class="fa fa-phone" aria-hidden="true"></i>
                           Satgas Covid : 0341-751550
                        </li>
                        <li><i class="fa fa-envelope" aria-hidden="true"></i>
                           <a href="Javascript:void(0)">Email Satgas: satgas.cvd@gmail.com</a>
                        </li>
                     </ul>
                            
                           
                     </div>
                  </div>
                     <div class="col-lg-4 col-md-6 col-sm-6">
                           <div class="hedingh3 text_align_left">
                              <h3>Negara</h3>
                              <div class="map">
                                <img src="{{url('web/images/peta.png')}}" alt="#"/>
                              </div>
                           </div>
                        </div>
                    
               </div>
            </div>
            <div class="copyright">
               <div class="container">
                  <div class="row">
                     <div class="col-md-8 offset-md-2">
                        <p>© {{date('Y')}} All Rights Reserved. Design by <a href="https://html.design/"> Kelompok 3</a></p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <!-- end footer -->
      <!-- Javascript files-->
      <script src="{{url('web/js/jquery.min.js')}}"></script>
      <script src="{{url('web/js/bootstrap.bundle.min.js')}}"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
      <script src="{{url('web/js/owl.carousel.min.js')}}"></script>
      <script src="{{url('web/js/custom.js')}}"></script>
      <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCIjzjhjK3RlYznDtE-wQRRvOnUUwEOgUU"></script>

      <script>
            //var locations=[];
            
            $(document).ready(function() {
            var url = '{{url('covid_maps_api')}}';
            // alert(url);
               $.getJSON(url, function(locations){
               // console.log(result);
               var dataPoints = [];
               var c = "";
               
               //var ada = result[i];
               //locations.push(result);
               
           
   var example =[ ['Location 1 Name', 'New York, NY', 'Location 1 URL'],
    ['Location 2 Name', 'Newark, NJ', 'Location 2 URL'],
    ['Location 3 Name', 'Philadelphia, PA', 'Location 3 URL']];
               console.log(locations);
            var geocoder;
            var map;
            var bounds = new google.maps.LatLngBounds();

            function initialize() {
               map = new google.maps.Map(
               document.getElementById("map_canvas"), {
                  center: new google.maps.LatLng(37.4419, -122.1419),
                  zoom: 13,
                  mapTypeId: google.maps.MapTypeId.ROADMAP
               });
               geocoder = new google.maps.Geocoder();

               for (i = 0; i < locations.length; i++) {


                  geocodeAddress(locations, i);
               }
            }
            google.maps.event.addDomListener(window, "load", initialize);

            function geocodeAddress(locations, i) {
               var title = locations[i][0];
               var address = locations[i][1];
               var url = locations[i][2];
               geocoder.geocode({
                  'address': locations[i][1]
               },

               function (results, status) {
                  if (status == google.maps.GeocoderStatus.OK) {
                        var marker = new google.maps.Marker({
                           icon: 'http://maps.google.com/mapfiles/ms/icons/blue.png',
                           map: map,
                           position: results[0].geometry.location,
                           title: title,
                           animation: google.maps.Animation.DROP,
                           address: address,
                           url: url
                        })
                        infoWindow(marker, map, title, address, url);
                        bounds.extend(marker.getPosition());
                        map.fitBounds(bounds);
                  } else {
                        alert("geocode of " + address + " failed:" + status);
                  }
               });
            }

            function infoWindow(marker, map, title, address, url) {
               google.maps.event.addListener(marker, 'click', function () {
                  var html = "<div><h3>" + title + "</h3><p>" + address + "<br></div><a href='" + url + "'>View location</a></p></div>";
                  iw = new google.maps.InfoWindow({
                        content: html,
                        maxWidth: 350
                  });
                  iw.open(map, marker);
               });
            }

            function createMarker(results) {
               var marker = new google.maps.Marker({
                  icon: 'http://maps.google.com/mapfiles/ms/icons/blue.png',
                  map: map,
                  position: results[0].geometry.location,
                  title: title,
                  animation: google.maps.Animation.DROP,
                  address: address,
                  url: url
               })
               bounds.extend(marker.getPosition());
               map.fitBounds(bounds);
               infoWindow(marker, map, title, address, url);
               return marker;
            }
         });
         });
      </script>
   </body>
</html>