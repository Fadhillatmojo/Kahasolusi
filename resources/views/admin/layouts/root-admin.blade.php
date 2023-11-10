<!doctype html>
<html lang="en">

<head>
    {{-- Meta Tag --}}
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{-- end Meta Tag --}}

    {{-- Boostrap CSS --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    {{-- end bootstrap CSS --}}

    {{--  fonts google  --}}
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@400;700&display=swap" rel="stylesheet">
    {{-- end fonts google --}}

    {{-- style sheet CSS admin --}}
    <link rel="stylesheet" href="{{ asset('../css/style-admin.css')}}">
    {{-- end style sheet CSS admin --}}
    
    {{-- title admin --}}
    <title>Admin | @yield('title')</title>
    {{-- end title admin --}}
</head>

<body>
    <div class="row">
        <div class="col-12 col-lg-3 col-navbar d-none d-xl-block">
            {{-- Aside admin section --}}
            <aside class="sidebar" style="overflow: hidden">
                <div class="logo-admin-section p-2">
                    <a href="#" class="sidebar-logo">
                        <div class="d-flex justify-content-start align-items-center">
                            <img src="{{ asset('../adminassets/img/global/logoKaha.png') }}" alt="Logo">
                            <span>Kahasolusi</span>
                        </div>
    
                        <button id="toggle-navbar" onclick="toggleNavbar()">
                            <img src="{{ asset('../adminassets/img/global/navbar-times.svg') }}" alt="hide">
                        </button>
                    </a>
                </div>
                
                <div class="item-admin-section ps-3">
                    <a href="{{ route('portfolios.index') }}" class="sidebar-item {{ Request::routeIs('portfolios.index') ? 'active' : '' }}" onclick="toggleActive(this)">
                        <img src="{{ asset('../adminassets/img/global/iconPortfolio.svg') }}" alt="hide" class="me-3">
                        <span>Portfolios</span>
                    </a>
    
                    <a href="{{ route('roles.index') }}" class="sidebar-item {{ Request::routeIs('roles.index') ? 'active' : '' }}" onclick="toggleActive(this)">
                        <img src="{{ asset('../adminassets/img/global/iconRole.svg') }}" alt="hide" class="me-3">
                        
                        <span>Roles</span>
                    </a>
                    
                    <a href="{{ route('tools.index') }}" class="sidebar-item {{ Request::routeIs('tools.index') ? 'active' : '' }}" onclick="toggleActive(this)">
                        <img src="{{ asset('../adminassets/img/global/iconTool.svg') }}" alt="hide" class="me-3">
                        
                        <span>Tools</span>
                    </a>
                    
                    <a href="{{ route('founders.index') }}" class="sidebar-item {{ Request::routeIs('founders.index') ? 'active' : '' }}" onclick="toggleActive(this)">
                        <img src="{{ asset('../adminassets/img/global/iconFounder.svg') }}" alt="hide" class="me-3">
                        
                        <span>Founders</span>
                    </a>
                    <a href="{{ route('faqs.index') }}" class="sidebar-item {{ Request::routeIs('faqs.index') ? 'active' : '' }}" onclick="toggleActive(this)">
                        <img src="{{ asset('../adminassets/img/global/iconFAQ.svg') }}" alt="hide" class="me-3">
                        
                        <span>FAQs</span>
                    </a>
                    <a href="{{ route('testimonials.index') }}" class="sidebar-item {{ Request::routeIs('testimonials.index') ? 'active' : '' }}" onclick="toggleActive(this)">
                        <img src="{{ asset('../adminassets/img/global/iconTestimonial.svg') }}" alt="hide" class="me-3">
                        
                        <span>Testimonials</span>
                    </a>
                    
                    <h5 class="sidebar-title">Others</h5>
                    
                    <form class="sidebar-item" onclick="toggleActive(this)" action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button class="logout btn-block" type="submit">
                            <a>
                                <img src="{{ asset('../adminassets/img/global/iconLogout.svg') }}" alt="hide" class="me-3">
                                
                                <span>Logout</span>
                            </a>
                        </button>
                    </form>
                </div>
            </aside>
        </div>
        {{-- End aside admin section --}}

        <div class="col-12 col-xl-9">
            <div class="nav">
                <div class="d-flex justify-content-between align-items-center w-100 mb-3 mb-md-0">
                    <div class="d-flex justify-content-start align-items-center">
                        <button id="toggle-navbar" onclick="toggleNavbar()">
                            <img src="{{ asset('../adminassets/img/global/burger.svg') }}" class="mb-2" alt="">
                        </button>
                        <h2 class="nav-title">@yield('title-page')</h2>
                    </div>
                </div>

                <div class="d-flex justify-content-between align-items-center nav-input-container">
                    {{-- <div class="nav-input-group">
                        <input type="text" class="nav-input" placeholder="Search Item">
                        <button class="btn-nav-input"><img src="../adminassets/img/global/search.svg" alt=""></button>
                    </div> --}}
                    @if (!Request::routeIs('faqs.index'))
                        @if ($showButton)
                            <button class="btn-notif d-none d-md-block">
                                <a href="@yield('create-route')"><img src="{{ asset('../adminassets/img/global/addButton.svg') }}" alt=""></a>
                            </button>
                        @else
                            
                        @endif
                    @endif
                </div>
            </div>

            <div class="content">
                <div class="" style="overflow-x:auto">
                    @yield('table')
                </div>

            </div>
        </div>
    </div>

    {{-- Ini adalah section javascrip tag --}}
    @stack('scripts')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <script>
        const navbar = document.querySelector('.col-navbar')
        const cover = document.querySelector('.screen-cover')

        const sidebar_items = document.querySelectorAll('.sidebar-item')

        function toggleNavbar() {
            navbar.classList.toggle('d-none')
            cover.classList.toggle('d-none')
        }

        function toggleActive(e) {
            sidebar_items.forEach(function(v, k) {
                v.classList.remove('active')
            })
            e.closest('.sidebar-item').classList.add('active')

        }
    </script>
    {{-- end javascript tag --}}
</body>

</html>