<div class="leftside-menu">

    <!-- LOGO -->
    <a href="index.html" class="logo text-center logo-light">
        <span class="logo-lg">
            <img src="assets/images/logo.png" alt="" height="16">
        </span>
        <span class="logo-sm">
            <img src="assets/images/logo_sm.png" alt="" height="16">
        </span>
    </a>

    <!-- LOGO -->
    <a href="index.html" class="logo text-center logo-dark">
        <span class="logo-lg">
            <img src="assets/images/logo-dark.png" alt="" height="16">
        </span>
        <span class="logo-sm">
            <img src="assets/images/logo_sm_dark.png" alt="" height="16">
        </span>
    </a>

    <div class="h-100" id="leftside-menu-container" data-simplebar>
        <!--- Sidemenu -->
        <ul class="side-nav">
            <li class="side-nav-title side-nav-item">Navigation</li>
            <li class="side-nav-item">
                <a href="apps-calendar.html" class="side-nav-link">
                    <i class="uil-home-alt"></i>
                    <span> Home </span>
                </a>
            </li>
            <li class="side-nav-title side-nav-item">WEB SITE COMPONENTS</li>
            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarEcommerce" aria-expanded="false"
                    aria-controls="sidebarEcommerce" class="side-nav-link">
                    <i class="uil-store"></i>
                    <span> Pages </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarEcommerce">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href="/posts">Posts</a>
                        </li>
                        <li>
                            <a href="apps-ecommerce-products-details.html">Comments</a>
                        </li>
                        <li>
                            <a href="apps-ecommerce-orders.html">Events</a>
                        </li>
                        <li>
                            <a href="{{ route('news') }}">News</a>
                        </li>
                        <li>
                            <a href="{{ route('option') }}">Option</a>
                        </li>
                        <li>
                            <a href="{{ route('slide') }}">Slides Images</a>
                        </li>
                        <li>
                            <a href="{{ route('fillieres') }}">Fillieres</a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarEmail" aria-expanded="false" aria-controls="sidebarEmail"
                    class="side-nav-link">
                    <i class="uil-envelope"></i>
                    <span> Media </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarEmail">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href="apps-email-inbox.html">Galerie</a>
                        </li>
                        <li>
                            <a href="apps-email-read.html">Video</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="side-nav-title side-nav-item">SETTING</li>

            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarPages" aria-expanded="false" aria-controls="sidebarPages"
                    class="side-nav-link">
                    <i class="uil-copy-alt"></i>
                    <span> Internal </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarPages">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href="pages-profile.html">Promotion</a>
                        </li>
                        <li>
                            <a href="pages-profile-2.html">Filliere</a>
                        </li>
                        <li>
                            <a href="pages-invoice.html">Cours</a>
                        </li>
                        <li>
                            <a href="pages-faq.html">Personnel</a>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
        <!-- End Sidebar -->

        <div class="clearfix"></div>

    </div>
    <!-- Sidebar -left -->

</div>
