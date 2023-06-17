@extends('layouts.base')

@section('content')

   <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('images/room-5.jpg');">
        <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

            <h2>Booknow</h2>
            <ol>
                <li><a href="/home">Home</a></li>
                <li>Booknow</li>
            </ol>

        </div>
    </div><!-- End Breadcrumbs -->

<!-- reservation -->

   <section class="reservation" id="reservation">

      <h1 class="heading">book now</h1>

      <form action="">

         <div class="container">

            <div class="box">
               <p>name <span>*</span></p>
               <input type="text" class="input" placeholder="Your Name">
            </div>

            <div class="box">
               <p>email <span>*</span></p>
               <input type="text" class="input" placeholder="Your Email">
            </div>

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
               <select name="adults" class="input">
                  <option value="1">1 adults</option>
                  <option value="2">2 adults</option>
                  <option value="3">3 adults</option>
                  <option value="4">4 adults</option>
                  <option value="5">5 adults</option>
                  <option value="6">6 adults</option>
                  <option value="6">7 adults</option>
               </select>
            </div>

            <div class="box">
               <p>children <span>*</span></p>
               <select name="child" class="input">
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
               <select name="rooms" class="input">
                  <option value="1">1 rooms</option>
                  <option value="2">2 rooms</option>
                  <option value="3">3 rooms</option>
                  <option value="4">4 rooms</option>
                  <option value="5">5 rooms</option>
                  <option value="6">6 rooms</option>
               </select>
            </div>

            <div class="box">
               <p>room type <span>*</span></p>
               <select name="type" class="input">
                  <option value="1">exclusive rooms</option>
                  <option value="2">family rooms</option>
                  <option value="3">daily rooms</option>
                  <option value="4">panoramic rooms</option>
               </select>
            </div>
   
         </div>

         <input type="submit" value="check availability" class="btn">

      </form>

   </section>

