<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Rayhan Rahmat Aziz - Freelance Developer</title>
    <meta content="Website designer and mobile app developer" name="description">
    <meta
        content="agency, freelancer, developer, web developer, mobile developer, programmer, frontend, backend, react, laravel, php"
        name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    @include('frontend/templates/styles')
</head>

<body>

    @include('frontend/templates/navbar', ['content' => $content])

    @yield('content')

    <!-- ======= Footer ======= -->
    <div id="footer" class="text-center">
        <div class="container">
            <div class="socials-media text-center">
                <ul class="list-unstyled">
                    <li><a href="https://www.facebook.com/rayhan.r.aziz/"><i class="bi bi-facebook"></i></a></li>
                    <li><a href="https://twitter.com/rayhangamawanto"><i class="bi bi-twitter"></i></a></li>
                    <li><a href="https://www.instagram.com/ray_azizg/"><i class="bi bi-instagram"></i></a></li>
                    <li><a href="https://www.linkedin.com/in/rayhan-rahmat-aziz-gamawanto-720960206/"><i
                                class="bi bi-linkedin"></i></a></li>
                </ul>
            </div>
            <p>&copy; Copyrights Rayhan. All rights reserved.</p>
            <div class="credits">
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
        </div>
    </div><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    @include('frontend/templates/scripts')

</body>

</html>
