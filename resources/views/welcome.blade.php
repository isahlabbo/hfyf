<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hajiya Fatima Yahaya Foundation</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
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
                        <li>
                            <a class="dropdown-item" href="#units">
                                <i class="bi bi-heart-pulse-fill me-2"></i>
                                Orphans and widows, aged and incapacitated
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#units">
                                <i class="bi bi-person-wheelchair me-2"></i>
                                Sick and less privileged
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#units">
                                <i class="bi bi-house-heart-fill me-2"></i>
                                Oppressed and victims of disaster
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#units">
                                <i class="bi bi-mortarboard-fill me-2"></i>
                                Students and youths
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#units">
                                <i class="bi bi-people-fill me-2"></i>
                                Women and vulnerable groups
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#units">
                                <i class="bi bi-geo-alt-fill me-2"></i>
                                Internally displaced people
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#units">
                                <i class="bi bi-megaphone-fill me-2"></i>
                                General public enlightenment and Da’awah workers
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="unitsDropdown" role="button" data-bs-toggle="dropdown"><i class="bi bi-mortarboard-fill"></i> Units</a>
                    <ul class="dropdown-menu" aria-labelledby="unitsDropdown">
                        <li>
                            <a class="dropdown-item" href="#units">
                                <i class="bi bi-mortarboard-fill me-2"></i>
                                Education
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#units">
                                <i class="bi bi-hospital-fill me-2"></i>
                                Health
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#units">
                                <i class="bi bi-cpu-fill me-2"></i>
                                Technology
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#units">
                                <i class="bi bi-people-fill me-2"></i>
                                Social
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#units">
                                <i class="bi bi-moon-stars-fill me-2"></i>
                                Religious
                            </a>
                        </li>
                    </ul>
                </li>
               <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="servicesDropdown" role="button" data-bs-toggle="dropdown"><i class="bi bi-people-fill"></i> Services</a>
                    <ul class="dropdown-menu" aria-labelledby="servicesDropdown">
                        <li class="mb-2">
                            <a class="dropdown-item" href="#units">
                                <i class="bi bi-building-fill me-2"></i>
                                Education and health institutions
                            </a>
                        </li>
                        <li class="mb-2">
                            <a class="dropdown-item" href="#units">
                                <i class="bi bi-megaphone-fill me-2"></i>
                                Continued education and public enlightenment
                            </a>
                        </li>
                        <li class="mb-2">
                            <a class="dropdown-item" href="#units">
                                <i class="bi bi-award-fill me-2"></i>
                                Scholarship and student support
                            </a>
                        </li>
                        <li class="mb-2">
                            <a class="dropdown-item" href="#units">
                                <i class="bi bi-moon-stars-fill me-2"></i>
                                Promotion of religious practice
                            </a>
                        </li>
                        <li class="mb-2">
                            <a class="dropdown-item" href="#units">
                                <i class="bi bi-journal-text me-2"></i>
                                Research and publication
                            </a>
                        </li>
                        <li class="mb-2">
                            <a class="dropdown-item" href="#units">
                                <i class="bi bi-basket-fill me-2"></i>
                                Foodstuff and cash assistance
                            </a>
                        </li>
                        <li class="mb-2">
                            <a class="dropdown-item" href="#units">
                                <i class="bi bi-hospital-fill me-2 "></i>
                                Medical assistance
                            </a>
                        </li>
                        <li class="mb-2">
                            <a class="dropdown-item" href="#units">
                                <i class="bi bi-house-heart-fill me-2 "></i>
                                Shelter and school material assistance
                            </a>
                        </li>
                        <li class="mb-2">
                            <a class="dropdown-item" href="#units">
                                <i class="bi bi-droplet-half me-2 "></i>
                                Water supply and sanitary facilities
                            </a>
                        </li>
                        <li class="mb-2">
                            <a class="dropdown-item" href="#units">
                                <i class="bi bi-fire me-2 "></i>
                                Free firefighting service
                            </a>
                        </li>
                    </ul>
                        
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="establishmentsDropdown" role="button" data-bs-toggle="dropdown"><i class="bi bi-buildings"></i> Establishments</a>
                    <ul class="dropdown-menu" aria-labelledby="establishmentsDropdown">
                        <li>
                            <a class="dropdown-item" href="#units">
                                <i class="bi bi-mortarboard-fill me-2"></i>
                                Fatima College of Nursing Sciences
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#units">
                                <i class="bi bi-hospital-fill me-2 "></i>
                                Fatima Yahaya Hospital
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#units">
                                <i class="bi bi-tree-fill me-2 "></i>
                                Fatima Farm
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#units">
                                <i class="bi bi-building-fill me-2 "></i>
                                Fatima International School
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#units">
                                <i class="bi bi-book-fill me-2 "></i>
                                Malam Yahaya Islamic Library
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#units">
                                <i class="bi bi-laptop-fill me-2"></i>
                                Malam Yahaya Digital Technology Center
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#units">
                                <i class="bi bi-fire me-2"></i>
                                Malam Yahaya Fire Service
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#units">
                                <i class="bi bi-house-fill me-2"></i>
                                Zauren Malam Yahaya
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#units">
                                <i class="bi bi-moon-stars-fill me-2"></i>
                                Malam Yahaya Jumu’at Mosque
                            </a>
                        </li>
                    </ul>
                </li>
                
                <li class="nav-item"><a class="nav-link" href="#partnership"><i class="bi bi bi-person-lines-fill"></i> Partnership</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('login')}}"><i class="bi bi bi-box-arrow-in-right"></i> Login</a></li>
            </ul>
        </div>
    </div>
</nav>

