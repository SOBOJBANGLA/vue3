@extends('frontend.layouts.app')

@section('title','About')

@section('content')
<section class="bg-half-170 d-table w-100" style="background: url('{{asset ('images/hero/bg.jpg') }}');">
    <div class="bg-overlay bg-gradient-overlay"></div>
    <div class="container">
        <div class="row mt-5 justify-content-center">
            <div class="col-12">
                <div class="title-heading text-center">
                    <h5 class="heading fw-semibold mb-0 sub-heading text-white title-dark">About Us</h5>
                </div>
            </div><!--end col-->
        </div><!--end row-->

        <div class="position-middle-bottom">
            <nav aria-label="breadcrumb" class="d-block">
                <ul class="breadcrumb breadcrumb-muted mb-0 p-0">
                    <li class="breadcrumb-item"><a href="index.html">Jobnova</a></li>
                    <li class="breadcrumb-item active" aria-current="page">About us</li>
                </ul>
            </nav>
        </div>
    </div><!--end container-->
</section><!--end section-->
<div class="position-relative">
    <div class="shape overflow-hidden text-white">
        <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
        </svg>
    </div>
</div>
<!-- Hero End -->

<!-- Start -->
<section class="section">
    <div class="container">
        <div class="row g-4 align-items-center">
            <div class="col-lg-6 col-md-6 mb-5">
                <div class="about-left">
                    <div class="position-relative shadow rounded img-one">
                        <img src="{{asset('images/about/ab01.jpg')}}" class="img-fluid rounded" alt="work-image">
                    </div>

                    <div class="img-two shadow rounded p-2 bg-white">
                        <img src="{{asset('images/about/ab02.jpg')}}" class="img-fluid rounded" alt="work-image">

                        <div class="position-absolute top-0 start-50 translate-middle">
                            <a href="#!" data-type="youtube" data-id="yba7hPeTSjk" class="avatar avatar-md-md rounded-pill shadow card d-flex justify-content-center align-items-center lightbox">
                                <i class="mdi mdi-play mdi-24px text-primary"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div><!--end col-->

            <div class="col-lg-6 col-md-6">
                <div class="section-title ms-lg-5">
                    <h4 class="title mb-3">Millions of jobs. <br> Find the one that's right for you.</h4>
                    <p class="text-muted para-desc mb-0">Search all the open positions on the web. Get your own personalized salary estimate. Read reviews on over 30000+ companies worldwide.</p>
                
                    <ul class="list-unstyled text-muted mb-0 mt-3">
                        <li class="mb-1"><span class="text-primary h5 me-2"><i class="mdi mdi-check-circle-outline align-middle"></i></span>Digital Marketing Solutions for Tomorrow</li>
                        <li class="mb-1"><span class="text-primary h5 me-2"><i class="mdi mdi-check-circle-outline align-middle"></i></span>Our Talented & Experienced Marketing Agency</li>
                        <li class="mb-1"><span class="text-primary h5 me-2"><i class="mdi mdi-check-circle-outline align-middle"></i></span>Create your own skin to match your brand</li>
                    </ul>

                    <div class="mt-4">
                        <a href="aboutus.html" class="btn btn-primary">About Us <i class="mdi mdi-arrow-right align-middle"></i></a>
                    </div>
                </div>
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->

    <div class="container mt-100 mt-60">
        <div class="row justify-content-center mb-4 pb-2">
            <div class="col-12">
                <div class="section-title text-center">
                    <h4 class="title mb-3">Here's why you'll love it Jobnova</h4>
                    <p class="text-muted para-desc mx-auto mb-0">Search all the open positions on the web. Get your own personalized salary estimate. Read reviews on over 30000+ companies worldwide.</p>
                </div>
            </div><!--end col-->
        </div><!--end row-->

        <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-6 col-12 mt-4 pt-2">
                <div class="position-relative features text-center p-4 rounded shadow bg-white">
                    <div class="feature-icon bg-soft-primary rounded shadow mx-auto position-relative overflow-hidden d-flex justify-content-center align-items-center">
                        <i data-feather="phone" class="fea icon-ex-md"></i>
                    </div>

                    <div class="mt-4">
                        <a href="" class="title h5 text-dark">24/7 Support</a>
                        <p class="text-muted mt-3 mb-0">Many desktop publishing now use and a search for job.</p>
                        <div class="mt-3">
                            <a href="" class="btn btn-link primary text-dark">Read More <i class="mdi mdi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div><!--end col-->
            
            <div class="col-lg-3 col-md-4 col-sm-6 col-12 mt-4 pt-2">
                <div class="position-relative features text-center p-4 rounded shadow bg-white">
                    <div class="feature-icon bg-soft-primary rounded shadow mx-auto position-relative overflow-hidden d-flex justify-content-center align-items-center">
                        <i data-feather="cpu" class="fea icon-ex-md"></i>
                    </div>

                    <div class="mt-4">
                        <a href="" class="title h5 text-dark">Tech & Startup Jobs</a>
                        <p class="text-muted mt-3 mb-0">Many desktop publishing now use and a search for job.</p>
                        <div class="mt-3">
                            <a href="" class="btn btn-link primary text-dark">Read More <i class="mdi mdi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div><!--end col-->
            
            <div class="col-lg-3 col-md-4 col-sm-6 col-12 mt-4 pt-2">
                <div class="position-relative features text-center p-4 rounded shadow bg-white">
                    <div class="feature-icon bg-soft-primary rounded shadow mx-auto position-relative overflow-hidden d-flex justify-content-center align-items-center">
                        <i data-feather="activity" class="fea icon-ex-md"></i>
                    </div>

                    <div class="mt-4">
                        <a href="" class="title h5 text-dark">Quick & Easy</a>
                        <p class="text-muted mt-3 mb-0">Many desktop publishing now use and a search for job.</p>
                        <div class="mt-3">
                            <a href="" class="btn btn-link primary text-dark">Read More <i class="mdi mdi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div><!--end col-->
            
            <div class="col-lg-3 col-md-4 col-sm-6 col-12 mt-4 pt-2">
                <div class="position-relative features text-center p-4 rounded shadow bg-white">
                    <div class="feature-icon bg-soft-primary rounded shadow mx-auto position-relative overflow-hidden d-flex justify-content-center align-items-center">
                        <i data-feather="clock" class="fea icon-ex-md"></i>
                    </div>

                    <div class="mt-4">
                        <a href="" class="title h5 text-dark">Save Time</a>
                        <p class="text-muted mt-3 mb-0">Many desktop publishing now use and a search for job.</p>
                        <div class="mt-3">
                            <a href="" class="btn btn-link primary text-dark">Read More <i class="mdi mdi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div><!--end col-->
            
            <div class="col-lg-3 col-md-4 col-sm-6 col-12 mt-4 pt-2">
                <div class="position-relative features text-center p-4 rounded shadow bg-white">
                    <div class="feature-icon bg-soft-primary rounded shadow mx-auto position-relative overflow-hidden d-flex justify-content-center align-items-center">
                        <i data-feather="file-text" class="fea icon-ex-md"></i>
                    </div>

                    <div class="mt-4">
                        <a href="" class="title h5 text-dark">Apply with confidence</a>
                        <p class="text-muted mt-3 mb-0">Many desktop publishing now use and a search for job.</p>
                        <div class="mt-3">
                            <a href="" class="btn btn-link primary text-dark">Read More <i class="mdi mdi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div><!--end col-->
            
            <div class="col-lg-3 col-md-4 col-sm-6 col-12 mt-4 pt-2">
                <div class="position-relative features text-center p-4 rounded shadow bg-white">
                    <div class="feature-icon bg-soft-primary rounded shadow mx-auto position-relative overflow-hidden d-flex justify-content-center align-items-center">
                        <i data-feather="codesandbox" class="fea icon-ex-md"></i>
                    </div>

                    <div class="mt-4">
                        <a href="" class="title h5 text-dark">Reduce Hiring Bias</a>
                        <p class="text-muted mt-3 mb-0">Many desktop publishing now use and a search for job.</p>
                        <div class="mt-3">
                            <a href="" class="btn btn-link primary text-dark">Read More <i class="mdi mdi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div><!--end col-->
            
            <div class="col-lg-3 col-md-4 col-sm-6 col-12 mt-4 pt-2">
                <div class="position-relative features text-center p-4 rounded shadow bg-white">
                    <div class="feature-icon bg-soft-primary rounded shadow mx-auto position-relative overflow-hidden d-flex justify-content-center align-items-center">
                        <i data-feather="users" class="fea icon-ex-md"></i>
                    </div>

                    <div class="mt-4">
                        <a href="" class="title h5 text-dark">Proactive Employers</a>
                        <p class="text-muted mt-3 mb-0">Many desktop publishing now use and a search for job.</p>
                        <div class="mt-3">
                            <a href="" class="btn btn-link primary text-dark">Read More <i class="mdi mdi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div><!--end col-->
            
            <div class="col-lg-3 col-md-4 col-sm-6 col-12 mt-4 pt-2">
                <div class="position-relative features text-center p-4 rounded shadow bg-white">
                    <div class="feature-icon bg-soft-primary rounded shadow mx-auto position-relative overflow-hidden d-flex justify-content-center align-items-center">
                        <i data-feather="user-check" class="fea icon-ex-md"></i>
                    </div>

                    <div class="mt-4">
                        <a href="" class="title h5 text-dark">No Missed Opportunities</a>
                        <p class="text-muted mt-3 mb-0">Many desktop publishing now use and a search for job.</p>
                        <div class="mt-3">
                            <a href="" class="btn btn-link primary text-dark">Read More <i class="mdi mdi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->

    <div class="container mt-100 mt-60">
        <div class="row justify-content-center">
            <div class="col">
                <div class="section-title text-center mb-4 pb-2">
                    <h4 class="title mb-3">Our Minds</h4>
                    <p class="text-muted para-desc mb-0 mx-auto">Search all the open positions on the web. Get your own personalized salary estimate. Read reviews on over 30000+ companies worldwide.</p>
                </div>
            </div><!--end col-->
        </div><!--end row-->

        <div class="row g-4 mt-0">
            <div class="col-lg-3 col-md-4 col-12">
                <div class="card team team-primary text-center">
                    <div class="card-img team-image d-inline-block mx-auto rounded-pill avatar avatar-ex-large overflow-hidden">
                        <img src="{{asset('images/team/04.jpg')}}" class="img-fluid" alt="">
                        <div class="card-overlay avatar avatar-ex-large rounded-pill"></div>

                        <ul class="list-unstyled team-social mb-0">
                            <li class="list-inline-item"><a href="javascript:void(0)" class="btn btn-sm btn-pills btn-icon"><i data-feather="facebook" class="icons fea-social"></i></a></li>
                            <li class="list-inline-item"><a href="javascript:void(0)" class="btn btn-sm btn-pills btn-icon"><i data-feather="instagram" class="icons fea-social"></i></a></li>
                            <li class="list-inline-item"><a href="javascript:void(0)" class="btn btn-sm btn-pills btn-icon"><i data-feather="twitter" class="icons fea-social"></i></a></li>
                        </ul><!--end icon-->
                    </div>

                    <div class="content mt-3">
                        <a href="page-team-detail.html" class="text-dark h5 mb-0 title">Jack John</a>
                        <h6 class="text-muted mb-0 fw-normal">Job Seeker</h6>
                    </div>
                </div>
            </div><!--end col-->
            
            <div class="col-lg-3 col-md-4 col-12">
                <div class="card team team-primary text-center">
                    <div class="card-img team-image d-inline-block mx-auto rounded-pill avatar avatar-ex-large overflow-hidden">
                        <img src="{{asset('images/team/05.jpg')}}" class="img-fluid" alt="">
                        <div class="card-overlay avatar avatar-ex-large rounded-pill"></div>

                        <ul class="list-unstyled team-social mb-0">
                            <li class="list-inline-item"><a href="javascript:void(0)" class="btn btn-sm btn-pills btn-icon"><i data-feather="facebook" class="icons fea-social"></i></a></li>
                            <li class="list-inline-item"><a href="javascript:void(0)" class="btn btn-sm btn-pills btn-icon"><i data-feather="instagram" class="icons fea-social"></i></a></li>
                            <li class="list-inline-item"><a href="javascript:void(0)" class="btn btn-sm btn-pills btn-icon"><i data-feather="twitter" class="icons fea-social"></i></a></li>
                        </ul><!--end icon-->
                    </div>

                    <div class="content mt-3">
                        <a href="page-team-detail.html" class="text-dark h5 mb-0 title">Krista John</a>
                        <h6 class="text-muted mb-0 fw-normal">Job Seeker</h6>
                    </div>
                </div>
            </div><!--end col-->
            
            <div class="col-lg-3 col-md-4 col-12">
                <div class="card team team-primary text-center">
                    <div class="card-img team-image d-inline-block mx-auto rounded-pill avatar avatar-ex-large overflow-hidden">
                        <img src="{{asset('images/team/06.jpg')}}" class="img-fluid" alt="">
                        <div class="card-overlay avatar avatar-ex-large rounded-pill"></div>

                        <ul class="list-unstyled team-social mb-0">
                            <li class="list-inline-item"><a href="javascript:void(0)" class="btn btn-sm btn-pills btn-icon"><i data-feather="facebook" class="icons fea-social"></i></a></li>
                            <li class="list-inline-item"><a href="javascript:void(0)" class="btn btn-sm btn-pills btn-icon"><i data-feather="instagram" class="icons fea-social"></i></a></li>
                            <li class="list-inline-item"><a href="javascript:void(0)" class="btn btn-sm btn-pills btn-icon"><i data-feather="twitter" class="icons fea-social"></i></a></li>
                        </ul><!--end icon-->
                    </div>

                    <div class="content mt-3">
                        <a href="page-team-detail.html" class="text-dark h5 mb-0 title">Roger Jackson</a>
                        <h6 class="text-muted mb-0 fw-normal">Job Seeker</h6>
                    </div>
                </div>
            </div><!--end col-->
            
            <div class="col-lg-3 col-md-4 col-12">
                <div class="card team team-primary text-center">
                    <div class="card-img team-image d-inline-block mx-auto rounded-pill avatar avatar-ex-large overflow-hidden">
                        <img src="{{asset('images/team/07.jpg')}}" class="img-fluid" alt="">
                        <div class="card-overlay avatar avatar-ex-large rounded-pill"></div>

                        <ul class="list-unstyled team-social mb-0">
                            <li class="list-inline-item"><a href="javascript:void(0)" class="btn btn-sm btn-pills btn-icon"><i data-feather="facebook" class="icons fea-social"></i></a></li>
                            <li class="list-inline-item"><a href="javascript:void(0)" class="btn btn-sm btn-pills btn-icon"><i data-feather="instagram" class="icons fea-social"></i></a></li>
                            <li class="list-inline-item"><a href="javascript:void(0)" class="btn btn-sm btn-pills btn-icon"><i data-feather="twitter" class="icons fea-social"></i></a></li>
                        </ul><!--end icon-->
                    </div>

                    <div class="content mt-3">
                        <a href="page-team-detail.html" class="text-dark h5 mb-0 title">Johnny English</a>
                        <h6 class="text-muted mb-0 fw-normal">Job Seeker</h6>
                    </div>
                </div>
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->

    <div class="container mt-100 mt-60">
        <div class="row justify-content-center">
            <div class="col">
                <div class="section-title text-center mb-4 pb-2">
                    <h4 class="title mb-3">Questions & Answers</h4>
                    <p class="text-muted para-desc mb-0 mx-auto">Search all the open positions on the web. Get your own personalized salary estimate. Read reviews on over 30000+ companies worldwide.</p>
                </div>
            </div><!--end col-->
        </div><!--end row-->

        <div class="row mt-4 pt-2">
            <div class="col-md-6 col-12">
                <div class="d-flex">
                    <i data-feather="help-circle" class="fea icon-ex-md text-primary me-2 mt-1"></i>
                    <div class="flex-1">
                        <h5 class="mt-0">How our <span class="text-primary">Jobnova</span> work ?</h5>
                        <p class="answer text-muted mb-0">Due to its widespread use as filler text for layouts, non-readability is of great importance: human perception is tuned to recognize certain patterns and repetitions in texts.</p>
                    </div>
                </div>
            </div><!--end col-->
            
            <div class="col-md-6 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                <div class="d-flex">
                    <i data-feather="help-circle" class="fea icon-ex-md text-primary me-2 mt-1"></i>
                    <div class="flex-1">
                        <h5 class="mt-0"> What is the main process open account ?</h5>
                        <p class="answer text-muted mb-0">If the distribution of letters and 'words' is random, the reader will not be distracted from making a neutral judgement on the visual impact</p>
                    </div>
                </div>
            </div><!--end col-->
            
            <div class="col-md-6 col-12 mt-4 pt-2">
                <div class="d-flex">
                    <i data-feather="help-circle" class="fea icon-ex-md text-primary me-2 mt-1"></i>
                    <div class="flex-1">
                        <h5 class="mt-0"> How to make unlimited data entry ?</h5>
                        <p class="answer text-muted mb-0">Furthermore, it is advantageous when the dummy text is relatively realistic so that the layout impression of the final publication is not compromised.</p>
                    </div>
                </div>
            </div><!--end col-->
            
            <div class="col-md-6 col-12 mt-4 pt-2">
                <div class="d-flex">
                    <i data-feather="help-circle" class="fea icon-ex-md text-primary me-2 mt-1"></i>
                    <div class="flex-1">
                        <h5 class="mt-0"> Is <span class="text-primary">Jobnova</span> safer to use with my account ?</h5>
                        <p class="answer text-muted mb-0">The most well-known dummy text is the 'Lorem Ipsum', which is said to have originated in the 16th century. Lorem Ipsum is composed in a pseudo-Latin language which more or less corresponds to 'proper' Latin.</p>
                    </div>
                </div>
            </div><!--end col-->
        </div><!--end row-->

        <div class="row mt-md-5 pt-md-3 mt-4 pt-2 justify-content-center">
            <div class="col-12 text-center">
                <div class="section-title">
                    <h4 class="title mb-4">Have Question ? Get in touch!</h4>
                    <p class="text-muted para-desc mx-auto">Start working with <span class="text-primary fw-bold">Jobnova</span> that can provide everything you need to generate awareness, drive traffic, connect.</p>
                    <a href="contactus.html" class="btn btn-primary mt-3"><i class="uil uil-phone"></i> Contact us</a>
                </div>
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->
</section>
@endsection