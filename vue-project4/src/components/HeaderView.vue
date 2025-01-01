<template>
   <div class="jumbotron text-center" style="margin-bottom:0">
  <h1>My First Bootstrap 4 Page</h1>
  <p>Resize this responsive page to see the effect!</p> 
</div>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <RouterLink class="navbar-brand" to="/">Navbar</RouterLink>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <RouterLink class="nav-link" to="/">Home</RouterLink>
      </li>
      <li class="nav-item">
        <RouterLink class="nav-link" to="/about">About</RouterLink>
      </li>
      <li class="nav-item">
        <RouterLink class="nav-link" to="/contact">Contact</RouterLink>
      </li>
      <li class="nav-item">
        <RouterLink class="nav-link" to="/http">Http</RouterLink>
      </li>
      <li class="nav-item">
        <RouterLink class="nav-link" to="/json">Json</RouterLink>
      </li>
      <li class="nav-item">
        <RouterLink class="nav-link" to="/axios">Axios</RouterLink>
      </li>    
    </ul>
  </div>  
</nav>
</template>

<script>
    export default {
        
    }
</script>

<style lang="scss" scoped>

</style>