<header>
    <h1>Hajiya Fatima Yahaya Foundation</h1>
    <p style="color:black;">A non-profit organization established in the spirit of humanity, generosity, and goodness, structured with defined objectives to provide social services through personal efforts, partnerships, and collaborations.</p>
    <a href="#partnership" class="btn btn-primary btn-lg mt-3"><i class="bi bi bi-box-arrow-in-left"></i> Partner With Us</a>
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

<!-- Target Groups -->
<section id="target">
    <div class="container p-4">
    <h2 class="section-title text text-center" style="color: #FF9800;"> Target Groups</h2>
    <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col">
            <div class="card p-3 h-100 shadow-sm">
                <i class="bi bi-mortarboard-fill icon-box"></i>
                <h5 class="card-title mt-2">Orphans and widows, aged and incapacitated</h5>
            </div>
        </div>
        <div class="col">
            <div class="card p-3 h-100 shadow-sm">
                <i class="bi bi-heart-fill icon-box"></i>
                <h5 class="card-title mt-2">Sick and less privileged</h5>
            </div>
        </div>
        <div class="col">
            <div class="card p-3 h-100 shadow-sm">
                <i class="bi bi-currency-exchange icon-box"></i>
                <h5 class="card-title mt-2">Oppressed and victims of disaster</h5>
            </div>
        </div>
        <div class="col">
            <div class="card p-3 h-100 shadow-sm">
                <i class="bi bi-coin icon-box"></i>
                <h5 class="card-title mt-2">Students and youths</h5>
            </div>
        </div>
        <div class="col">
            <div class="card p-3 h-100 shadow-sm">
                <i class="bi bi-coin icon-box"></i>
                <h5 class="card-title mt-2">Women and vulnerable groups</h5>
            </div>
        </div>
        <div class="col">
            <div class="card p-3 h-100 shadow-sm">
                <i class="bi bi-coin icon-box"></i>
                <h5 class="card-title mt-2">Women and vulnerable groups</h5>
            </div>
        </div>
        <div class="col">
            <div class="card p-3 h-100 shadow-sm">
                <i class="bi bi-coin icon-box"></i>
                <h5 class="card-title mt-2">Internally displaced people</h5>
            </div>
        </div>
        <div class="col">
            <div class="card p-3 h-100 shadow-sm">
                <i class="bi bi-coin icon-box"></i>
                <h5 class="card-title mt-2">General public enlightenment and Da’awah workers</h5>
            </div>
        </div>
    </div>
    </div>
</section>

<!-- Units -->
<section id="units" class="container my-5" >
    <h2 class="section-title text text-center" style="color: black !important;"> Our Units</h2>
    <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col">
            <div class="card p-3 h-100 shadow-sm">
                <i class="bi bi-mortarboard-fill icon-box"  style="color: black !important;"></i>
                <h5 class="card-title mt-2">Educational Human Resources Development</h5>
                <p class="card-text">Fatima College of Nursing Science, Fatima Yahaya International School, Fatima Yahaya Tahfiz Islamiyya School, Mallam Yahaya Islamic Library. <a href="">Read more..</a></p>
            </div>
        </div>
        <div class="col">
            <div class="card p-3 h-100 shadow-sm">
                <i class="bi bi-heart-fill icon-box"  style="color: black !important;"></i>
                <h5 class="card-title mt-2">Social and Humanitarian Services</h5>
                <p class="card-text">Food and medical assistance, school materials, shelter, clothing, sanitary facilities, water supply, and free firefighting service. <a href="">Read more..</a></p>
            </div>
        </div>
        <div class="col">
            <div class="card p-3 h-100 shadow-sm">
                <i class="bi bi-currency-exchange icon-box"  style="color: black !important;"></i>
                <h5 class="card-title mt-2">Economic Empowerment</h5>
                <p class="card-text">Skills acquisition, youth and women empowerment, interest-free loans, and specific empowerment programs. <a href="">Read more..</a></p>
            </div>
        </div>
        <div class="col">
            <div class="card p-3 h-100 shadow-sm">
                <i class="bi bi-coin icon-box"  style="color: black !important;"></i>
                <h5 class="card-title mt-2">Fundraising & Investment</h5>
                <p class="card-text">Asset management, donations, revolving fund management, Zakah and endowment management. <a href="">Read more..</a></p>
            </div>
        </div>
    </div>
</section>

<!-- Services -->
<section id="services">
    <div class="container p-4">
        <h2 class="section-title"><i class="bi bi-tools"></i> Our Services</h2>
        <div class="row g-4">
            <div class="col-md-6">
                <h5><i class="bi bi-book-fill"></i> Education & Human Resource Development</h5>
                <ul>
                    <li>Education and health institutions</li>
                    <li>Continued education and public enlightenment</li>
                    <li>Scholarship and student support</li>
                    <li>Promotion of religious practice</li>
                    <li>Research and publication</li>
                </ul>
            </div>
            <div class="col-md-6">
                <h5><i class="bi bi-hospital-fill"></i> Social & Humanitarian Services</h5>
                <ul>
                    <li>Foodstuff and cash assistance</li>
                    <li>Medical assistance</li>
                    <li>Shelter and school material assistance</li>
                    <li>Water supply and sanitary facilities</li>
                    <li>Free firefighting service</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Call to Partnership -->
<section id="partnership" class="container my-5 text-center">
    <h2 class="section-title"><i class="bi bi-handshake-fill"></i> Call for Partnership</h2>
    <p>Join us in empowering humanity through education, health, and social services. You can contribute through sponsorship, scholarships, donations, or supporting our programs for women and youth empowerment.</p>
    <a href="mailto:partnership@hfysifawa.org" class="btn btn-primary btn-lg">Partner With Us</a>
</section>

<!-- Footer -->
<footer class="text-center">
    <p>&copy; 2025 Hajiya Fatima Yahaya Foundation, Sifawa. All Rights Reserved.</p>
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
