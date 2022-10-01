<nav class="navbar navbar-expand-lg bg-primary">
    <div class="container">
      <a class="navbar-brand" href="/">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link {{ ($title === "home") ? 'active' : ' ' }}" aria-current="page" href="/">Home</a>
          <a class="nav-link {{ ($title === "about") ? 'active' : ' ' }}" href="/about">About</a>
          <a class="nav-link {{ ($title === "Blog Post") ? 'active' : ' ' }}" href="/post">Post</a> 
        </div>
      </div>
    </div>
  </nav>