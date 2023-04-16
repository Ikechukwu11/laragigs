<!-- Background image -->
<div
  class="p-5 text-center bg-image"
  style="
  background-image: url('/images/laravel-logo.png');
  height: 400px;
  background-position: center;
  background-repeat: no-repeat;
  "
  >
  <div class="mask" style="background-color: rgb(239 59 45 / 70%);">
    <div class="d-flex justify-content-center align-items-center h-100">
      <div class="text-white">
        <h1 class="mb-3 fw-bolder text-uppercase">Lara<span class="text-black">Gigs</span></h1>
        <p class="fw-bolder">
          Find or post Laravel jobs & projects
        </p>
        @auth
        <a class="btn btn-outline-light btn-lg" href="/listings/create"
          >Post a Gig</a>
        @else
        <a class="btn btn-outline-light btn-lg" href="register"
          >Sign up to list a Gig</a>
        @endauth
      </div>
    </div>
  </div>
</div>
<!-- Background image -->