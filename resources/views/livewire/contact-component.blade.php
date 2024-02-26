<div>
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
                        <li class="breadcrumb-item">
                            <a href="#">Breadcrumb</a>
                            <svg class="breadcrumb-arrow" width="6px" height="9px">
                                <use xlink:href="{{ asset('images/sprite.svg#arrow-rounded-right-6x9') }}"></use>
                            </svg>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                    </ol>
                </nav>
            </div>
            <div class="page-header__title">
                <h1>Contact Us</h1>
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
                                <h4 class="contact-us__header card-title">Our Address</h4>
                                <div class="contact-us__address">
                                    <p>
                                        715 Fake Ave, Apt. 34, New York, NY 10021 USA<br>
                                        Email: stroyka@example.com<br>
                                        Phone Number: +1 754 000-00-00
                                    </p>
                                    <p>
                                        <strong>Opening Hours</strong><br>
                                        Monday to Friday: 8am-8pm<br>
                                        Saturday: 8am-6pm<br>
                                        Sunday: 10am-4pm
                                    </p>
                                    <p>
                                        <strong>Comment</strong><br>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur suscipit suscipit mi, non
                                        tempor nulla finibus eget. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    </p>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
{{--                                    top: -17px;--}}
                                <h4 class="contact-us__header card-title">Leave us a Message</h4>
                                @if(session('success'))
                                    <div class="alert alert-success alert-dismissible" style="margin-bottom: 0%; padding-top:0.5rem; padding-bottom:0.5rem; ">
                                        <button type="button" class="close {{ request()->is('/') ? '' : ' mt-3' }}" data-dismiss="alert" aria-hidden="true" style="top: -17px;">×</button>
                                        <h6><i class="icon fas fa-check"></i> {{ session('success') }}</h6>
                                    </div>
                                @endif
                                <form wire:submit="sendMessage">
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="form-name">Your Name</label>
                                            <input type="text" id="form-name" class="form-control @error('name') is-invalid @enderror" placeholder="Your Name" wire:model="name">
                                            @error('name') <p class="text-danger">{{$message}}</p> @enderror
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="form-email">Email</label>
                                            <input type="email" id="form-email" class="form-control @error('email') is-invalid @enderror" placeholder="Email Address" wire:model="email">
                                            @error('email') <p class="text-danger">{{$message}}</p> @enderror
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="form-subject">Phone</label>
                                        <input type="text" id="form-subject" class="form-control @error('phone') is-invalid @enderror" placeholder="Phone" wire:model="phone">
                                        @error('phone') <p class="text-danger">{{$message}}</p> @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="form-subject">Subject</label>
                                        <input type="text" id="form-subject" class="form-control @error('subject') is-invalid @enderror" placeholder="Subject" wire:model="subject">
                                        @error('subject') <p class="text-danger">{{$message}}</p> @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="form-message">Message</label>
                                        <textarea id="form-message" class="form-control @error('message') is-invalid @enderror" rows="4" wire:model="message"></textarea>
                                        @error('message') <p class="text-danger">{{$message}}</p> @enderror
                                    </div>
                                    <button type="submit" class="btn btn-primary">Send Message</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
