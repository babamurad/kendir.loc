@section('title', __('Calculator'))
<div class="container">
    <div class="row">
        <div class="col-md-12 d-flex justify-content-center">
            <a class="p-2" role="button" wire:click="clickShowArmature">
                <div class="card pt-3 m-2 calculator_nav h-100 w-100 pb-0">
                    <div class="card-image"><img src="{{ asset('images/calculator/armatura.svg') }}" alt="{{__('Armatura')}}">
                    </div>
                    <div class="card-title mb-0 mt-2"><span>{{__('Armature')}}</span></div>
                </div>
            </a>
            <a class="p-2" role="button" wire:click="clickTube">
                <div class="card pt-3 m-2 calculator_nav h-100 w-100 pb-0">
                    <div class="card-image"><img src="{{ asset('images/calculator/truba.svg') }}" alt="">
                    </div>
                    <div class="card-title mb-0 mt-2"><span>{{__('Tube')}}</span></div>
                </div>
            </a>
            <a class="p-2" role="button" wire:click="clickSteelPlate">
                <div class="card pt-3 m-2 calculator_nav h-100 w-100 pb-0">
                    <div class="card-image"><img src="{{ asset('images/calculator/list.svg') }}" alt="">
                    </div>
                    <div class="card-title mb-0 mt-2"><span>{{__('Steel Plate')}}</span></div>
                </div>
            </a>
            <a class="p-2" role="button" wire:click="clickRoubdBar">
                <div class="card pt-3 m-2 calculator_nav h-100 w-100 pb-0">
                    <div class="card-image"><img src="{{ asset('images/calculator/krug.svg') }}" alt="">
                    </div>
                    <div class="card-title mb-0 mt-2"><span>{{__('Round bar')}}</span></div>
                </div>
            </a>
            <a class="p-2" role="button" wire:click="clickProfileTube">
                <div class="card pt-3 m-2 calculator_nav h-100 w-100 pb-0">
                    <div class="card-image"><img src="{{ asset('images/calculator/profil.svg') }}" alt="">
                    </div>
                    <div class="card-title mb-0 mt-2"><span>{{__('Profil tube')}}</span></div>
                </div>
            </a>
            <a class="p-2" role="button" wire:click="clickSquareBar">
                <div class="card pt-3 m-2 calculator_nav h-100 w-100 pb-0">
                    <div class="card-image"><img src="{{ asset('images/calculator/kvadrat.svg') }}" alt="">
                    </div>
                    <div class="card-title mb-0 mt-2"><span>{{__('Square bar')}}</span></div>
                </div>
            </a>
            <a class="p-2" role="button" wire:click="clickAngle">
                <div class="card pt-3 m-2 calculator_nav h-100 w-100 pb-0">
                    <div class="card-image"><img src="{{ asset('images/calculator/ugolok.svg') }}" alt="">
                    </div>
                    <div class="card-title mb-0 mt-2"><span>{{__('Angle')}}</span></div>
                </div>
            </a>
            <a class="p-2" role="button" wire:click="clickChannel">
                <div class="card pt-3 m-2 calculator_nav h-100 w-100 pb-0">
                    <div class="card-image"><img src="{{ asset('images/calculator/shveller.svg') }}" alt="">
                    </div>
                    <div class="card-title mb-0 mt-2"><span>{{__('Channel')}}</span></div>
                </div>
            </a>
            <a class="p-2" role="button" wire:click="clickHBeam">
                <div class="card pt-3 m-2 calculator_nav h-100 w-100 pb-0">
                    <div class="card-image"><img src="{{ asset('images/calculator/dvutavr.svg') }}" alt="">
                    </div>
                    <div class="card-title mb-0 mt-2"><span>{{__('H Beam')}}</span></div>
                </div>
            </a>

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


