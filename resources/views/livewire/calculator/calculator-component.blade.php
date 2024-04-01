@section('title', __('Calculator'))
<div>

    <div class="container">
        <div class="row">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap flex-lg-nowrap">
                @foreach($metals as $metal)
                    <div class="p-2 ">
                        <a id="{{$metal['slug']}}"  role="button" wire:click="{{$metal['name']}}">
                            <div class="card pt-3 m-2 calculator_nav h-100 w-100 pb-0">
                                <div class="card-image"><img src="{{ asset($metal['image']) }}" alt="{{__('Armatura')}}">
                                </div>
                                <div class="card-title mb-0 mt-2"><span>{{__($metal['title'] )}}</span></div>
                            </div>
                        </a>
                    </div>

                @endforeach
            </div>
        </div>

        @if($showArmature) <livewire:calculator.armature-component /> @endif
        @if($showTube) <livewire:calculator.tube-component /> @endif
        @if($showSteelPlate) <livewire:calculator.steel-plate-component /> @endif
        @if($showRoundBar) <livewire:calculator.round-bar-component /> @endif
        @if($showProfilTube) <livewire:calculator.profil-tube-component /> @endif
        @if($showSquareBar) <livewire:calculator.square-bar-component /> @endif
        @if($showAngle) <livewire:calculator.angle-component /> @endif
        @if($showChannel) <livewire:calculator.channel-component /> @endif
        @if($showHBeam) <livewire:calculator.h-beam-component /> @endif



    </div>
</div>





