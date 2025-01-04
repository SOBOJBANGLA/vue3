<template>
    <div>
      <Header />
      <section class="bg-half-170 d-table w-100" :style="{ backgroundImage: 'url(images/hero/bg2.jpg)' }">
        <div class="bg-overlay bg-gradient-overlay"></div>
        <div class="container">
          <div class="row mt-5 justify-content-center">
            <div class="col-12">
              <div class="title-heading text-center">
                <p class="text-white-50 para-desc mx-auto mb-0">Get in touch !</p>
                <h5 class="heading fw-semibold mb-0 sub-heading text-white title-dark">Application Success</h5>
              </div>
            </div>
          </div>
          <div class="position-middle-bottom">
            <nav aria-label="breadcrumb" class="d-block">
              <ul class="breadcrumb breadcrumb-muted mb-0 p-0">
                <li class="breadcrumb-item"><a href="index.html">Jobnova</a></li>
                <li class="breadcrumb-item active" aria-current="page">Success</li>
              </ul>
            </nav>
          </div>
        </div>
      </section>
      <div class="position-relative">
        <div class="shape overflow-hidden text-white">
          <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor" />
          </svg>
        </div>
      </div>
      <section class="section bg-light">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-7 col-md-7">
              <div class="card border-0">
                <div class="alert alert-success mt-5" style="text-align:center">
                  {{ props.msg }}
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <Footer />
    </div>
  </template>
  
  <script setup>
  import Header from '@/Components/Header.vue';
  import Footer from '@/Components/Footer.vue';
  import { usePage } from '@inertiajs/vue3';
  
  // Accessing the Inertia page props
  const props = usePage().props;
  </script>
  
  <style scoped>
  /* Add your scoped styles here */
  </style>
  