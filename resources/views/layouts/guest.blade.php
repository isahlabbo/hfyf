<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HFYF! @yield('title')</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Custom CSS -->
    <!-- Favicon -->
    <link rel="icon" href="{{ asset('images/logo.png') }}" sizes="any">
    <link rel="apple-touch-icon" href="{{ asset('images/logo.png') }}">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
</head>
<body style="background-color: white;">


<!-- Header -->

<!-- Vision & Mission -->
<section>
    <div class="container">
        <div class="row">
        
            <div class="col-md-4 offset-md-4">
                <div class="card-body shadow-sm p-4 m-4">
                    <div class="text-center"><img src="{{asset('images/logo.png')}}" alt="" width="100"></div>
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
