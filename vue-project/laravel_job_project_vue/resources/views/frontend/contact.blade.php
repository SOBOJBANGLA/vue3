@extends('frontend.layouts.app')

@section('title','Contact')

@section('content')
<section class="bg-half-170 d-table w-100" style="background: url('{{asset('images/hero/bg.jpg')}}');">
    <div class="bg-overlay bg-gradient-overlay"></div>
    <div class="container">
        <div class="row mt-5 justify-content-center">
            <div class="col-12">
                <div class="title-heading text-center">
                    <p class="text-white-50 para-desc mx-auto mb-0">Get in touch !</p>
                    <h5 class="heading fw-semibold mb-0 sub-heading text-white title-dark">Contact us</h5>
                </div>
            </div><!--end col-->
        </div><!--end row-->

        <div class="position-middle-bottom">
            <nav aria-label="breadcrumb" class="d-block">
                <ul class="breadcrumb breadcrumb-muted mb-0 p-0">
                    <li class="breadcrumb-item"><a href="index.html">Jobnova</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Contact us</li>
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
<section class="section pb-0">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <img src="{{asset('images/svg/contact.svg')}}" class="img-fluid" alt="">
            </div>
            <div class="col-md-6">
                <div class="p-4 rounded shadow ms-lg-5">
                    <h4>Get in touch !</h4>
                    <form class="mt-4" method="post" action="{{ route('contact') }}">
                        @csrf
                        <p class="mb-0" id="error-msg"></p>
                        <div id="simple-msg"></div>
                        <div class="row">
                            <input type="hidden" name="candidate_id" value="@if(Auth::check()) {{ Auth::user()->id }} @endif">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label fw-semibold">Your Name <span class="text-danger">*</span></label>
                                    <input name="name" id="name" type="text" class="form-control" placeholder="Name :">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label fw-semibold">Your Email <span class="text-danger">*</span></label>
                                    <input name="email" id="email" type="email" class="form-control" placeholder="Email :">
                                </div> 
                            </div><!--end col-->

                            <div class="col-12">
                                <div class="mb-3">
                                    <label class="form-label fw-semibold">Subject</label>
                                    <input name="subject" id="subject" class="form-control" placeholder="Subject :">
                                </div>
                            </div><!--end col-->

                            <div class="col-12">
                                <div class="mb-3">
                                    <label class="form-label fw-semibold">Comments <span class="text-danger">*</span></label>
                                    <textarea name="comment" id="comments" rows="4" class="form-control" placeholder="Message :"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="d-grid">
                                    @if(Auth::check())
                                    <button type="submit" id="submit" name="send" class="btn btn-primary">Send Message</button>
                                    @else
                                    <button type="submit" id="submit" name="send" class="btn btn-primary">Send Message</button>
                                    @endif
                                </div>
                            </div><!--end col-->
                        </div><!--end row-->
                    </form>
                </div>
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->

    <div class="container mt-100 mt-60">
        <div class="row g-4">
            <div class="col-md-4">
                <div class="position-relative features text-center mx-lg-4 px-md-1">
                    <div class="feature-icon bg-soft-primary rounded shadow mx-auto position-relative overflow-hidden d-flex justify-content-center align-items-center">
                        <i data-feather="phone" class="fea icon-ex-md"></i>
                    </div>

                    <div class="mt-4">
                        <h5 class="mb-3">Phone</h5>
                        <p class="text-muted">Start working with Jobnova that can provide everything</p>
                        <a href="tel:+152534-468-854" class="text-primary">+152 534-468-854</a>
                    </div>
                </div>
            </div><!--end col-->
            
            <div class="col-md-4">
                <div class="position-relative features text-center mx-lg-4 px-md-1">
                    <div class="feature-icon bg-soft-primary rounded shadow mx-auto position-relative overflow-hidden d-flex justify-content-center align-items-center">
                        <i data-feather="mail" class="fea icon-ex-md"></i>
                    </div>

                    <div class="mt-4">
                        <h5 class="mb-3">Email</h5>
                        <p class="text-muted">Start working with Jobnova that can provide everything</p>
                        <a href="mailto:contact@example.com" class="text-primary">contact@example.com</a>
                    </div>
                </div>
            </div><!--end col-->
            
            <div class="col-md-4">
                <div class="position-relative features text-center mx-lg-4 px-md-1">
                    <div class="feature-icon bg-soft-primary rounded shadow mx-auto position-relative overflow-hidden d-flex justify-content-center align-items-center">
                        <i data-feather="map-pin" class="fea icon-ex-md"></i>
                    </div>

                    <div class="mt-4">
                        <h5 class="mb-3">Location</h5>
                        <p class="text-muted">C/54 Northwest Freeway, Suite 558, <br>Houston, USA 485</p>
                        <a href="" class="text-primary">View on Google map</a>
                    </div>
                </div>
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->

    <div class="container-fluid mt-100 mt-60">
        <div class="row">
            <div class="col-12 p-0">
                <div class="card map border-0">
                    <div class="card-body p-0">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d39206.002432144705!2d-95.4973981212445!3d29.709510002925988!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8640c16de81f3ca5%3A0xf43e0b60ae539ac9!2sGerald+D.+Hines+Waterwall+Park!5e0!3m2!1sen!2sin!4v1566305861440!5m2!1sen!2sin" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->
</section>
@endsection