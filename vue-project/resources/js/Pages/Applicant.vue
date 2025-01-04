<template>
    <Header/>
    
<!-- Hero End -->

<!-- Start -->
<section class="section bg-light">
        <div v-if="successMessage" class="alert alert-success mt-3">{{ successMessage }}</div>
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-7 col-md-7">
              <div class="card border-0">
                <form
                  class="rounded shadow p-4"
                  @submit.prevent="handleSubmit"
                  method="post"
                  enctype="multipart/form-data"
                >
                  <div v-if="job && candidate">
                    <input type="hidden" name="job_id" :value="job.id" />
                    <input type="hidden" name="employeer_id" :value="job.employeer_id" />
                    <input type="hidden" name="candidate_id" :value="candidate.id" />
                  </div>
  
                  <div class="row">
                    <div class="col-12">
                      <div class="mb-3">
                        <label class="form-label fw-semibold">Your Name: <span class="text-danger">*</span></label>
                        <input
                          name="name"
                          id="name2"
                          type="text"
                          class="form-control"
                          v-model="form.name"
                          placeholder="Your Name:"
                        />
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="mb-3">
                        <label class="form-label fw-semibold">Your Email: <span class="text-danger">*</span></label>
                        <input
                          name="email"
                          id="email2"
                          type="text"
                          class="form-control"
                          v-model="form.email"
                          placeholder="Your Email:"
                        />
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="mb-3">
                        <label class="form-label fw-semibold">Your Phone no.: <span class="text-danger">*</span></label>
                        <input
                          name="contact"
                          id="number2"
                          type="text"
                          class="form-control"
                          v-model="form.contact"
                          placeholder="Your phone no.:"
                        />
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="mb-3">
                        <label class="form-label fw-semibold" for="formFile">Upload Your Cv / Resume:</label>
                        <input
                          class="form-control"
                          name="pdf"
                          type="file"
                          id="formFile"
                          @change="onFileChange"
                        />
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="mb-3">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" id="flexCheckDefault" />
                          <label class="form-check-label" for="flexCheckDefault">
                            I Accept <a href="#" class="text-primary">Terms And Condition</a>
                          </label>
                        </div>
                      </div>
                    </div>
                  </div>
  
                  <div class="row">
                    <div class="col-12">
                      <button v-if="application" type="button" class="btn btn-danger mr-15">Already Applied</button>
                      <input v-else type="submit" id="submit2" name="send" class="submitBnt btn btn-primary" value="Apply Now" />
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </section>
<Footer/>
</template>

<script setup>
import Header from '@/Components/Header.vue';

import Footer from '@/Components/Footer.vue';

import { ref } from 'vue';
import { useForm, usePage } from '@inertiajs/vue3';

const { job, candidate, application } = usePage().props;
  const form = useForm({
    name: candidate ? candidate.name : '',
    email: candidate ? candidate.email : '',
    contact: '',
    pdf: null,
    candidate_id: candidate ? candidate.id : '',
    job_id: job ? job.id : '',
    employeer_id: job ? job.employeer_id : ''
  });
  
  const successMessage = ref('');
  
  const handleSubmit = (e) => {
    e.preventDefault();
    console.log('Form Data:', form);
  
    form.post(route('apply.job', job.id), {
      onSuccess: () => {
        console.log('Form submission successful');
        successMessage.value = 'Successfully Applied';
      },
      onError: (errors) => {
        console.error('Form submission failed', errors);
      }
    });
  };
  
  const onFileChange = (e) => {
    form.pdf = e.target.files[0];
  };

     </script>

<style scoped>

</style>