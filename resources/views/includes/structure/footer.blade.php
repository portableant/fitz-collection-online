<!-- Footer logos -->
<div class="container-fluid bg-white p-2 container-fluid border-cambridge">
    <div class="col-md-12 mx-auto">
        <div class="row justify-content-center mb-4">
            <div class="col-md-2 col-sm-2 text-center">
                <a href="https://www.museums.cam.ac.uk">
                    <img class="mx-auto my-2"
                         loading="lazy"
                         width="200"
                         height="62"
                         alt="University of Cambridge Museums logo"
                         src="{{ asset('/images/logos/ucm_logo.svg') }}"
                    />
                </a>
            </div>
            <div class="col-md-2 col-sm-2 text-center">
                <a href="https://www.cambridge.gov.uk/">
                    <img class="mx-auto my-2"
                         loading="lazy"
                         width="60"
                         height="73.85"
                         alt="Cambridge City Council logo"
                         src="{{ asset('/images/logos/Cambridge_City.svg') }}"
                    />
                </a>
            </div>
            <div class="col-md-2 col-sm-2 text-center">
                <a href="https://www.artscouncil.org.uk/">
                    <img class="mx-auto my-2"
                         alt="Arts Council England Logo"
                         src="{{ asset('/images/logos/ace_grant_eps_black.svg')}}"
                         loading="lazy"
                         width="200"
                         height="63.3833"
                    />
                </a>
            </div>
            <div class="col-md-2 col-sm-2 text-center">
                <a href="https://re.ukri.org/">
                    <img class="mx-auto my-2"
                         alt="Research England logo"
                         loading="lazy"
                         width="200"
                         height="63.5"
                         src="{{ asset('images/logos/UKRI_RE-Logo_Horiz-RGB.svg')}}"
                    />
                </a>
            </div>
        </div>
    </div>
</div>

<!-- Sponsor -->
<div class="container-fluid bg-white p-2 container-fluid border-cambridge">
    <div class="col-md-12 mx-auto">
        <div class="row justify-content-center mb-4">
            <div class="col-md-2 col-sm-2">
                <a href="https://www.brewin.co.uk/individuals/our-offices/cambridge">
                    <img class="mx-auto d-block mb-4"
                         alt="Brewin Dolphin Logo"
                         width="300"
                         src="{{ asset('/images/logos/brewin-dolphin.jpg')}}"
                         loading="lazy"/>
                </a>
            </div>
        </div>
    </div>
</div>

<!--- Footer stuff -->

