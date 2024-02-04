@extends('layouts.app')
@section('content')
    <header id="header" class="fixed-top ">
        <div class="container d-flex align-items-center">

            <h1 class="logo me-auto"><a href="{{ url('/') }}">Datasets</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link" href="{{ url('datasets') }}">Datasets</a></li>
                    <li class="dropdown"><a href="#"><span>Contribute dataset</span> <i
                                class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="{{ url('donation') }}">Donate New</a></li>
                            <li><a href="#">Link External</a></li>
                        </ul>
                    </li>

                    <li class="dropdown"><a href="#"><span>About Us</span><i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="{{ url('about') }}">Who We Are</a></li>
                            <li><a href="{{ url('contact/information') }}">Contact Information</a></li>
                        </ul>
                    </li>
                    <li><a class="getstarted scrollto" href="#" data-bs-toggle="modal"
                            data-bs-target="#exampleModal"><i class="bi bi-search me-2"></i>Search</a>
                    </li>
                    @auth
                        <li class="dropdown"><a href="#"><span>{{ Auth::user()->email }}</span><i
                                    class="bi bi-chevron-down"></i></a>
                            <ul>
                                @if (Auth::user()->role == 'admin')
                                    <li><a href="{{ url('admin/dashboard') }}">Dashboard Admin</a></li>
                                @else
                                    <li><a href="#">Profile</a></li>
                                @endif
                                <li><a href="{{ url('logout') }}">Logout</a></li>
                            </ul>
                        </li>
                    @endauth
                    </li>
                    @guest
                        <a href="{{ url('login') }}" class="text-center">Login</a>
                    @endguest
                    </li>
                </ul>

                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->
            <!-- Modal -->


        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1"
                    data-aos="fade-up" data-aos-delay="200">
                    <h1>Welcome</h1>
                    <h2>We are team of talented designers making websites with Bootstrap</h2>
                    <div class="d-flex justify-content-center justify-content-lg-start">
                        <a href="{{ url('datasets') }}" class="btn-get-started scrollto">View Datasets</a>
                        <a href="{{ url('donation') }}" class="btn-get-started scrollto ms-3">Contribute a Dataset</a>
                    </div>

                </div>
                <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
                    <img src="assets/img/hero-img.png" class="img-fluid animated" alt="">
                </div>
            </div>
        </div>

    </section><!-- End Hero -->

    <main id="main">
        <div class="container mt-4">
            <div class="row">
                <div class="col-md-6 mb-3">
                    <div class="card p-4 rounded-top-4 shadow-sm">
                        <p class="fw-bold fs-3 text-center" style="color: #38527E"> Popular Datasets</p>
                        <hr style="margin-top: -0px">
                            <div class="row align-items-center">
                                <div class="col-md-2" id="img-dataset">
                                    <img class="img-fluid" src="{{ asset('assets/img/clients/client-6.png') }}"
                                        alt="">
                                </div>
                                <div class="col-md-10 mb-2">
                                    <a href="{{ url('detail/dataset/' . $popularDataset->id) }}">
                                        <h5 class="text-capitalize" style="color: #38527E">{{ $popularDataset->name }}
                                        </h5>
                                    </a>
                                    <p>{{ Str::limit($popularDataset->abstract, 40, '...') }}
                                    </p>
                                    <div class="input-group gap-5">
                                        <a href="" class="nav-link"><i class="bi bi-download me-2"></i>
                                            @php
                                                $count = 0;
                                            @endphp
                                            @foreach ($countDownloads as $countDownload)
                                                @if ($countDownload == $popularDataset->id)
                                                    @php
                                                        $count++;
                                                    @endphp
                                                @endif
                                            @endforeach
                                            {{ $count }}
                                        </a>
                                        <a href="#" class="nav-link"><i
                                                class="bi bi-building me-2"></i>{{ $popularDataset->instances }}
                                            Instances</a>
                                        <a href="#" class="nav-link"><i
                                                class="bi bi-table me-2"></i>{{ $popularDataset->features }}
                                            Features</a>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>


                <div class="col-md-6">
                    <div class="card p-4 rounded-top-4 shadow-sm">
                        <p class="fw-bold fs-3 text-center" style="color: #38527E"> New Datasets</p>
                        <hr style="margin-top: -0px">
                        <div class="row align-items-center">
                            <div class="col-md-2" id="img-dataset">
                                <img class="img-fluid" src="{{ asset('assets/img/clients/client-6.png') }}" alt="">
                            </div>
                            <div class="col-md-10 mb-2">
                                <a href="{{ url('detail/dataset/' . $dataset->id) }}">
                                    <h5 class="text-capitalize" style="color: #38527E">{{ $dataset->name }}
                                    </h5>
                                </a>
                                <p>{{ Str::limit($dataset->abstract, 40, '...') }}
                                </p>
                                <div class="input-group gap-5">
                                    <a href="" class="nav-link"><i class="bi bi-download me-2"></i>
                                        @php
                                            $count = 0;
                                        @endphp
                                        @foreach ($countDownloads as $countDownload)
                                            @if ($countDownload == $dataset->id)
                                                @php
                                                    $count++;
                                                @endphp
                                            @endif
                                        @endforeach
                                        {{ $count }}
                                    </a>
                                    <a href="#" class="nav-link"><i
                                            class="bi bi-building me-2"></i>{{ $dataset->instances }}
                                        Instances</a>
                                    <a href="#" class="nav-link"><i
                                            class="bi bi-table me-2"></i>{{ $dataset->features }}
                                        Features</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Search DataSet</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <input type="text" class="form-control" placeholder="Search">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary" style="color:  #38527E">Search</button>
                    </div>
                </div>
            </div>
        </div>

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
@endsection

<!-- ======= Header ======= -->
