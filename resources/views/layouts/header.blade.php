<section class="hero is-success">

    <!-- Hero head: will stick at the top -->
    <div class="hero-head">
        <header class="navbar">
        <div class="container">
            <div class="navbar-brand">
            <a class="navbar-item">
                <img src="https://bulma.io/images/bulma-type-white.png" alt="Logo">
            </a>
            <span class="navbar-burger burger" data-target="navbarMenuHeroC">
                <span></span>
                <span></span>
                <span></span>
            </span>
            </div>
            <div id="navbarMenuHeroC" class="navbar-menu">
          <div class="navbar-end">
            <a class="navbar-item is-active">
              Home
            </a>
            <a class="navbar-item">
              Examples
            </a>
            <a class="navbar-item">
              Documentation
            </a>
            <span class="navbar-item">
              <a class="button is-success is-inverted">
                <span class="icon">
                  <i class="fa fa-github"></i>
                </span>
                <span>Download</span>
              </a>
            </span>
          </div>
        </div>
        </div>
        </header>
    </div>

    <!-- Hero footer: will stick at the bottom -->
    @include('layouts.nav')
</section>            
