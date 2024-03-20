<div>
    @section('title', __('ContactUs'))
    <div class="page-header">
        <div class="page-header__container container">
            <div class="page-header__breadcrumb">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="/">Home</a>
                            <svg class="breadcrumb-arrow" width="6px" height="9px">
                                <use xlink:href="{{ asset('images/sprite.svg#arrow-rounded-right-6x9') }}"></use>
                            </svg>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">{{ __('ContactUs') }}</li>
                    </ol>
                </nav>
            </div>
            <div class="page-header__title">
                <h1>{{ __('ContactUs') }}</h1>
            </div>
        </div>
    </div>
    <div class="block">
        <div class="container">
            <div class="card mb-0 contact-us">
                <div class="contact-us__map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d25133.11959796442!2d58.32380845623793!3d38.055475025744094!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3f7aabaad95ce7bd%3A0x168c5241a1130da3!2zIktlbmRpciI!5e0!3m2!1sru!2s!4v1708920661647!5m2!1sru!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
                <div class="card-body">
                    <div class="contact-us__container">
                        <div class="row">
                            <div class="col-12 col-lg-6 pb-4 pb-lg-0">
                                <h4 class="contact-us__header card-title">Biziň salgymyz</h4>
                                <div class="contact-us__address">
                                    <p>
                                        Täze zaman köçesi 180/2 jaýy, Bagtyýarlyk etrap, Aşgabat, Türkmenistan<br>
                                        Email: <a href="mailto:info@kendirtm.com">info@kendirtm.com</a>
                                        <br>
                                        Phone Number: <a href="tel:+99312247780">+993 12 24-77-80</a><br>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <a href="tel:+99312247781">+993 12 24-77-81</a><br>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <a href="tel:+99361105249">+993 61 10-52-49</a><br>
                                    </p>
                                    <p>
                                        <strong>Iş wagtymyz</strong><br>
                                        Duşenbe - Anna: 8:00-18:00<br>
                                        Şenbe: 8:00-17:00<br>
                                        Ýekşenbe dynç güni
                                    </p>
                                    <p>
                                        <strong>Goşmaça</strong><br>
                                        Uly binalar üçin ýa-da öz hojalygyňyza gerek ähli gurluşyk harytlaryny bir ýerde jemledik.
                                        Binanyň esasy üçin gerek bolan polat armaturdan, jaýyň üçegini ýapmak üçin demir çerepisalara çenli ähli harytlar bizde bar.
                                    </p>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
{{--                                    top: -17px;--}}
                                <h4 class="contact-us__header card-title">Bize ýazyň</h4>
                                @if(session('success'))
                                    <div class="alert alert-success alert-dismissible" style="margin-bottom: 0%; padding-top:0.5rem; padding-bottom:0.5rem; ">
                                        <button type="button" class="close {{ request()->is('/') ? '' : ' mt-3' }}" data-dismiss="alert" aria-hidden="true" style="top: -17px;">×</button>
                                        <h6><i class="icon fas fa-check"></i> {{ session('success') }}</h6>
                                    </div>
                                @endif
                                <form wire:submit="sendMessage">
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="form-name">{{ __('Your Name') }}</label>
                                            <input type="text" id="form-name" class="form-control @error('name') is-invalid @enderror" placeholder="Your Name" wire:model="name">
                                            @error('name') <p class="text-danger">{{$message}}</p> @enderror
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="form-email">{{__('Email')}}</label>
                                            <input type="email" id="form-email" class="form-control @error('email') is-invalid @enderror" placeholder="Email Address" wire:model="email">
                                            @error('email') <p class="text-danger">{{$message}}</p> @enderror
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="form-subject">{{__('Phone')}}</label>
                                        <input type="text" id="form-subject" class="form-control @error('phone') is-invalid @enderror" placeholder="Phone" wire:model="phone">
                                        @error('phone') <p class="text-danger">{{$message}}</p> @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="form-subject">{{__('Subject')}}</label>
                                        <input type="text" id="form-subject" class="form-control @error('subject') is-invalid @enderror" placeholder="Subject" wire:model="subject">
                                        @error('subject') <p class="text-danger">{{$message}}</p> @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="form-message">{{__('Message')}}</label>
                                        <textarea id="form-message" class="form-control @error('message') is-invalid @enderror" rows="4" wire:model="message"></textarea>
                                        @error('message') <p class="text-danger">{{$message}}</p> @enderror
                                    </div>
                                    <button type="submit" class="btn btn-primary">{{__('Send Message')}}</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
