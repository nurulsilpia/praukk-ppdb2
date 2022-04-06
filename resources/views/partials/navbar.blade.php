<header class="l-header">
    <nav class="nav bd-grid">
        <div>
            <p class="nav__logo"><img src="/asset/img/header/wk.png" width="50" alt=""> <span class="px-2">PPDB</span></p>
        </div>

        <div class="nav__menu" id="nav-menu">
            <ul class="nav__list list-unstyled m-0">
                <li class="nav__item"><a href="/" class="nav__link {{ Request::is('/') ? 'active' : '' }}"><i class='bx bxs-home'></i>  Home</a></li>
                <li class="nav__item"><a href="/regis" class="nav__link {{ Request::is('regis*') ? 'active' : '' }}"><i class='bx bxs-info-circle'></i> Registration</a></li>
            </ul>
                
        </div>

        <div class="nav__toggle" id="nav-toggle">
            <i class='bx bx-menu'></i>
        </div>
    </nav>
</header>