<nav class="navbar">
    <div class="navbar-container" id="navbar-container">
        <a href="/" class="navbar-brand">
            <img src="{{ asset('img/logo.png') }}" class="navbar-logo" alt="Logo">
        </a>
        <div class="navbar-toggle">
            <button id="menu-toggle" class="menu-button" aria-controls="navbar-sticky" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="menu-icon" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </button>
        </div>
        <div class="navbar-menu" id="navbar-sticky">
            <ul class="navbar-nav">
                <li><a href="/" class="nav-link {{ Request::is('/') ? 'active' : '' }}">Home</a></li>
                <li><a href="/about" class="nav-link {{ Request::is('about') ? 'active' : '' }}">About</a></li>
                <li><a href="/contact" class="nav-link {{ Request::is('contact') ? 'active' : '' }}">Contact</a></li>
                {{-- <li>
                    <a class="nav-link download-link" onmouseover="changeText(this, 'Download our company profile')"
                        onmouseout="changeText(this, 'Download')"
                        href="https://drive.google.com/file/d/1SLK4NYFXMxXF5AzTxSWW9-twvwt5k48n/view?usp=sharing">
                        Download
                    </a>
                </li> --}}
            </ul>
        </div>
    </div>

    <div class="navbar-nav-mobile" id="navbar-mobile">
        <ul>
            <a href="/">
                <li class="nav-link-mobile {{ Request::is('/') ? 'active' : '' }}">Home</li>
            </a>
            <a href="/about">
                <li class="nav-link-mobile {{ Request::is('about') ? 'active' : '' }}">About</li>
            </a>
            <a href="/contact">
                <li class="nav-link-mobile {{ Request::is('contact') ? 'active' : '' }}">Contact</li>
            </a>
            <a href="https://drive.google.com/file/d/1PGOcgwlMlLeUHy6ruj4U-TKARb76x7G-/view?usp=sharing">
                <li class="nav-link-mobile download-link" onmouseover="changeText(this, 'Download our company profile')"
                    onmouseout="changeText(this, 'Download')">
                    Download
                </li>
            </a>
        </ul>
    </div>
</nav>
