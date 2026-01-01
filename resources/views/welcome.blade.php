<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HFYF ! Welcome</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Favicon -->
    <link rel="icon" href="{{ asset('images/logo.png') }}" sizes="any">
    <link rel="apple-touch-icon" href="{{ asset('images/logo.png') }}">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark sticky-top shadow-sm">
<!-- Navigation Bar -->

    <div class="container">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <img src="{{asset('images/logo.png')}}" alt="" width="100" height="100" class="d-inline-block align-text-top me-2">   
        <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="#vision"><i class="bi bi-bullseye"></i> Vision & Mission</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="unitsDropdown" role="button" data-bs-toggle="dropdown"><i class="bi bi-people-fill"></i> Target Groups</a>
                    <ul class="dropdown-menu" aria-labelledby="unitsDropdown">
                        @foreach(\App\Models\TargetGroup::all() as $targetGroup)
                        <li>
                            <a class="dropdown-item" href="#target">
                                <i class="bi {{$targetGroup->icon}} me-2"></i>
                                {{ $targetGroup->name }}
                            </a>
                        </li>
                        @endforeach
                        
                    </ul>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="unitsDropdown" role="button" data-bs-toggle="dropdown"><i class="bi bi-mortarboard-fill"></i> Units</a>
                    <ul class="dropdown-menu" aria-labelledby="unitsDropdown">
                        @foreach(\App\Models\Unit::all() as $unit)
                        <li>
                            <a class="dropdown-item" href="#units">
                                <i class="bi {{$unit->icon}} me-2"></i>
                                {{ $unit->name }}
                            </a>
                        </li>
                        @endforeach
                    </ul>
                </li>

               <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="servicesDropdown" role="button" data-bs-toggle="dropdown"><i class="bi bi-people-fill"></i> Services</a>
                    <ul class="dropdown-menu" aria-labelledby="servicesDropdown">
                        @foreach(\App\Models\Service::all() as $service)
                        <li>
                            <a class="dropdown-item" href="#services">
                                <i class="bi {{$service->icon}} me-2"></i>
                                {{ $service->name }}
                            </a>
                        </li>
                        @endforeach
                        
                    </ul>
                        
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="establishmentsDropdown" role="button" data-bs-toggle="dropdown"><i class="bi bi-buildings"></i> Establishments</a>
                    <ul class="dropdown-menu" aria-labelledby="establishmentsDropdown">
                        @foreach(\App\Models\Establishment::all() as $establishment)
                        <li>
                            <a class="dropdown-item" href="#units">
                                <i class="bi {{$establishment->icon}} me-2"></i>
                                {{ $establishment->name }}
                            </a>
                        </li>
                        @endforeach
                    </ul>
                </li>
                
                <li class="nav-item"><a class="nav-link" href="#partnership"><i class="bi bi bi-person-lines-fill"></i> Partnership</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('login')}}"><i class="bi bi bi-box-arrow-in-right"></i> Login</a></li>
            </ul>
        </div>
    </div>
</nav>

<header class="site-header">
    <div class="overlay"></div>
    <div class="container text-center text-white py-5" style="position:relative;z-index:2;">
        @php
            $hasJobs = \App\Models\JobOpening::whereNotNull('published_at')->exists();
        @endphp

        <h1>Hajiya Fatima Yahaya Foundation</h1>
        <p class="lead">A non-profit organization established in the spirit of humanity, generosity, and goodness, structured with defined objectives to provide social services through personal efforts, partnerships, and collaborations.</p>

        @if($hasJobs)
            <div class="job-cta d-flex justify-content-center align-items-center gap-3 mb-3">
                <div class="text-start">
                    <h5 class="mb-0">We're hiring!</h5>
                    <small>Explore current open positions and apply today.</small>
                </div>
                <a href="{{ route('job.index') }}" class="btn btn-warning btn-lg"><i class="bi bi-box-arrow-in-right"></i> View Open Positions</a>
            </div>
        @endif

    </div>
</header>

<!-- Header -->

<!-- Vision & Mission -->
<section id="vision" class="container my-5">
    <div class="row g-4">
        <div class="col-md-6">
            <div class="card-body shadow-sm p-4">
                <h2 class="section-title"><i class="bi bi-eye-fill"></i> Vision</h2>
                <p>To achieve a happy, healthy, disciplined and self-reliant society where the weak and less privileged are supported to access basic education, health care, and livelihood, leading to greater intellectual, social, and economic opportunities.</p>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card-body shadow-sm p-4">
                <h2 class="section-title"><i class="bi bi-bullseye"></i> Mission</h2>
                <p>To raise and invest funds, manage educational and health institutions, support programs and services to humanity, and collaborate with private and public organizations to empower women, youths, and less privileged groups.</p>
            </div>
        </div>
    </div>
</section>


<!-- Units -->
<section id="units" class="container my-5" >
    <h2 class="section-title text text-center" style="color: black !important;"> Our Units</h2>
    <div class="row row-cols-1 row-cols-md-3 g-4">
        @foreach(\App\Models\Unit::all() as $unit)
        <div class="col">
            <div class="card p-3 h-100 shadow-sm">
                <i class="bi {{$unit->icon}} icon-box"></i>
                <h5 class="card-title mt-2">{{$unit->name}}</h5>  
                <p>{{$unit->description}}</p>  
            </div>
        </div>
       @endforeach
    </div>
