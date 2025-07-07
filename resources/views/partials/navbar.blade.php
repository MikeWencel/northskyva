<style>
  .navbar-nav .nav-link {
    transition: color 0.2s ease-in-out;
  }

  .navbar-nav .nav-link:hover {
    color: #ffc107 !important; /* Bootstrap warning yellow */
    text-shadow: 0 0 5px rgba(255, 193, 7, 0.5); /* delikatna poświata */
  }
</style>
<nav class="navbar navbar-expand-lg navbar-dark bg-black px-4 py-2">
  <div class="container-fluid d-flex align-items-center justify-content-between">
    
    <!-- Logo -->
    <a class="navbar-brand d-flex align-items-center mb-0" href="/">
      <img src="{{ asset('images/north_sky_long_2_2_only_letters.png') }}" alt="North Sky VA"
           style="max-height: 50px; object-fit: contain;" class="me-2">
    </a>

    <!-- Hamburger only on mobile -->
    <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Navigation links -->
    <div class="collapse navbar-collapse justify-content-end bg-black p-3 rounded" id="mainNavbar">
      <ul class="navbar-nav">
        <li class="nav-item"><a class="nav-link text-light" href="/">Home</a></li>
        <li class="nav-item"><a class="nav-link text-light" href="/fleet">Fleet</a></li>
        <li class="nav-item"><a class="nav-link text-light" href="/pilots">Pilots</a></li>
        <li class="nav-item"><a class="nav-link text-light" href="/flightschool">Flight School</a></li>
        <li class="nav-item"><a class="nav-link text-light" href="#">Live Map</a></li>
        <li class="nav-item"><a class="nav-link text-warning" href="#">Join</a></li>
      </ul>
    </div>
  </div>
</nav>
