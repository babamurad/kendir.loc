@section('title', __('Return'))
<div>
    <div class="block about-us">
        <div class="about-us__image"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-xl-10">
                    <div class="about-us__body">
                        <h4 class="about-us__title">{{ $return->title }}</h4>
                        <div class="about-us__text typography">
                            <div class="bg-white text-justify">

                                    {!! $return->text !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
