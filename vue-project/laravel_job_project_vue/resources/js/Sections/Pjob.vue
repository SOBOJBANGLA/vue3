<template>
   <div class="container mt-100 mt-160">
      <div class="row justify-content-center mb-4 pb-2">
          <div class="col-12">
              <div class="section-title text-center">
                  <h4 class="title mb-3">Popular Job Listing</h4>
                  <p class="text-muted para-desc mx-auto mb-0">Search all the open positions on the web. Get your own personalized salary estimate. Read reviews on over 30000+ companies worldwide.</p>
              </div>
          </div><!--end col-->
      </div><!--end row-->

      <div class="row g-4 mt-0">
        
        <div v-for="joi in job" :key="joi.id" class="col-12">
                        <div class="job-post job-post-list rounded shadow p-4 d-md-flex align-items-center justify-content-between position-relative">
                            <div class="d-flex align-items-center w-310px">
                                <img src="images/company/circle-logo.png" class="avatar avatar-small rounded shadow p-3 bg-white" alt="">

                                <div class="ms-3">
                                    <a href="job-detail-one.html" class="h5 title text-dark">{{joi.title}}</a>
                                </div>
                            </div>

                            <div class="d-flex align-items-center justify-content-between d-md-block mt-3 mt-md-0 w-100px">
                                <span class="badge bg-soft-primary rounded-pill">{{JobtypeName(joi.jobtype_id)}}</span>
                                <span className="text-muted d-flex align-items-center fw-medium mt-md-2">{{CategoryName(joi.category_id)}}</span>
                            </div>

                            <div class="d-flex align-items-center justify-content-between d-md-block mt-2 mt-md-0 w-130px">
                                <span className="text-muted d-flex align-items-center"><i data-feather="map-pin" className="fea icon-sm me-1 align-middle"></i>{{LocationName(joi.location_id)}}</span>
                                <span className="d-flex fw-medium mt-md-2">{{joi.salary}} TK/ Month</span>
                            </div>

                            <div class="mt-3 mt-md-0">
                                <a href="" class="btn btn-sm btn-icon btn-pills btn-soft-primary bookmark"><i data-feather="bookmark" class="icons"></i></a>
                                <a href="job-detail-one.html" class="btn btn-sm btn-primary w-full ms-md-1">Apply Now</a>
                            </div>
                        </div>
                    </div><!--end col-->
          
          <!--end col-->

          <div class="col-12">
              <div class="text-center">
                  <a href="job-list-one.html" class="btn btn-link primary text-muted">See More Jobs <i class="mdi mdi-arrow-right"></i></a>
              </div>
          </div><!--end col-->
      </div><!--end row-->
  </div>
</template>

<script setup>
  import { Link, usePage } from '@inertiajs/vue3';
import { computed, ref } from 'vue';

const{ job,locations,categories,jobtypes} = usePage().props

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

<style lang="scss" scoped>

</style>