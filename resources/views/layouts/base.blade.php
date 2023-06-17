<!DOCTYPE html>
<html lang="en">
<head>

   @include('layouts.page-seo')

   @include('layouts.page-css')

</head>

<body>

   @include('layouts.page-header')

<main id="main">

   @yield('content')

</main>

   <!-- end -->

@include('layouts.page-footer')



   <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

   <script src="assets/script.js"></script>

</body>
</html>