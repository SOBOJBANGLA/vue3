<template>
    <Header/>
    <section class="bg-home d-flex align-items-center" :style="backgroundStyle">
            <div class="bg-overlay bg-linear-gradient-2"></div>
            <div class="container">
                <div class="row"  style="height: 80%">
                    <div class="col-lg-4 col-md-5 col-12">
                        <div class="p-4 bg-white rounded shadow-md mx-auto w-100" style="max-width: 400px;">
                            
                                <a href="index.html"><img src="images/logo-dark.png" class="mb-4 d-block mx-auto" alt=""></a>
                                <h6 class="mb-3 text-uppercase fw-semibold">Register your account</h6>

                                <form @submit.prevent="submit">
                                   
                                <div class="mb-3">
                                    <label class="form-label fw-semibold">Your Name</label>
                                    <input v-model="form.name" id="name" type="text" class="form-control" placeholder="Calvin Carlo">
                                    
                                </div>
        
                                <div class="mb-3">
                                    <label class="form-label fw-semibold">Your Email</label>
                                    <input v-model="form.email" id="email" type="email" class="form-control" placeholder="example@website.com">
                                
                                </div>
        
                                <div class="mb-3">
                                    <label class="form-label fw-semibold" for="loginpass">Password</label>
                                    <input type="password" v-model="form.password" id="password" class="form-control"  placeholder="Password">
                                  
                                </div>
        
                                <div class="mb-3">
                                    <label class="form-label fw-semibold" for="loginpass">Confirm Password</label>
                                    <input type="password" v-model="form.password_confirmation" id="password_confirmation" class="form-control"  placeholder="Password">
                                   
                                </div>
                            
                                
                                <button class="btn btn-primary w-100" type="submit">Register</button>
                            </form>
                                <div class="col-12 text-center mt-3">
                                    <span><span class="text-muted small me-2">Already have an account ? </span> <Link :href="route('candidate_login_form')" class="text-dark fw-semibold small">Sign in</Link></span>
                                </div><!--end col-->
                            
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
    name: "",
    email: "",
    password: "",
    password_confirmation: "",
});

const submit = () => {
    form.post(route("candidate_register"));
};
const backgroundStyle = { 
        backgroundImage: `url("images/hero/bg4.jpg")`,
         backgroundPosition: 'center', 
        backgroundSize: 'cover',  
        };
     </script>

<style scoped>

</style>