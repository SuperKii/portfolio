<header class="header" id="header">
    <nav class="nav container">
        <a href="" class="nav-logo">
            <span class="nav-logo-circle">{{ $dataBasic->logo }}</span>
            <span class="nav-logo-name">{{ $dataBasic->home_name }}</span>
        </a>

        <div class="nav-menu" id="nav_menu">
            <span class="nav-title">Menu</span>

            <h3 class="nav-name">{{ $dataBasic->home_name }}</h3>

            <ul class="nav-list">
                <li class="nav-item">
                    <a href="#home" class="nav-link active-link">Home</a>
                </li>
                <li class="nav-item">
                    <a href="#about" class="nav-link">About Me</a>
                </li>
                <li class="nav-item">
                    <a href="#projects" class="nav-link">Projects</a>
                </li>
                <li class="nav-item">
                    <a href="#contact" class="nav-link nav-link-button">Contact</a>
                </li>
            </ul>

            <!-- Close button -->
            <div class="nav-close" id="nav_close">
                <i class="ri-close-line"></i>
            </div>
        </div>

        <div class="nav-buttons">
            <!-- Theme Button -->
            <i class="ri-moon-line change-theme" id="theme_button"></i>
            <!-- Toggle Button -->
            <div class="nav-toggle" id="nav_toggle">
                <ri class="ri-menu-4-line"></ri>
            </div>
        </div>
    </nav>
</header>
