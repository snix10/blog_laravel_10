<nav class="navbar navbar-expand-lg nav-dark nav-pills shadow   rounded mx-2 my-1 border border-dark" style="background-color:rgba(0, 115, 255, 0.564);">
  <div class="container-fluid">
  <button class="btn  bg-trasnparent" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions">MY BLOG</button>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav ms-auto ">
        <li class="nav-item">
          <a class="nav-link mx-2 {{ ($title === 'Home') ? 'active shadow    rounded border border-dark' : '' }}" href="/home">HOME</a>
        </li>
        <li>
          <a class="nav-link mx-2 {{ ($title === 'about') ? 'active shadow    rounded border border-dark' : '' }}" href="/about">ABOUT</a>
        </li>
        <li>
          <a class="nav-link mx-2 {{ Request::is('blogs') ? 'active rounded border border-dark' : '' }}" href="/blogs">BLOG</a>
        </li>
        <li>
          <a class="nav-link mx-2 {{ ($title === 'BLOG CATEGORIES') ? 'active shadow   rounded border border-dark' : '' }}" href="/kategoris">CATEGORIES</a>
        </li>
        <li>
          
        </li>
      </div>
    </div>
  </div>
</nav>
