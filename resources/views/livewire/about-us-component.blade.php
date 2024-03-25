@section('title', __('About Us'))
<div>
    <div class="block about-us">
        <div class="about-us__image"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-xl-10">
                    <div class="about-us__body">
                        <h1 class="about-us__title">{{ $about->title }}</h1>
                        <div class="about-us__text typography">
                            <p>
                                {!! $about->text !!}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
