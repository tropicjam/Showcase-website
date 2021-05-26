<div id="header" class="h-screen">
    <div id="menu-container" class="flex items-center justify-between max-w-screen-xl mx-auto py-5">
        <div id="logo-container">
            <h1 class="text-white"><a href="/">Showcase</a></h1>
        </div>
        <div id="main-menu-container">
            <nav class="text-white space-x-4">
                <ul id="nav-list" class="flex items-center">
                    <li>
                        <a href="#about-section" class="px-5 py-2">About me</a>
                    </li>
                    <li>
                        <a href="#skills-section" class="px-5 py-2">My skills</a>
                    </li>
                    <li>
                        <a href="#contact-section" class="px-5 py-2">Contact me</a>
                    </li>
                    <li>
                        <a href="/features" class="px-5 py-2">Examples</a>
                    </li>   
                </ul>
            </nav>
        </div>
    </div>
    <div class="container mx-auto h-screen">
        @yield('header-content')
    </div>
</div>