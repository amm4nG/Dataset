@extends('layouts.app')
@section('content')
    <header id="header" class="fixed-top " style="background-color: #38527E">
        <div class="container d-flex align-items-center">

            <h1 class="logo me-auto"><a href="{{ url('/') }}">Datasets</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

            <nav id="navbar" class="navbar ">
                <ul>
                    <li><a class="nav-link scrollto" href="{{ url('datasets') }}">Datasets</a></li>
                    <li class="dropdown"><a href="#" class="active"><span>Contribute dataset</span> <i
                                class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="#">Donate New</a></li>
                            <li><a href="#">Link External</a></li>
                        </ul>
                    </li>

                    <li class="dropdown"><a href="#"><span>About Us</span><i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="#">Who We Are</a></li>
                            <li><a href="#">Contact Information</a></li>
                        </ul>
                    </li>
                    <li><a class="getstarted scrollto" href="#" data-bs-toggle="modal"
                            data-bs-target="#exampleModal"><i class="bi bi-search me-2"></i>Search</a>
                    </li>
                    <li>
                        <a class="text-center" href="{{ url('login') }}">Login</a>
                    </li>
                </ul>

                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->
            <!-- Modal -->


        </div>
    </header><!-- End Header -->

    <main id="main">
        <div class="container login-container" style="margin-top: 7rem; margin-bottom: 3rem">
            <div class="text-center">
                <h1 class="fw-bold" style="color: #38527E">Dataset Donation Form</h1>
                <h5 style="color: gray">We offer users the option to upload their dataset data to our repository.</h5>
                <h5 style="color: gray">Users can provide tabular or non-tabular dataset data which will be made publicly
                    available on our
                    repository. Donators are free to edit their donated datasets, but edits must be approved before
                    finalizing.</h5>
            </div>

            <div class="row justify-content-center mt-5">
                <div class="col-md-8">
                    <p class="card-title fs-2 text-start" style="color: #38527E; ">Basic
                        Info</p>
                    <div class="card p-4 rounded-3">
                        <div class="card-body ">
                            <form>
                                <div class="mb-3 position-relative">
                                    <label for="email" class="form-label">Dataset Name</label>
                                    <input type="email" class="form-control" id="email" placeholder="">
                                    <hr class="border-bottom">
                                </div>
                            </form>
                            <form>
                                <div class="mb-3 position-relative">
                                    <label for="email" class="form-label">Abstract</label>
                                    <input type="email" class="form-control p-5" id="email" placeholder="">
                                    <p style="color: gray">Maximum 1000 Characters.</p>
                                    <hr class="border-bottom">
                                </div>
                            </form>
                            <form>
                                <div class="mb-3 position-relative">
                                    <label for="email" class="form-label">Number of Instances (Rows) in Dataset</label>
                                    <input type="email" class="form-control" id="email" placeholder="">
                                    <hr class="border-bottom">
                                </div>
                            </form>
                            <form>
                                <div class="mb-3 position-relative">
                                    <label for="email" class="form-label">Number of Features in Dataset</label>
                                    <input type="email" class="form-control" id="email" placeholder="">
                                    <hr class="border-bottom">
                                </div>
                            </form>
                            <form>
                                <div class="mb-3 position-relative">
                                    <label for="email" class="form-label">Dataset DOI</label>
                                    <input type="email" class="form-control" id="email" placeholder="">
                                    <p style="color: gray">If a DOI is not provided, one will be generated for the dataset.
                                    </p>
                                    <hr class="border-bottom">
                                </div>

                                <div class="row justify-content-center mt-5">
                                    <div class="col-md-6 ">
                                        <div class="card p-4 text-center">
                                            <input type="file" name="" id="">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center mt-3">
                <div class="col-md-8">
                    <p class="card-title fs-2 text-start" style="color: #38527E;">Dataset Characteristics</p>
                    <div class="card p-1 rounded-3">
                        <div class="card-body">
                            <div class="form-check d-flex align-items-center">
                                <label class="form-check-label" for="flexCheckDefault">Tabular</label>
                                <input class="form-check-input ms-auto" type="checkbox" value=""
                                    id="flexCheckDefault" style="border-color: #38527E;">
                            </div>
                            <div class="form-check d-flex align-items-center">
                                <label class="form-check-label" for="flexCheckDefault">Sequential</label>
                                <input class="form-check-input ms-auto" type="checkbox" value=""
                                    id="flexCheckDefault" style="border-color: #38527E;">
                            </div>
                            <div class="form-check d-flex align-items-center">
                                <label class="form-check-label" for="flexCheckDefault">Multivariate</label>
                                <input class="form-check-input ms-auto" type="checkbox" value=""
                                    id="flexCheckDefault" style="border-color: #38527E;">
                            </div>
                            <div class="form-check d-flex align-items-center">
                                <label class="form-check-label" for="flexCheckDefault">Time-Series</label>
                                <input class="form-check-input ms-auto" type="checkbox" value=""
                                    id="flexCheckDefault" style="border-color: #38527E;">
                            </div>
                            <div class="form-check d-flex align-items-center">
                                <label class="form-check-label" for="flexCheckDefault">Text</label>
                                <input class="form-check-input ms-auto" type="checkbox" value=""
                                    id="flexCheckDefault" style="border-color: #38527E;">
                            </div>
                            <div class="form-check d-flex align-items-center">
                                <label class="form-check-label" for="flexCheckDefault">Image</label>
                                <input class="form-check-input ms-auto" type="checkbox" value=""
                                    id="flexCheckDefault" style="border-color: #38527E;">
                            </div>
                            <div class="form-check d-flex align-items-center">
                                <label class="form-check-label" for="flexCheckDefault">Spatiotemporal</label>
                                <input class="form-check-input ms-auto" type="checkbox" value=""
                                    id="flexCheckDefault" style="border-color: #38527E;">
                            </div>
                            <div class="form-check d-flex align-items-center">
                                <label class="form-check-label" for="flexCheckDefault">Other</label>
                                <input class="form-check-input ms-auto" type="checkbox" value=""
                                    id="flexCheckDefault" style="border-color: #38527E;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center mt-3">
                <div class="col-md-8">
                    <p class="card-title fs-2 text-start" style="color: #38527E;">Subject Area</p>
                    <div class="card p-1 rounded-3">
                        <div class="card-body">
                            <div class="form-check d-flex align-items-center">
                                <label class="form-check-label" for="tabular">Biology</label>
                                <input class="form-check-input ms-auto" type="radio" name="subjectArea" id="tabular"
                                    style="border-color: #38527E;">
                            </div>
                            <div class="form-check d-flex align-items-center">
                                <label class="form-check-label" for="sequential">Business</label>
                                <input class="form-check-input ms-auto" type="radio" name="subjectArea"
                                    id="sequential" style="border-color: #38527E;">
                            </div>
                            <div class="form-check d-flex align-items-center">
                                <label class="form-check-label" for="sequential">Climate and Environment</label>
                                <input class="form-check-input ms-auto" type="radio" name="subjectArea"
                                    id="sequential" style="border-color: #38527E;">
                            </div>
                            <div class="form-check d-flex align-items-center">
                                <label class="form-check-label" for="sequential">Computer Science</label>
                                <input class="form-check-input ms-auto" type="radio" name="subjectArea"
                                    id="sequential" style="border-color: #38527E;">
                            </div>
                            <div class="form-check d-flex align-items-center">
                                <label class="form-check-label" for="sequential">Engineering</label>
                                <input class="form-check-input ms-auto" type="radio" name="subjectArea"
                                    id="sequential" style="border-color: #38527E;">
                            </div>
                            <div class="form-check d-flex align-items-center">
                                <label class="form-check-label" for="sequential">Games</label>
                                <input class="form-check-input ms-auto" type="radio" name="subjectArea"
                                    id="sequential" style="border-color: #38527E;">
                            </div>
                            <div class="form-check d-flex align-items-center">
                                <label class="form-check-label" for="sequential">Health and Medicine </label>
                                <input class="form-check-input ms-auto" type="radio" name="subjectArea"
                                    id="sequential" style="border-color: #38527E;">
                            </div>
                            <div class="form-check d-flex align-items-center">
                                <label class="form-check-label" for="sequential">Law</label>
                                <input class="form-check-input ms-auto" type="radio" name="subjectArea"
                                    id="sequential" style="border-color: #38527E;">
                            </div>
                            <div class="form-check d-flex align-items-center">
                                <label class="form-check-label" for="sequential">Physics and Chemistry</label>
                                <input class="form-check-input ms-auto" type="radio" name="subjectArea"
                                    id="sequential" style="border-color: #38527E;">
                            </div>
                            <div class="form-check d-flex align-items-center">
                                <label class="form-check-label" for="sequential">Social Science</label>
                                <input class="form-check-input ms-auto" type="radio" name="subjectArea"
                                    id="sequential" style="border-color: #38527E;">
                            </div>
                            <div class="form-check d-flex align-items-center">
                                <label class="form-check-label" for="sequential">Other</label>
                                <input class="form-check-input ms-auto" type="radio" name="subjectArea"
                                    id="sequential" style="border-color: #38527E;">
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center mt-3">
                <div class="col-md-8">
                    <p class="card-title fs-2 text-start" style="color: #38527E;">Associated Task</p>
                    <div class="card p-1 rounded-3">
                        <div class="card-body">
                            <div class="form-check d-flex align-items-center">
                                <label class="form-check-label" for="flexCheckDefault">Classification</label>
                                <input class="form-check-input ms-auto" type="checkbox" value=""
                                    id="flexCheckDefault" style="border-color: #38527E;">
                            </div>
                            <div class="form-check d-flex align-items-center">
                                <label class="form-check-label" for="flexCheckDefault">Regression</label>
                                <input class="form-check-input ms-auto" type="checkbox" value=""
                                    id="flexCheckDefault" style="border-color: #38527E;">
                            </div>
                            <div class="form-check d-flex align-items-center">
                                <label class="form-check-label" for="flexCheckDefault">Clustering</label>
                                <input class="form-check-input ms-auto" type="checkbox" value=""
                                    id="flexCheckDefault" style="border-color: #38527E;">
                            </div>
                            <div class="form-check d-flex align-items-center">
                                <label class="form-check-label" for="flexCheckDefault">Other</label>
                                <input class="form-check-input ms-auto" type="checkbox" value=""
                                    id="flexCheckDefault" style="border-color: #38527E;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center mt-3">
                <div class="col-md-8">
                    <p class="card-title fs-2 text-start" style="color: #38527E;">Feature Types</p>
                    <div class="card p-1 rounded-3">
                        <div class="card-body">
                            <div class="form-check d-flex align-items-center">
                                <label class="form-check-label" for="flexCheckDefault">Real</label>
                                <input class="form-check-input ms-auto" type="checkbox" value=""
                                    id="flexCheckDefault" style="border-color: #38527E;">
                            </div>
                            <div class="form-check d-flex align-items-center">
                                <label class="form-check-label" for="flexCheckDefault">Categorial</label>
                                <input class="form-check-input ms-auto" type="checkbox" value=""
                                    id="flexCheckDefault" style="border-color: #38527E;">
                            </div>
                            <div class="form-check d-flex align-items-center">
                                <label class="form-check-label" for="flexCheckDefault">Integer</label>
                                <input class="form-check-input ms-auto" type="checkbox" value=""
                                    id="flexCheckDefault" style="border-color: #38527E;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row  mt-3 " style="margin-left: 208px">
                <div class="col-md-1 ">
                    <a href="{{ url('donation_paper') }}">
                        <button type="button" class="btn fs-5 text-light"
                            style="background-color: #38527E">Next</button>
                    </a>
                </div>
            </div>
        </div>
    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
@endsection

<!-- ======= Header ======= -->
