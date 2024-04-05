@section('title', __('Delivery'))
<div>
    <div class="block about-us">
        <div class="about-us__image"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-xl-10">
                    <div class="about-us__body">
                        <h1 class="about-us__title">{{__('Delivery')}}</h1>
                        <div class="about-us__text typography">
                            <div class="bg-white sm:pt-8 pt-4 sm:px-8 px-6 pb-8 sm:text-base text-sm sm:text-left text-justify">
                                <div class="region-custom-page whitespace-pre-line">
                                    <p><strong>{{ $delivery->title }}</strong></p>
                                    {!! $delivery->text !!}

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
