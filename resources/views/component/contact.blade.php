<!-- Start Contact Area -->
<div class="included-bg">
    <div id="contact" class="contact-area bg-theme text-light">
        <div class="container">
            <div class="contact-content">
                <div class="row flex-md-col">
                    <div class="col-lg-6 info">
                        <div class="contact-info">
                            <ul>
                                <li class="contactUs">
                                    <h1 class="title-contact"><b>Don’t Hesitate to Contact Us</b></h1>
                                </li>
                                <li class="telp">
                                    <div class="icon">
                                        <i class="fas fa-phone"></i>
                                    </div>
                                    <div class="content">
                                        <p>Telp. 085293037949</p>
                                    </div>
                                </li>
                                <li class="mail">
                                    <div class="icon">
                                        <i class="fas fa-envelope"></i>
                                    </div>
                                    <div class="content">
                                        <p>Email: info@kahasolusi.com <br>Website: kahasolusi.com</p>
                                    </div>
                                </li>
                                <li class="loc">
                                    <div class="icon">
                                        <i class="fas fa-map-marker-alt"></i>
                                    </div>
                                    <div class="content">
                                        <p>Headquarter</p>
                                        <p>Pucung 001/001 Tamanmartani Kalasan Sleman Yogyakarta</p>
                                    </div>
                                </li>
                            </ul>
                        </div>

                    </div>
                    <div class="col-lg-6 contact-form-box">
                        <div class="form-box">
                            <h1 class="title-contact"><b>Let's talk?</b></h1>
                            <p>
                                It's all about the humans behind a brand and those experiencing it, we're right there.
                                In the middle performance quick.
                            </p>
                            <form method="POST" action="{{ route('contactUs') }}">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12 col-lg-12 input-name">
                                        <div class="form-group">
                                            <input class="form-control" id="name" name="name" placeholder="Name"
                                                type="text" required>
                                            {{-- <span class="alert-error"></span> --}}
                                            @if ($errors->has('name'))
                                            <span class="text-danger">{{ $errors->first('name') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 col-lg-6 input-email">
                                        <div class="form-group">
                                            <input class="form-control" id="email" name="email"
                                                placeholder="example@gmail.com *" type="email" required>
                                            {{-- <span class="alert-error"></span> --}}
                                            @if ($errors->has('email'))
                                            <span class="text-danger">{{ $errors->first('email') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-lg-6 input-phone">
                                        <div class="form-group">
                                            <input class="form-control" id="phone" name="phone"
                                                placeholder="+6289896764 *" type="text" required>
                                            {{-- <span class="alert-error"></span> --}}
                                            @if ($errors->has('phone'))
                                            <span class="text-danger">{{ $errors->first('phone') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 col-lg-12 input-comment">
                                        <div class="form-group comments">
                                            <textarea class="form-control" id="comments" name="comments"
                                                placeholder="Tell Us About Project *" required></textarea>
                                            @if ($errors->has('comments'))
                                            <span class="text-danger">{{ $errors->first('comments') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <button type="submit" name="submit" id="submit" value="contact-us">
                                            Send Message <i class="fa fa-paper-plane"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container bg">
        <div class="box-background">.</div>
    </div>
</div>
<!-- End Contact Area -->