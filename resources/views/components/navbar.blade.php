<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container">
    <a class="navbar-brand align-items-start fs-2 mx-0" href="#" style="max-width: 0px">
      <img src="storage/jellyfish.png" alt="" width="50" height="50" class="d-inline-block align-text-center">
      Pros
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
           <a class="nav-link {{ ($active === "Home") ? "active" : "" }} fs-4" href="/home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($active === "Compare") ? "active" : "" }} fs-4" href="/compare">Compare</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($active === "About") ? "active" : "" }} fs-4" href="/about">About</a>
          </li>
        </ul>
    </div>      
  </div>
</nav>