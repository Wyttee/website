<footer>
    @isset ($__links)
        <section class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-4 col-md-4 col-lg-4">
                        <div class="logo-block_footer text-center mb-3 mb-sm-0 mb-md-0 mb-lg-0">
                            <a href="#" class="footer-logo">
                                <img src="{{ asset('images/footer-logo.svg') }}" class="d-inline-block align-top footer-logo" alt="One Group Digital Solution">
                            </a>
                        </div>
                    </div>
                    <div class="col-12 col-sm-8 col-md-8 col-lg-8">
                        <div class="social-block">
                            @foreach ($__links as $key => $link)
                                <a href="{{ $link }}" class="{{ $key }}" target="_blank"></a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endisset

    <section class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-4"></div>
                <div class="col-12 col-md-4 col-lg-4 text-center">
                    <p class="copyright-text">&copy; {{ $copyright }}</p>
                </div>
                <div class="col-4"></div>
            </div>
        </div>
    </section>

    {{ $slot }}
</footer>
