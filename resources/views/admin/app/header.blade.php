<header id="header" class="header">
    <div class="top-left">
        <a class="navbar-brand" style="font-size: 15px; font-weight: 500; color:hsl(145, 63%, 42%);;" href=""><img
                width="40" src="{{ asset('assets/images/logo.png') }}" alt="">Cookie.</a>
        {{-- <div class="navbar-header" style="left: 0">
            <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
        </div> --}}
    </div>
    <div class="top-right">
        <div class="header-menu">
            <div class="user-area dropdown float-right">
                <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                    <img class="user-avatar rounded-circle" src="{{ asset('admin/assets/') }}"
                        alt="">
                </a>

                <div class="user-menu dropdown-menu">
                    <a class="nav-link" href=""><i class="fa fa- user"></i>Profile</a>

                    <a class="nav-link" href=""><i class="fa fa-power -off"></i>Logout</a>
                </div>
            </div>

        </div>
    </div>
</header>
