<template>
    <Header />
   
    <!-- Start -->
    <section class="bg-half d-table w-100 bg-light">
            <div class="container">
                <div class="row g-4">
                    <div class="col-lg-8 col-md-6 col-12">

                        <div class="d-lg-flex align-items-center p-4 rounded shadow bg-white mb-4">
                         
                            <div class="ms-lg-3 mt-3 mt-lg-0">
                                <h4>{{ job.title }}</h4>

                                <ul class="list-unstyled mb-0">
                                    <li class="d-inline-flex align-items-center text-muted me-2"><i data-feather="layout" class="fea icon-sm text-primary me-1"></i>{{CompanyName(job.company_id)}}</li>
                                    <li class="d-inline-flex align-items-center text-muted"> {{LocationName(job.location_id)}}</li>
                                </ul>
                            </div>
                        </div>

                        <h5>Job Description: </h5>
                        <p class="text-muted">{{job.description}}</p>
                       
                        
                        <h5 class="mt-4">Responsibilities and Duties: </h5>
                        <p class="text-muted">{{job.responsibility}}</p>
                       

                        <h5 class="mt-4">Required Experience, Skills and Qualifications: </h5>
                        <p class="text-muted">{{job.qualifications}}</p>

                        <div v-if="user" class="mt-4">
                            <!-- <a href="job-apply.html" class="btn btn-outline-primary">Apply Now <i class="mdi mdi-send"></i></a> -->
                            <button v-if="application" type="button" class="btn btn-warning">Already Applied</button>
                             <Link v-else :href="route('applicant.create', job.id)" class="btn btn-outline-primary"> Apply Now <i class="mdi mdi-send"></i> </Link>
                             <!-- <button v-else type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#myModal">Apply Now</button>
                             <Modal></Modal> -->
                        </div>

                        <div v-else>
                        <Link :href="route('candidate_login_form')" class="btn btn-info">Login First</Link>
                         </div>
                       
                    </div><!--end col-->

                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="card bg-white rounded shadow sticky-bar">
                            <div class="p-4">
                                <h5 class="mb-0">Job Information</h5>
                            </div>

                            <div class="card-body p-4 border-top">
                                <div class="d-flex widget align-items-center">
                                    <i data-feather="layout" class="fea icon-ex-md me-3"></i>
                                    <div class="flex-1">
                                        <h6 class="widget-title mb-0">Company Name:</h6>
                                        <small class="text-primary mb-0">{{CompanyName(job.company_id)}}</small>
                                    </div>
                                </div>

                                <div class="d-flex widget align-items-center mt-3">
                                    <i data-feather="user-check" class="fea icon-ex-md me-3"></i>
                                    <div class="flex-1">
                                        <h6 class="widget-title mb-0">Employee Type:</h6>
                                        <small class="text-primary mb-0">{{JobtypeName(job.jobtype_id)}}</small>
                                    </div>
                                </div>

                                <div class="d-flex widget align-items-center mt-3">
                                    <i data-feather="map-pin" class="fea icon-ex-md me-3"></i>
                                    <div class="flex-1">
                                        <h6 class="widget-title mb-0">Location:</h6>
                                        <small class="text-primary mb-0">{{LocationName(job.location_id)}}</small>
                                    </div>
                                </div>

    

                                <div class="d-flex widget align-items-center mt-3">
                                    <i data-feather="briefcase" class="fea icon-ex-md me-3"></i>
                                    <div class="flex-1">
                                        <h6 class="widget-title mb-0">Experience:</h6>
                                        <small class="text-primary mb-0">{{job.experience}}</small>
                                    </div>
                                </div>

                                <div class="d-flex widget align-items-center mt-3">
                                    <i data-feather="book" class="fea icon-ex-md me-3"></i>
                                    <div class="flex-1">
                                        <h6 class="widget-title mb-0">Qualifications:</h6>
                                        <small class="text-primary mb-0">{{job.keywords}}</small>
                                    </div>
                                </div>

                                <div class="d-flex widget align-items-center mt-3">
                                    <i data-feather="dollar-sign" class="fea icon-ex-md me-3"></i>
                                    <div class="flex-1">
                                        <h6 class="widget-title mb-0">Salary:</h6>
                                        <small class="text-primary mb-0">{{job.salary}}</small>
                                    </div>
                                </div>

                                <div class="d-flex widget align-items-center mt-3">
                                    <i data-feather="clock" class="fea icon-ex-md me-3"></i>
                                    <div class="flex-1">
                                        <h6 class="widget-title mb-0">Job End Date:</h6>
                                        <small class="text-primary mb-0 mb-0">{{job.job_end_date}}</small>
                                    </div>
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
import Modal from '../Components/Modal.vue'
import { computed, ref } from 'vue';

const{ job,locations,categories,jobtypes,companies,application,user} = usePage().props

const JobtypeName = (id) => {
    const jobtype = jobtypes.find(type => type.id === id);
    return jobtype ? jobtype.jobtype_name : 'Unknown Jobtype';
};

const CompanyName = (id) => {
        const company = companies.find(com => com.id === id);
        return company ? company.name : 'Unknown Company';
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