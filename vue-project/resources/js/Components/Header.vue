<template>
	<header id="topnav" class="defaultscroll sticky">
        <div v-if="user" class="container">
        <a class="logo" href="/">
            <span class="logo-light-mode">
                <img src="images/logo-dark.png" class="l-dark" alt="">
                <img src="images/logo-light.png" class="l-light" alt="">
            </span>
            <img src="images/logo-light.png" class="logo-dark-mode" alt="">
        </a>
  
        <div class="menu-extras">
            <div class="menu-item">
                <a class="navbar-toggle" id="isToggle" onclick="toggleMenu()">
                    <div class="lines">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </a>
            </div>
        </div>
  
        <ul class="buy-button list-inline mb-0">
           
            <li class="list-inline-item ps-1 mb-0">
                <div class="dropdown dropdown-primary">
                    <button type="button" class="dropdown-toggle btn btn-sm btn-icon btn-pills btn-primary" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                       
                        <!-- <img src="{{ asset($candidateDetail->image) }}" class="img-fluid rounded-pill" alt=""> -->
                    
                        <img src="images/nophoto.jpg" class="img-fluid rounded-pill" alt="">
                      
                    </button>
                    <div class="dropdown-menu dd-menu dropdown-menu-end bg-white rounded shadow border-0 mt-3">
                        <a href="" class="dropdown-item fw-medium fs-6"><i data-feather="user" class="fea icon-sm me-2 align-middle"></i>Profile</a>
                        <a href="" class="dropdown-item fw-medium fs-6"><i data-feather="settings" class="fea icon-sm me-2 align-middle"></i>Settings</a>
                        <div class="dropdown-divider border-top"></div>
                         <a href="" class="dropdown-item fw-medium fs-6"><i data-feather="list" class="fea icon-sm me-2 align-middle"></i>My Jobs</a>

                         <Link :href="route('user_logout')" class="dropdown-item fw-medium fs-6"><i data-feather="log-out" class="fea icon-sm me-2 align-middle"></i>Logout</Link>
                    </div>
                </div>
            </li>
        </ul>
  
        <div id="navigation">
            <!-- Navigation Menu-->   
            <ul class="navigation-menu nav-right nav-light">
                <li class="has-submenu parent-menu-item">
                    <Link href="/">Home</Link>
                    
                </li>
  
                <li class="has-submenu parent-parent-menu-item">
                    <Link :href="route('jobs')">Jobs</Link>
                      
                </li>
        
                <li class="has-submenu parent-menu-item">
					<Link :href="route('about')">About</Link>
                   
                    
                </li>
        
                <li class="has-submenu parent-menu-item">
					<Link :href="route('contact')">Contact Us</Link>
                    
                </li>
        
                <li class="has-submenu parent-parent-menu-item">
                    <Link :href="route('blog')">Blogs</Link>
                    
                </li>
      
            </ul><!--end navigation menu-->
        </div><!--end navigation-->
    </div>

    <div v-else class="container">
        <a class="logo" href="/">
            <span class="logo-light-mode">
                <img src="images/logo-dark.png" class="l-dark" alt="">
                <img src="images/logo-light.png" class="l-light" alt="">
            </span>
            <img src="images/logo-light.png" class="logo-dark-mode" alt="">
        </a>
  
        <div class="menu-extras">
            <div class="menu-item">
                <a class="navbar-toggle" id="isToggle" onclick="toggleMenu()">
                    <div class="lines">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </a>
            </div>
        </div>
  
       
  
        <div id="navigation">
            <!-- Navigation Menu-->   
            <ul class="navigation-menu nav-right nav-light">
                <li class="has-submenu parent-menu-item">
                    <Link href="/">Home</Link>
                    
                </li>
  
                <li class="has-submenu parent-parent-menu-item">
                    <Link :href="route('jobs')">Jobs</Link>
                      
                </li>
        
                <li class="has-submenu parent-menu-item">
					<Link :href="route('about')">About</Link>
                   
                    
                </li>
        
                <li class="has-submenu parent-menu-item">
					<Link :href="route('contact')">Contact Us</Link>
                    
                </li>
        
                <li class="has-submenu parent-parent-menu-item">
                    <Link :href="route('blog')">Blogs</Link>
                    
                </li>

                <li class="has-submenu parent-parent-menu-item">
                    <Link :href="route('candidate_login_form')">Login</Link>
                    
                </li>
    
                <li class="has-submenu parent-parent-menu-item">
                    <Link :href="route('candidate_register')">Register</Link>
                  
              </li>
               
        
                
            </ul><!--end navigation menu-->
        </div><!--end navigation-->
    </div>

</header>
</template>

<script setup>
import { Link, usePage } from '@inertiajs/vue3';
const { user } = usePage().props;
// console.log(user)
</script>

<style lang="scss" scoped></style>