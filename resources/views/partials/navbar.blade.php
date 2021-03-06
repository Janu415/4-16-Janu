<nav class="navbar navbar-expand-lg navbar-light bg-warning">
  <div class="container">
    <a class="navbar-brand" href="#">Janu</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link {{ ( $title === 'Home') ? 'active' : '' }}" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ( $title === 'About') ? 'active' : '' }}" href="/about">About</a> 
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ( $title === 'Galeri') ? 'active' : '' }}" href="/galeri">Galeri</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ( $title === 'Contacts') ? 'active' : '' }}" href="/contacts">Contact Us</a>
        </li>
    </ul>
      </div>
    </div>
  </div>
</nav>