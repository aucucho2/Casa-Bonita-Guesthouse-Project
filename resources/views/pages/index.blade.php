@extends('layouts.base')

@section('content')

   @include('layouts.page-hero')
   
   <!-- availability -->

   <section class="availability">

      <form action="">

         <div class="box">
            <p>check in <span>*</span></p>
            <input type="date" class="input">
         </div>

         <div class="box">
            <p>check out <span>*</span></p>
            <input type="date" class="input">
         </div>

         <div class="box">
            <p>adults <span>*</span></p>
            <select name="adults" id="" class="input">
               <option value="1">1 adults</option>
               <option value="2">2 adults</option>
               <option value="3">3 adults</option>
               <option value="4">4 adults</option>
               <option value="5">5 adults</option>
               <option value="6">6 adults</option>
            </select>
         </div>

         <div class="box">
            <p>children <span>*</span></p>
            <select name="child" id="" class="input">
               <option value="1">1 child</option>
               <option value="2">2 child</option>
               <option value="3">3 child</option>
               <option value="4">4 child</option>
               <option value="5">5 child</option>
               <option value="6">6 child</option>
            </select>
         </div>

         <div class="box">
            <p>rooms <span>*</span></p>
            <select name="rooms" id="" class="input">
               <option value="1">1 rooms</option>
               <option value="2">2 rooms</option>
               <option value="3">3 rooms</option>
               <option value="4">4 rooms</option>
               <option value="5">5 rooms</option>
               <option value="6">6 rooms</option>
            </select>
         </div>

         <input type="submit" value="check availability" class="btn">

      </form>

   </section>

   <!-- end -->



   <!-- services -->

   <section class="services">

      <div class="box-container">

         <div class="box">
            <img src="images/service2.png" alt="">
            <h3>food & drink</h3>
         </div>

         <div class="box">
            <img src="images/service3.png" alt="">
            <h3>restaurant</h3>
         </div>

      </div>

   </section>

   <!-- end -->

   <!-- gallery -->

   <section class="gallery" id="gallery">

      <h1 class="heading">our gallery</h1>

      <div class="swiper gallery-slider">

         <div class="swiper-wrapper">

            <div class="swiper-slide slide">
               <img src="images/gallery1.png" alt="">
               <div class="icon">
                  <i class="bi bi-zoom-in"></i>
               </div>
            </div>

            <div class="swiper-slide slide">
               <img src="images/gallery2.png" alt="">
               <div class="icon">
                  <i class="fas fa-magnifying-glass-plus"></i>
               </div>
            </div>

            <div class="swiper-slide slide">
               <img src="images/gallery3.png" alt="">
               <div class="icon">
                  <i class="fas fa-magnifying-glass-plus"></i>
               </div>
            </div>

            <div class="swiper-slide slide">
               <img src="images/gallery4.png" alt="">
               <div class="icon">
                  <i class="fas fa-magnifying-glass-plus"></i>
               </div>
            </div>

            <div class="swiper-slide slide">
               <img src="images/gallery5.png" alt="">
               <div class="icon">
                  <i class="fas fa-magnifying-glass-plus"></i>
               </div>
            </div>

            <div class="swiper-slide slide">
               <img src="images/gallery6.jpg" alt="">
               <div class="icon">
                  <i class="fas fa-magnifying-glass-plus"></i>
               </div>
            </div>

         </div>

      </div>

   </section>

   <!-- end -->

   <!-- review -->

   <section class="review" id="review">

      <div class="swiper review-slider">
         <div class="swiper-wrapper">

            <div class="swiper-slide slide">
               <h2 class="heading">client's review</h2>
               <i class="fas fa-quote-right"></i>
               <p>It was amazing expirience to be at Casa Bonita Guest House</p>
               <div class="user">
                  <img src="images/pic-1.png" alt="">
                  <div class="user-info">
                     <h3>Andre Jonson</h3>
                     <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                     </div>
                  </div>
               </div>
            </div>

            <div class="swiper-slide slide">
               <h2 class="heading">client's review</h2>
               <i class="fas fa-quote-right"></i>
               <p>Very Nice Place and it's affordable.</p>
               <div class="user">
                  <img src="images/pic-2.png" alt="">
                  <div class="user-info">
                     <h3>Andrea Lazlow</h3>
                     <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                     </div>
                  </div>
               </div>
            </div>

            <div class="swiper-slide slide">
               <h2 class="heading">client's review</h2>
               <i class="fas fa-quote-right"></i>
               <p>I recomend, very nice place and there are very nice employee!</p>
               <div class="user">
                  <img src="images/pic-3.png" alt="">
                  <div class="user-info">
                     <h3>Arlindo Ucucho</h3>
                     <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                     </div>
                  </div>
               </div>
            </div>

            <div class="swiper-slide slide">
               <h2 class="heading">client's review</h2>
               <i class="fas fa-quote-right"></i>
               <p>Very quite place.</p>
               <div class="user">
                  <img src="images/pic-4.png" alt="">
                  <div class="user-info">
                     <h3>Bia</h3>
                     <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                     </div>
                  </div>
               </div>
            </div>

            <div class="swiper-slide slide">
               <h2 class="heading">client's review</h2>
               <i class="fas fa-quote-right"></i>
               <p>Peace in your Heart when you are there!</p>
               <div class="user">
                  <img src="images/pic-5.png" alt="">
                  <div class="user-info">
                     <h3>Coatzee</h3>
                     <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                     </div>
                  </div>
               </div>
            </div>

            <div class="swiper-slide slide">
               <h2 class="heading">client's review</h2>
               <i class="fas fa-quote-right"></i>
               <p>Nice Food and drinks!</p>
               <div class="user">
                  <img src="images/pic-6.png" alt="">
                  <div class="user-info">
                     <h3>Isabel Glade</h3>
                     <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                     </div>
                  </div>
               </div>
            </div>

         </div>
         <div class="swiper-pagination"></div>
      </div>

   </section>

   <!-- end -->

   <!-- faq -->

   <section class="faqs" id="faq">

      <h1 class="heading">frequently asked questions</h1>

      <div class="row">

         <div class="image">
            <img src="images/FAQs.gif" alt="">
         </div>

         <div class="content">

            <div class="box active">
               <h3>what are payment methods?</h3>
               <p>We accept credit/debit card, M-pesa, E-mola, Ponto24, IZI and Cash</p>
            </div>

            <div class="box active">
               <h3>Is there Wi-Fi Available?</h3>
               <p>Yes we have, there is no need to pay is for free for Guest.</p>
            </div>

         </div>

      </div>

   </section>

   <!-- end -->

@endsection

   