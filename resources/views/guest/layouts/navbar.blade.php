<div class="header-top">
    <div class="container">
        <div class="row align-items-center">
        <div class="col-12 col-lg-6 d-flex">
            <a href="index.html" class="site-logo">
            Meranda
            </a>

            <a href="#" class="ml-auto d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black"><span
                class="icon-menu h3"></span></a>

        </div>
        <div class="col-12 col-lg-6 ml-auto float-right">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">LOGIN</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">REGISTER</a>
                        @endif
                    @endauth
                </div>
            @endif

            
        </div>
        <div class="col-6 d-block d-lg-none text-right">
            
        </div>
        </div>
    </div>

    <div class="site-navbar py-2 js-sticky-header site-navbar-target d-none pl-0 d-lg-block" role="banner">

        <div class="container">
            <div class="d-flex align-items-center">
            
            <div class="mr-auto">
                <nav class="site-navigation position-relative text-right" role="navigation">
                <ul class="site-menu main-menu js-clone-nav mr-auto d-none pl-0 d-lg-block">
                    <li class="active">
                    <a href="index.html" class="nav-link text-left">Home</a>
                    </li>
                    <li>
                    <a href="categories.html" class="nav-link text-left">Categories</a>
                    </li>
                    <li>
                    <a href="categories.html" class="nav-link text-left">Politics</a>
                    </li>
                    <li>
                    <a href="categories.html" class="nav-link text-left">Business</a>
                    </li>
                    <li>
                        <a href="categories.html" class="nav-link text-left">Health</a>
                    </li>
                    <li><a href="categories.html" class="nav-link text-left">Design</a></li>
                    <li>
                    <a href="categories.html" class="nav-link text-left">Sport</a>
                    </li>
                    <li><a href="contact.html" class="nav-link text-left">Contact</a></li>
                </ul>                                                                                                                                                                                                                                                                                         
                </nav>
    
            </div>
            
            </div>
        </div>
    
        </div>
        
        </div>