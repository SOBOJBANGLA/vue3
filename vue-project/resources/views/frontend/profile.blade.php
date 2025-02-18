@extends('frontend.layouts.app')

@section('title','Profile')

@section('content')
<section class="section">
    <div class="container">
        <div class="row">
            
            <div class="col-12">
                <div class="position-relative">
                    <div class="candidate-cover">
                        <img src="{{asset ('images/hero/bg5.jpg')}}" class="img-fluid rounded shadow" alt="">
                    </div>
                    <div class="candidate-profile d-flex align-items-end justify-content-between mx-2">
                        <div class="d-flex align-items-end">
                            @php 
                                $candidateDetail = Auth::guard()->user()->candidateDetails->first();
                                @endphp
                                @if ($candidateDetail)
                            <img src="{{ asset($candidateDetail->image) }}" class="rounded-pill shadow border border-3 avatar avatar-medium" alt="">
                            @else
                            <img src="{{ asset('images/nophoto.jpg') }}" class="rounded-pill shadow border border-3 avatar avatar-medium" alt="">
                            @endif
                            <div class="ms-2">
                                <h5 class="mb-0">{{Auth()->guard()->user()->name}}</h5>
                                <p class="text-muted mb-0">Web Designer</p>
                            </div>
                        </div>
                        @foreach(Auth::guard()->user()->candidateDetails as $detail)
                        <a href="{{ route('editProfile', $detail->user_id) }}" class="btn btn-sm btn-icon btn-pills btn-soft-primary"> <i data-feather="settings" class="icons"></i> </a>
                        @endforeach
                        {{-- <a href="{{ route('editProfile') }}" class="btn btn-sm btn-icon btn-pills btn-soft-primary"><i data-feather="settings" class="icons"></i></a> --}}
                        {{-- <a href="{{route('employeer.edit',$item->id)}}" class="btn btn-info">Edit</a> --}}
                    </div>
                </div>
            </div><!--end col-->
           
        </div><!--end row-->
    </div><!--end container-->

    <div class="container mt-4">
        <div class="row g-4">
            @foreach ($candidate as $item)
            <div class="col-lg-8 col-md-7 col-12">
                <h5 class="mb-4">Introduction:</h5>

                <p class="text-muted">{{$item->about}}</p>
               

                <h5 class="mt-4">Skills:</h5>

                <div class="row">
                    <div class="col-lg-6 col-12">
                        <div class="progress-box mt-4">
                            <h6 class="font-weight-normal">HTML</h6>
                            <div class="progress">
                                <div class="progress-bar position-relative bg-primary" style="width:84%;">
                                    <div class="progress-value d-block text-dark h6">84%</div>
                                </div>
                            </div>
                        </div><!--end process box-->
                        <div class="progress-box mt-4">
                            <h6 class="font-weight-normal">CSS</h6>
                            <div class="progress">
                                <div class="progress-bar position-relative bg-primary" style="width:75%;">
                                    <div class="progress-value d-block text-dark h6">75%</div>
                                </div>
                            </div>
                        </div><!--end process box-->
                        <div class="progress-box mt-4">
                            <h6 class="font-weight-normal">JQuery</h6>
                            <div class="progress">
                                <div class="progress-bar position-relative bg-primary" style="width:79%;">
                                    <div class="progress-value d-block text-dark h6">79%</div>
                                </div>
                            </div>
                        </div><!--end process box-->
                    </div><!--end col-->

                    <div class="col-lg-6 col-12">
                        <div class="progress-box mt-4">
                            <h6 class="font-weight-normal">WordPress</h6>
                            <div class="progress">
                                <div class="progress-bar position-relative bg-primary" style="width:79%;">
                                    <div class="progress-value d-block text-dark h6">79%</div>
                                </div>
                            </div>
                        </div><!--end process box-->
                        <div class="progress-box mt-4">
                            <h6 class="font-weight-normal">Figma</h6>
                            <div class="progress">
                                <div class="progress-bar position-relative bg-primary" style="width:85%;">
                                    <div class="progress-value d-block text-dark h6">85%</div>
                                </div>
                            </div>
                        </div><!--end process box-->
                        <div class="progress-box mt-4">
                            <h6 class="font-weight-normal">Illustration</h6>
                            <div class="progress">
                                <div class="progress-bar position-relative bg-primary" style="width:65%;">
                                    <div class="progress-value d-block text-dark h6">65%</div>
                                </div>
                            </div>
                        </div><!--end process box-->
                
                 </div>
                <!--end col-->
                </div><!--end row-->

                <h5 class="mt-4">Experience:</h5>

                <div class="row">
                    <div class="col-12 mt-4">
                        <div class="d-flex">
                            <div class="text-center">
                                <img src="{{asset ('images/company/linkedin.png')}}" class="avatar avatar-small bg-white shadow p-2 rounded" alt="">
                                <h6 class="text-muted mt-2 mb-0">2019-22</h6>
                            </div>

                            <div class="ms-3">
                                <h6 class="mb-0">Full Stack Developer</h6>
                                <p class="text-muted">Linkedin - U.S.A.</p>
                                <p class="text-muted mb-0">It seems that only fragments of the original text remain in the Lorem Ipsum texts used today. One may speculate that over the course of time certain letters were added or deleted at various positions within the text.</p>
                            </div>
                        </div>
                    </div><!--end col-->
                    
                    <div class="col-12 mt-4">
                        <div class="d-flex">
                            <div class="text-center">
                                <img src="{{asset ('images/company/lenovo-logo.png')}}" class="avatar avatar-small bg-white shadow p-2 rounded" alt="">
                                <h6 class="text-muted mt-2 mb-0">2017-19</h6>
                            </div>

                            <div class="ms-3">
                                <h6 class="mb-0">Back-end Developer</h6>
                                <p class="text-muted">Lenovo - China</p>
                                <p class="text-muted mb-0">It seems that only fragments of the original text remain in the Lorem Ipsum texts used today. One may speculate that over the course of time certain letters were added or deleted at various positions within the text.</p>
                            </div>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->

                <div class="p-4 rounded shadow mt-4">
                    <h5>Get in touch !</h5>
                    <form class="mt-4" method="post" name="myForm" onsubmit="return validateForm()">
                        <p class="mb-0" id="error-msg"></p>
                        <div id="simple-msg"></div>
                        <div class="row">
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
                                    <textarea name="comments" id="comments" rows="4" class="form-control" placeholder="Message :"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="d-grid">
                                    <button type="submit" id="submit" name="send" class="btn btn-primary">Send Message</button>
                                </div>
                            </div><!--end col-->
                        </div><!--end row-->
                    </form>
                </div>
            </div><!--end col-->
            
            <div class="col-lg-4 col-md-5 col-12">
                <div class="card bg-light p-4 rounded shadow sticky-bar">
                    <h5 class="mb-0">Personal Detail:</h5>
                    <div class="mt-3">
                        <div class="d-flex align-items-center justify-content-between mt-3">
                            <span class="d-inline-flex align-items-center text-muted fw-medium"><i data-feather="user" class="fea icon-sm me-2"></i> Name:</span>
                            <span class="fw-medium">{{$item->f_name}} {{$item->l_name}}</span>
                        </div>

                        <div class="d-flex align-items-center justify-content-between mt-3">
                            <span class="d-inline-flex align-items-center text-muted fw-medium"><i data-feather="mail" class="fea icon-sm me-2"></i> Email:</span>
                            <span class="fw-medium">{{Auth()->guard()->user()->email}}</span>
                        </div>

                        <div class="d-flex align-items-center justify-content-between mt-3">
                            <span class="d-inline-flex align-items-center text-muted fw-medium"><i data-feather="gift" class="fea icon-sm me-2"></i> D.O.B.:</span>
                            <span class="fw-medium">31st Dec, 1996</span>
                        </div>

                        <div class="d-flex align-items-center justify-content-between mt-3">
                            <span class="d-inline-flex align-items-center text-muted fw-medium"><i data-feather="home" class="fea icon-sm me-2"></i> Address:</span>
                            <span class="fw-medium">{{$item->address }}</span>
                        </div>

                        {{-- <div class="d-flex align-items-center justify-content-between mt-3">
                            <span class="d-inline-flex align-items-center text-muted fw-medium"><i data-feather="map-pin" class="fea icon-sm me-2"></i> City:</span>
                            <span class="fw-medium">London</span>
                        </div>

                        <div class="d-flex align-items-center justify-content-between mt-3">
                            <span class="d-inline-flex align-items-center text-muted fw-medium"><i data-feather="globe" class="fea icon-sm me-2"></i> Country:</span>
                            <span class="fw-medium">UK</span>
                        </div> --}}

                        <div class="d-flex align-items-center justify-content-between mt-3">
                            <span class="d-inline-flex align-items-center text-muted fw-medium"><i data-feather="phone" class="fea icon-sm me-2"></i> Mobile:</span>
                            <span class="fw-medium">{{$item->phone }}</span>
                        </div>

                        <div class="d-flex align-items-center justify-content-between mt-3">
                            <span class="text-muted fw-medium">Social:</span>
                            
                            <ul class="list-unstyled social-icon text-sm-end mb-0">
                                <li class="list-inline-item"><a href="https://dribbble.com/shreethemes" target="_blank" class="rounded"><i data-feather="dribbble" class="fea icon-sm align-middle" title="dribbble"></i></a></li>
                                <li class="list-inline-item"><a href="http://linkedin.com/company/shreethemes" target="_blank" class="rounded"><i data-feather="linkedin" class="fea icon-sm align-middle" title="Linkedin"></i></a></li>
                                <li class="list-inline-item"><a href="https://www.facebook.com/shreethemes" target="_blank" class="rounded"><i data-feather="facebook" class="fea icon-sm align-middle" title="facebook"></i></a></li>
                                <li class="list-inline-item"><a href="https://www.instagram.com/shreethemes/" target="_blank" class="rounded"><i data-feather="instagram" class="fea icon-sm align-middle" title="instagram"></i></a></li>
                                <li class="list-inline-item"><a href="https://twitter.com/shreethemes" target="_blank" class="rounded"><i data-feather="twitter" class="fea icon-sm align-middle" title="twitter"></i></a></li>
                            </ul><!--end icon-->
                        </div>

                        <div class="p-3 rounded shadow bg-white mt-2">
                            <div class="d-flex align-items-center mb-2">
                                <i data-feather="file-text" class="fea icon-md"></i>
                                <h6 class="mb-0 ms-2">my-resume.pdf</h6>
                            </div>

                            <a href="{{ asset($item->bio) }}" class="btn btn-primary w-100" download><i data-feather="download" class="fea icon-sm me-1"></i> Download CV</a>
                        </div>
                    </div>
                </div>
            </div><!--end col-->
            @endforeach
        </div><!--end row-->
    </div><!--end container-->

    <div class="container mt-100 mt-60">
        <div class="row justify-content-center mb-4 pb-2">
            <div class="col-12">
                <div class="section-title text-center">
                    <h4 class="title mb-3">Related Candidates</h4>
                    <p class="text-muted para-desc mx-auto mb-0">Search all the open positions on the web. Get your own personalized salary estimate. Read reviews on over 30000+ companies worldwide.</p>
                </div>
            </div><!--end col-->
        </div><!--end row-->

        <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-6 col-12 mt-4 pt-2">
                <div class="candidate-card position-relative overflow-hidden text-center shadow rounded p-4">
                    <div class="content">
                        <img src="{{asset ('images/team/02.jpg')}}" class="avatar avatar-md-md rounded-pill shadow-md" alt="">

                        <div class="mt-3">
                            <a href="candidate-profile.html" class="title h5 text-dark">Tiffany Betancourt</a>
                            <p class="text-muted mt-1">Application Developer</p>

                            <span class="badge bg-soft-primary rounded-pill">Design</span>
                            <span class="badge bg-soft-primary rounded-pill">UI</span>
                            <span class="badge bg-soft-primary rounded-pill">UX</span>
                            <span class="badge bg-soft-primary rounded-pill">Digital</span>
                        </div>

                        <div class="mt-2 d-flex align-items-center justify-content-between">
                            <div class="text-center">
                                <p class="text-muted fw-medium mb-0">Salary:</p>
                                <p class="mb-0 fw-medium">$5k - $6k</p>
                            </div>

                            <div class="text-center">
                                <p class="text-muted fw-medium mb-0">Experience:</p>
                                <p class="mb-0 fw-medium">2 Years</p>
                            </div>
                        </div>
                        
                        <div class="mt-3">
                            <a href="candidate-profile.html" class="btn btn-sm btn-primary me-1">View Profile</a>
                            <a href="contactus.html" class="btn btn-sm btn-icon btn-soft-primary"><i data-feather="message-circle" class="icons"></i></a>
                        </div>

                        <a href="javascript:void(0)" class="like"><i class="mdi mdi-heart align-middle fs-4"></i></a>
                    </div>
                </div>
            </div><!--end col-->

            <div class="col-lg-3 col-md-4 col-sm-6 col-12 mt-4 pt-2">
                <div class="candidate-card position-relative overflow-hidden text-center shadow rounded p-4">
                    <div class="content">
                        <img src="{{asset ('images/team/03.jpg')}}" class="avatar avatar-md-md rounded-pill shadow-md" alt="">

                        <div class="mt-3">
                            <a href="candidate-profile.html" class="title h5 text-dark">Jacqueline Burns</a>
                            <p class="text-muted mt-1">Senior Product Designer</p>

                            <span class="badge bg-soft-primary rounded-pill">Design</span>
                            <span class="badge bg-soft-primary rounded-pill">UI</span>
                            <span class="badge bg-soft-primary rounded-pill">UX</span>
                            <span class="badge bg-soft-primary rounded-pill">Digital</span>
                        </div>

                        <div class="mt-2 d-flex align-items-center justify-content-between">
                            <div class="text-center">
                                <p class="text-muted fw-medium mb-0">Salary:</p>
                                <p class="mb-0 fw-medium">$5k - $6k</p>
                            </div>

                            <div class="text-center">
                                <p class="text-muted fw-medium mb-0">Experience:</p>
                                <p class="mb-0 fw-medium">2 Years</p>
                            </div>
                        </div>
                        
                        <div class="mt-3">
                            <a href="candidate-profile.html" class="btn btn-sm btn-primary me-1">View Profile</a>
                            <a href="contactus.html" class="btn btn-sm btn-icon btn-soft-primary"><i data-feather="message-circle" class="icons"></i></a>
                        </div>

                        <a href="javascript:void(0)" class="like"><i class="mdi mdi-heart align-middle fs-4"></i></a>
                    </div>
                </div>
            </div><!--end col-->

            <div class="col-lg-3 col-md-4 col-sm-6 col-12 mt-4 pt-2">
                <div class="candidate-card position-relative overflow-hidden text-center shadow rounded p-4">
                    <div class="ribbon ribbon-left overflow-hidden"><span class="text-center d-block bg-warning shadow small h6"><i class="mdi mdi-star"></i></span></div>
                    <div class="content">
                        <img src="{{asset ('images/team/04.jpg')}}" class="avatar avatar-md-md rounded-pill shadow-md" alt="">

                        <div class="mt-3">
                            <a href="candidate-profile.html" class="title h5 text-dark">Mari Harrington</a>
                            <p class="text-muted mt-1">C++ Developer</p>

                            <span class="badge bg-soft-primary rounded-pill">Design</span>
                            <span class="badge bg-soft-primary rounded-pill">UI</span>
                            <span class="badge bg-soft-primary rounded-pill">UX</span>
                            <span class="badge bg-soft-primary rounded-pill">Digital</span>
                        </div>

                        <div class="mt-2 d-flex align-items-center justify-content-between">
                            <div class="text-center">
                                <p class="text-muted fw-medium mb-0">Salary:</p>
                                <p class="mb-0 fw-medium">$5k - $6k</p>
                            </div>

                            <div class="text-center">
                                <p class="text-muted fw-medium mb-0">Experience:</p>
                                <p class="mb-0 fw-medium">2 Years</p>
                            </div>
                        </div>
                        
                        <div class="mt-3">
                            <a href="candidate-profile.html" class="btn btn-sm btn-primary me-1">View Profile</a>
                            <a href="contactus.html" class="btn btn-sm btn-icon btn-soft-primary"><i data-feather="message-circle" class="icons"></i></a>
                        </div>

                        <a href="javascript:void(0)" class="like"><i class="mdi mdi-heart align-middle fs-4"></i></a>
                    </div>
                </div>
            </div><!--end col-->

            <div class="col-lg-3 col-md-4 col-sm-6 col-12 mt-4 pt-2">
                <div class="candidate-card position-relative overflow-hidden text-center shadow rounded p-4">
                    <div class="content">
                        <img src="{{asset ('images/team/05.jpg')}}" class="avatar avatar-md-md rounded-pill shadow-md" alt="">

                        <div class="mt-3">
                            <a href="candidate-profile.html" class="title h5 text-dark">Floyd Glasgow</a>
                            <p class="text-muted mt-1">Php Developer</p>

                            <span class="badge bg-soft-primary rounded-pill">Design</span>
                            <span class="badge bg-soft-primary rounded-pill">UI</span>
                            <span class="badge bg-soft-primary rounded-pill">UX</span>
                            <span class="badge bg-soft-primary rounded-pill">Digital</span>
                        </div>

                        <div class="mt-2 d-flex align-items-center justify-content-between">
                            <div class="text-center">
                                <p class="text-muted fw-medium mb-0">Salary:</p>
                                <p class="mb-0 fw-medium">$5k - $6k</p>
                            </div>

                            <div class="text-center">
                                <p class="text-muted fw-medium mb-0">Experience:</p>
                                <p class="mb-0 fw-medium">2 Years</p>
                            </div>
                        </div>
                        
                        <div class="mt-3">
                            <a href="candidate-profile.html" class="btn btn-sm btn-primary me-1">View Profile</a>
                            <a href="contactus.html" class="btn btn-sm btn-icon btn-soft-primary"><i data-feather="message-circle" class="icons"></i></a>
                        </div>

                        <a href="javascript:void(0)" class="like"><i class="mdi mdi-heart align-middle fs-4"></i></a>
                    </div>
                </div>
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->
</section>
@endsection