<footer class="text-black bg-pastel">
    <div class="container-fluid">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <div class="my-2 mx-auto footer__info p-4">
                        <h3 class="visually-hidden">Contact us</h3>
                        <p>
                            The Fitzwilliam Museum<br/>
                            Trumpington Street<br/>
                            Cambridge<br/>
                            CB2 1RB<br/>
                            Switchboard: +44 (0)1223 332 900<br/>
                            Box office: +44 (0)1223 333 230<br/>
                            @svg('fas-at',['width'=> 20]) <a
                                href="mailto:tickets@museums.cam.ac.uk">tickets@museums.cam.ac.uk</a><br/>
                            What3Words: <span class="w3w"><a
                                    href="https://map.what3words.com/lofts.puzzle.given"
                                    aria-label="What3Words location phrase">lofts.puzzle.given</a></span>
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="my-2 mx-auto footer__info p-4">
                        <h3 class="visually-hidden">Useful links</h3>
                        <ul class="share">
                            <li>
                                <a href="https://www.museums.cam.ac.uk/"
                                   aria-label="The University of Cambridge museums site">University
                                    of Cambridge Museums</a>
                            </li>
                            <li>
                                <a href="https://fitzmuseum.cam.ac.uk/about-us/terms-of-use-of-our-website)}}"
                                   aria-label="Website terms and conditions">Website Terms of Use</a>
                            </li>
                            <li>
                                <a href="https://fitzmuseum.cam.ac.uk/about-us/privacy-and-cookies">Cookies,
                                    privacy &
                                    accessibility</a>
                            </li>
                            <li>
                                <a aria-label="Contact the museum"
                                   href="https://fitzmuseum.cam.ac.uk/about-us/about-us/contact-us">Contact us</a>
                            </li>
                            <li>
                                <a aria-label="Work for us" href="https://fitzmuseum.cam.ac.uk/about-us/vacancies">Work for us</a>
                            </li>
                            <li>
                                <a aria-label="Our Collections API"
                                   href="{{ route('api.index') }}">Our Collections API</a>
                            </li>
                            <li>
                                <a href="https://www.registrarysoffice.admin.cam.ac.uk/governance-and-strategy/anti-slavery-and-anti-trafficking"
                                   aria-label="Modern Slavery Act statement of compliance">Modern Slavery Act
                                    Statement</a>
                            </li>
                            <li>
                                <a href="https://fitzmuseum.cam.ac.uk/about-us/about-us/terms-of-sale"
                                   aria-label="Terms of sale for tickets">Terms of Sale</a>
                            </li>

                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="my-2 mx-auto footer__info p-4">
                        <h3 class="visually-hidden">About the University and licenses</h3>
                        <ul class="share">
                            <li><a href="https://cam.ac.uk/about-the-university/how-the-university-and-colleges-work"
                                   aria-label="How Collegiate Cambridge works">The University and Colleges</a></li>
                            <li><a href="https://cam.ac.uk/about-the-university/visiting-the-university"
                                   aria-label="How to visit the university">Visiting the University</a></li>
                            <li><a href="https://www.philanthropy.cam.ac.uk/give-now"
                                   aria-label="How to support the University">Give to Cambridge</a></li>
                            <li>Content: CC-BY</li>
                            <li>Metadata: CC0</li>
                            <li>Images: CC-BY-NC-ND</li>
                            <li>Code: GPL-V3</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="container">
        <div class="row pt-2">
            <div class="col-md-6 mx-auto">
                <h3 class="visually-hidden">Join our conversations</h3>
                <p class="share text-center">
                    <a aria-label="Fitzwilliam Museum twitter account" href="https://twitter.com/FitzMuseum_UK">
                        @svg('fab-twitter',['width'=> 48,'height'=> 48, 'alt' => "Twitter logo", "class" => "my-2 mx-2"])

                    </a>
                    <a aria-label="Fitzwilliam Museum instagram account" href="https://www.instagram.com/fitzmuseum_uk">
                        @svg('fab-instagram',['width'=> 48,'height'=> 48, 'alt' => "Instagram logo", "class" => "my-2 mx-2"])

                    </a>
                    <a aria-label="Fitzwilliam Museum facebook account"
                       href="https://www.facebook.com/fitzwilliammuseum/">
                        @svg('fab-linkedin',['width'=> 48,'height'=> 48, 'alt' => "Linkin logo", "class" => "my-2 mx-2"])

                    </a>
                    <a aria-label="Fitzwilliam Museum linkedin account"
                       href="https://www.linkedin.com/company/the-fitzwilliam-museum/">
                        @svg('fab-facebook',['width'=> 48,'height'=> 48, 'alt' => "Facebook logo", "class" => "my-2 mx-2"])
                    </a>
                    <a aria-label="Fitzwilliam Museum sketchfab account" href="https://www.sketchfab.com/fitzwilliammuseum/">
                        <img src="{{ asset( "/images/logos/sketchfab-logo.svg") }}"
                             width="48"
                             height="48"
                             alt="Sketchfab logo"
                             class="my-2 mx-2 eden"
                        />
                    </a>
                    <a aria-label="Fitzwilliam Museum github account" href="https://www.github.com/fitzwilliammuseum/">
                        @svg('fab-github',['width'=> 48,'height'=> 48, 'alt' => "Github logo", "class" => "my-2 mx-2"])

                    </a>
                    <a aria-label="Watch our YouTube videos" href="https://www.youtube.com/channel/UCFwhw5uPJWb4wVEU3Y2nScg">
                        @svg('fab-youtube',['width'=> 48,'height'=> 48, 'alt' => "Youtube logo", "class" => "my-2 mx-2"])

                    </a>
                    <a aria-label="Fitzwilliam Museum news feed" href="{{ env('MAIN_URL') }}/news/feed/">
                        @svg('fas-rss',['width'=> 48,'height'=> 48, 'alt' => "RSS logo", "class" => "my-2 mx-2"])
                    </a>
                </p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 mb-2 mx-auto">
                <p class="text-center">
                    <a href="https://cam.ac.uk">
                        <img src="{{ asset('/images/logos/cambridge_university2.svg')}}"
                             alt="The University of Cambridge logo"
                             width="200"
                             height="41.59"
                             class="img-fluid mx-auto mb-3"
                             loading="lazy"
                        />
                    </a>
                    <br/>
                    &copy; {{ now()->year }} The University of Cambridge</p>
            </div>
        </div>
        <button
            type="button"
            class="btn btn-floating btn-lg"
            id="btn-back-to-top"
            aria-label="Return to the top of the page"
        >
            <svg height="48" viewBox="0 0 48 48" width="64" xmlns="http://www.w3.org/2000/svg"><path fill="black" id="scrolltop-bg" d="M0 0h48v48h-48z"/><path fill="white" id="scrolltop-arrow" d="M14.83 30.83l9.17-9.17 9.17 9.17 2.83-2.83-12-12-12 12z"/></svg>
        </button>
    </div>

</footer>
