<template>
    <Header/>
    <section class="bg-home d-flex align-items-center" :style="backgroundStyle">
            <div class="bg-overlay bg-linear-gradient-2"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-5 col-12">
                        <div class="p-4 bg-white rounded shadow-md mx-auto w-100" style="max-width: 400px;">
                            <form @submit.prevent="submit">
                          
                                <a href="index.html"><img src="images/logo-dark.png" class="mb-4 d-block mx-auto" alt=""></a>
                                <h6 class="mb-3 text-uppercase fw-semibold">Please sign in</h6>
                            
                                <div class="mb-3">
                                    <label class="form-label fw-semibold">Your Email</label>
                                    <input name="email" v-model="form.email" type="email" class="form-control" placeholder="example@website.com">
                                  
                                </div>

                                <div class="mb-3">
                                    <label class="form-label fw-semibold" for="loginpass">Password</label>
                                    <input type="password" name="password" v-model="form.password" class="form-control" placeholder="Password">
                                   
                                </div>
                            
                                <div class="d-flex justify-content-between">
                                    <div class="mb-3">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                            <label class="form-label form-check-label text-muted" for="flexCheckDefault">Remember me</label>
                                        </div>
                                    </div>
                                    
                                    <span class="forgot-pass text-muted small mb-0"><a href="reset-password.html" class="text-muted">Forgot password ?</a></span>
                                </div>
                
                                <button class="btn btn-primary w-100" type="submit">Sign in</button>

                                <div class="col-12 text-center mt-3">
                                    <span><span class="text-muted me-2 small">Don't have an account ?</span> <Link :href="route('candidate_register')" class="text-dark fw-semibold small">Sign Up</Link></span>
                                </div><!--end col-->
                            </form>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
        </section>
<Footer/>
</template>

<script setup>
import Header from '@/Components/Header.vue';
import Footer from '@/Components/Footer.vue';

import { Link, useForm, usePage } from '@inertiajs/vue3';
const form = useForm({
    email: "",
    password: "",
});

const submit = () => {
    form.post(route("authenticate"));
};

const backgroundStyle = { 
        backgroundImage: `url("images/hero/bg4.jpg")`,
         backgroundPosition: 'center', 
        backgroundSize: 'cover',  
        };
     </script>

<style scoped>

</style>