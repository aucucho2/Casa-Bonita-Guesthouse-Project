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
@include('parts.availability-form')