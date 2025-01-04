<template>
    <Header />
    <section class="bg-half-170 d-table w-100" style="background: url('images/hero/bg2.jpg');">
        <div class="bg-overlay bg-gradient-overlay"></div>
        <div class="container">
            <div class="row mt-5 justify-content-center">
                <div class="col-12">
                    <div class="title-heading text-center">
                        <h5 class="heading fw-semibold mb-0 sub-heading text-white title-dark">Job Lists</h5>
                    </div>
                </div>
            </div>


            <div class="position-middle-bottom">
                <nav aria-label="breadcrumb" class="d-block">
                    <ul class="breadcrumb breadcrumb-muted mb-0 p-0">
                        <li class="breadcrumb-item"><a href="index.html">Jobnova</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Jobs</li>
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
                <div class="row justify-content-center">
                    <div class="col-12 mt-4">
                        <div class="features-absolute">
                            <div class="d-md-flex justify-content-between align-items-center bg-white shadow rounded p-4">
                                <form class="card-body text-start">
                                    <div class="registration-form text-dark text-start">
                                        <div class="row g-lg-0">
                                            <div class="col-lg-3 col-md-6 col-12">
                                                <div class="mb-3 mb-sm-0">
                                                    <label class="form-label d-none fs-6">Search :</label>
                                                    <div class="filter-search-form position-relative filter-border">
                                                        <i data-feather="search" class="fea icon-20 icons"></i>
                                                        <input name="name" type="text" id="job-keyword" class="form-control filter-input-box bg-light border-0" placeholder="Search your keaywords">
                                                    </div>
                                                </div>
                                            </div><!--end col-->
                                            
                                            <div class="col-lg-3 col-md-6 col-12">
                                                <div class="mb-3 mb-sm-0">
                                                    <label class="form-label d-none fs-6">Location:</label>
                                                    <div class="filter-search-form position-relative filter-border">
                                                        <i data-feather="map-pin" class="fea icon-20 icons"></i>
                                                        <select class="form-select" data-trigger name="choices-location" id="choices-location" aria-label="Default select example">
                                                            <option value="AF">Afghanistan</option>
                                                            <option value="AZ">Azerbaijan</option>
                                                            <option value="BS">Bahamas</option>
                                                            <option value="BH">Bahrain</option>
                                                            <option value="CA">Canada</option>
                                                            <option value="CV">Cape Verde</option>
                                                            <option value="DK">Denmark</option>
                                                            <option value="DJ">Djibouti</option>
                                                            <option value="ER">Eritrea</option>
                                                            <option value="EE">Estonia</option>
                                                            <option value="GM">Gambia</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div><!--end col-->
    
                                            <div class="col-lg-3 col-md-6 col-12">
                                                <div class="mb-3 mb-sm-0">
                                                    <label class="form-label d-none fs-6">Type :</label>
                                                    <div class="filter-search-form relative filter-border">
                                                        <i data-feather="briefcase" class="fea icon-20 icons"></i>
                                                        <select class="form-select" data-trigger name="choices-type" id="choices-type" aria-label="Default select example">
                                                            <option selected="" value="1">Full Time</option>
                                                            <option value="2">Part Time</option>
                                                            <option value="3">Freelancer</option>
                                                            <option value="4">Remote Work</option>
                                                            <option value="5">Office Work</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div><!--end col-->
    
                                            <div class="col-lg-3 col-md-6 col-12">
                                                <input type="submit" id="search" name="search" style="height: 60px;" class="btn btn-primary searchbtn w-100" value="Search">
                                            </div><!--end col-->
                                        </div><!--end row-->
                                    </div>
                                </form><!--end form-->
                            </div>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div>

            <div class="container mt-120">
                <div class="row g-4">
                    <div v-for="job in jobs" :key="job.id" class="col-12">
                        <div class="job-post job-post-list rounded shadow p-4 d-md-flex align-items-center justify-content-between position-relative">
                            <div class="d-flex align-items-center w-310px">
                                <img src="images/company/circle-logo.png" class="avatar avatar-small rounded shadow p-3 bg-white" alt="">

                                <div class="ms-3">
                                    <a href="job-detail-one.html" class="h5 title text-dark">{{job.title}}</a>
                                </div>
                            </div>

                            <div class="d-flex align-items-center justify-content-between d-md-block mt-3 mt-md-0 w-100px">
                                <span class="badge bg-soft-primary rounded-pill">{{JobtypeName(job.jobtype_id)}}</span>
                                <span className="text-muted d-flex align-items-center fw-medium mt-md-2">{{CategoryName(job.category_id)}}</span>
                            </div>

                            <div class="d-flex align-items-center justify-content-between d-md-block mt-2 mt-md-0 w-130px">
                                <span className="text-muted d-flex align-items-center"><i data-feather="map-pin" className="fea icon-sm me-1 align-middle"></i>{{LocationName(job.location_id)}}</span>
                                <span className="d-flex fw-medium mt-md-2">{{job.salary}} TK/ Month</span>
                            </div>

                            <div class="mt-3 mt-md-0">
                                <a href="" class="btn btn-sm btn-icon btn-pills btn-soft-primary bookmark"><i data-feather="bookmark" class="icons"></i></a>
                                <Link :href="route('jobDetail', { id: job.id })" class="btn btn-sm btn-primary w-full ms-md-1">Apply Now</Link>
                            </div>
                        </div>
                    </div><!--end col-->

                   <!--end col-->
                </div><!--end row-->

                <div class="row">
                    <div class="col-12 mt-4 pt-2">
                        <ul class="pagination justify-content-center mb-0">
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Previous">
                                    <span aria-hidden="true"><i class="mdi mdi-chevron-left fs-6"></i></span>
                                </a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item active"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Next">
                                    <span aria-hidden="true"><i class="mdi mdi-chevron-right fs-6"></i></span>
                                </a>
                            </li>
                        </ul>
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
                </div><!--end row-->
            </div><!--end container-->
        </section>
    <Footer />
</template>

<script setup>
import Header from '@/Components/Header.vue';
import Footer from '@/Components/Footer.vue';
import { Link, usePage } from '@inertiajs/vue3';
import { computed, ref } from 'vue';

const{ jobs,locations,categories,jobtypes} = usePage().props

const JobtypeName = (id) => {
    const jobtype = jobtypes.find(type => type.id === id);
    return jobtype ? jobtype.jobtype_name : 'Unknown Jobtype';
};

const CategoryName = (id) => {
    const category = categories.find(cat => cat.id === id);
    return category ? category.category_name : 'Unknown Category';
};

const LocationName = (id) => {
    const location = locations.find(loc => loc.id === id);
    return location ? location.location_name : 'Unknown Location';
};

</script>

<style scoped></style>