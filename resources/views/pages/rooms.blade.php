@extends('layouts.base')

@section('content')

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('images/room-5.jpg');">
        <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

            <h2>Rooms</h2>
            <ol>
                <li><a href="/home">Home</a></li>
                <li>Rooms</li>
            </ol>

        </div>
    </div><!-- End Breadcrumbs -->

 <!-- room -->

   <section class="room" id="room">

      <h1 class="heading">our room</h1>

       <div class="swiper room-slider">

         <div class="swiper-wrapper">

            <div class="swiper-slide slide">
               <div class="image">
                  <span class="price">MZN2500/night</span>
                  <img src="images/home-slide3.jpg" alt="">
                  <a href="/booknow" class="fas fa-shopping-cart"></a>
               </div>
               <div class="content">
                  <h3>1 Bed Room</h3>
                  <p>A room with queen bed, suiteble for couple, Aircon, Wi-Fi, water and TV and more.</p>
                  <div class="stars">
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star-half-alt"></i>
                  </div>
                  <a href="/booknow" class="btn">book now</a>
               </div>
            </div>

            <div class="swiper-slide slide">
               <div class="image">
                  <span class="price">MZN1500/night</span>
                  <img src="images/home-slide1.jpg" alt="">
                  <a href="/booknow" class="fas fa-shopping-cart"></a>
               </div>
               <div class="content">
                  <h3>twin-bedded room</h3>
                  <p>A room with twin-bedded, in room toilet, water, Aircon and Wi-Fi.</p>
                  <div class="stars">
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star-half-alt"></i>
                  </div>
                  <a href="/booknow" class="btn">book now</a>
               </div>
            </div>

            <div class="swiper-slide slide">
               <div class="image">
                  <span class="price">MZN2500/night</span>
                  <img src="images/home-slide2.jpg" alt="">
                  <a href="booknow" class="fas fa-shopping-cart"></a>
               </div>
               <div class="content">
                  <h3>Exclusive Room</h3>
                  <p>A room with King bed, suiteble for couple, Aircon, Wi-Fi, water and TV and more.</p>
                  <div class="stars">
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star-half-alt"></i>
                  </div>
                  <a href="/booknow" class="btn">book now</a>
               </div>
            </div>

         </div>

         <div class="swiper-pagination"></div>
         
       </div>

   </section>

   <!-- end -->

@endsection