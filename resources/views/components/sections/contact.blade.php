<section class="contact" id="contact">
    <div class="container">
        <div class="row">
            <div class="col col-md">
                <div class="title-block d-flex flex-column justify-content-center align-items-center">
                    <h2>Contact</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-4 col-md-4 col-lg-4">
                <address class="d-flex flex-column justify-content-center text-center m-0">
                    <p>
                        <span class="icon-address">{{ $address }}</span>
                    </p>
                </address>
            </div>
            <div class="col-12 col-sm-4 col-md-4 col-lg-4">
                <div class="phone-contact_block d-flex flex-column justify-content-center text-center">
                    @foreach($phones as $phone)
                        <p class="phone-icon">
                            <a href="tel:+{{ $phone }}">+ {{ $phone }}</a>
                        </p>
                    @endforeach
                </div>
            </div>
            <div class="col-12 col-sm-4 col-md-4 col-lg-4">
                <div class="email-block text-center text-sm-left text-md-center text-lg-center">
                    <p class="email-icon">
                        <a href="mailto:{{ $email }}" target="_top">{{ $email }}</a>
                    </p>
                    <p class="skype-icon">
                        <a href="skype:live:{{ $skype }}?call" target="_top">{{ $skype }}</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