</section>

<section id="establishments" class="container my-5">
    <h2 class="section-title text text-center" style="color: black !important;"> Our Establishments</h2>
    <div class="row row-cols-1 row-cols-md-3 g-4">
        @foreach(\App\Models\Establishment::all() as $establishment)
        <div class="col">
            <div class="card h-100 shadow-sm">
                @if($establishment->image)
                    <img src="{{ asset($establishment->image) }}" alt="{{ $establishment->name }}" class="img-fluid mb-2" style="height: 150px; object-fit: cover;">
                @endif
                <h5 class="p-3 card-title mt-2">{{$establishment->name}}</h5>  
                <p class="p-3">{{$establishment->description}}</p>  
            </div>
        </div>
       @endforeach
    </div>
</section>

<!-- Services -->
<section id="services">
    <div class="container p-4">
        <h2 class="section-title text text-center">What we offer</h2>
        <div class="row g-4">
            @foreach(\App\Models\Service::all() as $service)
            <div class="col-md-4">
                <div class="card p-3 h-100 shadow-sm">
                    <i class="bi {{$service->icon}} icon-box"></i>
                    <h5 class="card-title mt-2">{{$service->name}}</h5>
                    <p class="card-text">{{$service->description}}</p>  
                </div>
            </div>
            @endforeach
    </div>
</section>
<!-- Target Groups -->
<section id="target">
    <div class="container p-4">
    <h2 class="section-title text text-center" style="color: #FF9800;"> Target Groups</h2>
    <div class="row row-cols-1 row-cols-md-3 g-4">
        @foreach(\App\Models\TargetGroup::all() as $targetGroup)
        <div class="col">
            <div class="card p-3 h-100 shadow-sm">
                <i class="bi {{$targetGroup->icon}} icon-box"></i>
                <h5 class="card-title mt-2">{{$targetGroup->name}}</h5>
            </div>
        </div>
       @endforeach
    </div>
    </div>
</section>
<!-- Establishments -->




<!-- Call to Partnership -->
<!-- Governing Bodies -->
<section id="governing" class="container my-5">
    <h2 class="section-title text-center"><i class="bi bi-people-fill"></i> Governing Bodies</h2>
    <p class="lead text-center">Our leadership team guiding the foundation's mission.</p>

    <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col">
            <div class="card h-100 text-center p-3 shadow-sm">
                <img src="{{ asset('images/team/chair.jpg') }}" alt="Hajiya Fatima Yahaya" class="rounded-circle mx-auto d-block" style="width:120px;height:120px;object-fit:cover;">
                <div class="card-body">
                    <h5 class="card-title">Hajiya Fatima Yahaya</h5>
                    <p class="text-muted">Founder & Chair</p>
                    <p class="card-text small">Founder of the foundation with decades of community service experience focusing on education, health and humanitarian aid.</p>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card h-100 text-center p-3 shadow-sm">
                <img src="{{ asset('images/team/vice-chair.jpg') }}" alt="Dr. Amina"
                     class="rounded-circle mx-auto d-block" style="width:120px;height:120px;object-fit:cover;">
                <div class="card-body">
                    <h5 class="card-title">Dr. Amina Sule</h5>
                    <p class="text-muted">Vice Chair</p>
                    <p class="card-text small">Medical doctor and public health advocate leading our health outreach and clinical partnerships.</p>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card h-100 text-center p-3 shadow-sm">
                <img src="{{ asset('images/team/secretary.jpg') }}" alt="Malam Yahaya"
                     class="rounded-circle mx-auto d-block" style="width:120px;height:120px;object-fit:cover;">
                <div class="card-body">
                    <h5 class="card-title">Malam Yahaya</h5>
                    <p class="text-muted">Secretary</p>
                    <p class="card-text small">Administrator and education specialist responsible for program coordination and stakeholder engagement.</p>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card h-100 text-center p-3 shadow-sm">
                <img src="{{ asset('images/team/treasurer.jpg') }}" alt="Alhaji Musa"
                     class="rounded-circle mx-auto d-block" style="width:120px;height:120px;object-fit:cover;">
                <div class="card-body">
                    <h5 class="card-title">Alhaji Musa</h5>
                    <p class="text-muted">Treasurer</p>
                    <p class="card-text small">Finance professional overseeing funds management, reporting and accountability.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="partnership" class="container my-5 text-center">
    <h2 class="section-title"><i class="bi bi-handshake-fill"></i> Call for Partnership</h2>
    <p>Join us in empowering humanity through education, health, and social services. You can contribute through sponsorship, scholarships, donations, or supporting our programs for women and youth empowerment.</p>
    <a href="mailto:partnership@hfysifawa.org" class="btn btn-primary btn-lg">Partner With Us</a>
</section>

<!-- Footer -->
<footer class="text-center">
    <p>&copy; 2025 Hajiya Fatima Yahaya Foundation, Sifawa. All Rights Reserved.</p>
    <p>Powered by: <a href="https://www.mydtc.tech" target="_blank">Malam Yahaya Digital Technology Center, Sifawa</a></p>
    <div>
        <i class="bi bi-facebook mx-2"></i>
        <i class="bi bi-twitter mx-2"></i>
        <i class="bi bi-instagram mx-2"></i>
        <i class="bi bi-envelope-fill mx-2"></i>
    </div>
</footer>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
