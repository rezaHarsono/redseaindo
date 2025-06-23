<x-layout>
    <section id="top" class="section-top">
        <div class="container">
            <div class="col-1"></div>
            <div class="col-2">
                <h1 class="section-title">About <span class="highlight">Us</span></h1>
                <p class="section-text">
                    <span class="highlight">PT REDSEA RESOURCES INDONESIA</span> is a distinguished trading company
                    specializing
                    in the trade of minerals, coal, and ultra-low sulfur Diesel EN590 10 ppm. As experienced mineral and
                    coal traders, we have successfully secured long-term contracts with mine owners.
                </p>
                <p class="section-text hidden lg:block">
                    Moreover, we have garnered support from reputable refineries in <span
                        class="highlight">Kazakhstan</span> for Ultra Low Sulfur Diesel EN590 10 ppm. With our
                    commitment to <span class="highlight">professional</span> business practices, <span
                        class="highlight">seasoned</span> mining experts' support, and <span
                        class="highlight">substantial</span> financial backing, we are steadily making significant
                    strides. At this juncture, we are eager to explore potential collaborations with both local and
                    international companies.
                </p>
            </div>
        </div>
    </section>

    <section class="section-mission-vision">
        <div class="mission-vision-container">
            <div class="mission-vision-content">
                <div class="mission-vision-box">
                    <h2 class="mission-vision-title">Our <span class="highlight">Vision</span></h2>
                    <p class="mission-vision-text">
                        Our goal is to establish a trading company for both domestic and export trade and to become a
                        world-class, trusted, and leading professional services company.
                    </p>
                </div>
                <div class="mission-vision-box">
                    <h2 class="mission-vision-title">Our <span class="highlight">Mission</span></h2>
                    <ul class="mission-vision-list">
                        <li>Ensure sustainable revenue visibility and strive to provide maximum work achievement for
                            customers.</li>
                        <li>Uphold a safe, decent, and rewarding environment for employees while making meaningful
                            social contributions through corporate social responsibility programs.</li>
                    </ul>
                </div>
            </div>
            <div></div>
        </div>
    </section>

    <section class="section-permission">
        <h1 class="section-title"><span class="highlight">License and Permit</span></h1>
        <div class="col-2-permission">
            <ul class="contact-phone permission-list">
                <li class="permission-link"><a
                        href="https://drive.google.com/file/d/1lf1tUlmpVqLtsxSD8bgddqHZtxnFWJrh/view?usp=sharing">Permit
                        For Coal Transforpation and Sales</a></li>
                <li class="permission-link"><a
                        href="https://drive.google.com/file/d/16tNyU6cGLKFY5VBxES7N5kQE_uxe3-G1/view?usp=sharing">Company
                        Registration</a></li>
                <li class="permission-link"><a
                        href="https://drive.google.com/file/d/1L7NFoJ0c5SqiX9E2EBXABkwvycv0ldtz/view?usp=sharing">Coal
                        Export Permit</a></li>
            </ul>
        </div>
    </section>

    {{-- <section class="section-key-role">
        <h1 class="section-title"><span class="highlight">Key Role</span> Person</h1>
        <div id="carousel" class="carousel-container" data-carousel="static">
            <div class="carousel-wrapper">
                @foreach ($people as $person)
                    <div class="carousel-item" data-carousel-item>
                        <section class="carousel-content">
                            <div class="carousel-inner">
                                <div class="image-wrapper">
                                    <img class="desktop-image" src="../../img/{{ $person['img_close'] }}.png"
                                        alt="image">
                                    <img class="mobile-image" src="../../img/{{ $person['img_close'] }}.png"
                                        alt="image">
                                </div>
                                <div class="text-wrapper">
                                    <h2 class="person-name">{{ $person['name'] }}</h2>
                                    <h2 class="person-role">{{ $person['role'] }}</h2>
                                    <p class="description desktop-only">{{ $person['description'] }}</p>
                                    <p class="description mobile-only">{{ $person['description_short'] }}</p>
                                </div>
                            </div>
                        </section>
                    </div>
                @endforeach
            </div>

            <div class="carousel-control-prev" data-carousel-prev>
                <svg class="control-icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M5 1 1 5l4 4" />
                </svg>
            </div>
            <div class="carousel-control-next" data-carousel-next>
                <svg class="control-icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 9 4-4-4-4" />
                </svg>
            </div>
        </div>
    </section> --}}
    <x-to-top></x-to-top>
    {{-- <x-wa></x-wa> --}}
    <x-footer></x-footer>
</x-layout>
