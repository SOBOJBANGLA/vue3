<template>
   <section class="bg-half-260 d-table w-100" style="background: url('images/hero/bg.jpg');" >
  <div class="bg-overlay bg-primary-gradient-overlay"></div>
  <div class="container">
      <div class="row mt-5 justify-content-center">
          <div class="col-lg-10">
              <div class="title-heading text-center">
                  <h1 class="heading text-white fw-bold">Find & Hire Experts <br> for any Job</h1>
                  <p class="para-desc text-white-50 mx-auto mb-0">Find Jobs, Employment & Career Opportunities. Some of the companies we've helped recruit excellent applicants over the years.</p>
              
                  <div class="d-md-flex justify-content-between align-items-center bg-white shadow rounded p-2 mt-4">
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

                  <div class="mt-2">
                      <span class="text-white-50"><span class="text-white">Popular Searches :</span> Designer, Developer, Web, IOS, PHP Senior Engineer</span>
                  </div>
              </div>
          </div><!--end col-->
      </div><!--end row-->
  </div><!--end container-->
</section><!--end section-->
<div class="position-relative">
  <div class="shape overflow-hidden text-white">
      <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
      </svg>
  </div>
</div>
</template>

<script>
    export default {
        
    }
</script>

<style lang="scss" scoped>

</style>