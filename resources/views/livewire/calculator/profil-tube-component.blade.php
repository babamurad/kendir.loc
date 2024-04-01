<div>
    <h1 class="my-4 text-center" >{{__('calc.Profil tube')}}</h1>

    <div class="container-fluid">
        <div class="row ">
            <div class="col-sm-6 mb-4" wire:ignore>

                <!-- Nav tabs -->
                <ul class="nav md-tabs nav-justified">
                    <li class="nav-item waves-effect waves-light ml-2" wire:click.prevent="changeLW">
                        <a class="nav-link active" data-toggle="tab" href="#panel1" role="tab" aria-selected="true">{{__('calc.By length')}}</a>
                    </li>
                    <li class="nav-item waves-effect waves-light" wire:click.prevent="changeWL">
                        <a class="nav-link" data-toggle="tab" href="#panel2" role="tab" aria-selected="false">{{__('calc.By weight')}}</a>
                    </li>
                </ul>
                <!-- Tab panels -->
                <div class="tab-content card" style="margin-top: -12px;">
                    <!-- Panel 1 -->
                    <div class="tab-pane fade in active show" id="panel1" role="tabpanel">
                        <div class="mb-2">
                            <span>Вычисление массы профильной трубы.</span><br>
                            <span>M = ρ * A * L</span><br>
                            <span>Где:</span>
                            <span>M - масса трубы (кг)</span> <br>
                            <span>ρ - плотность материала трубы (кг/м³)</span> <br>
                            <span>A - площадь поперечного сечения трубы (м²)</span> <br>
                            <span>L - длина трубы (м)</span> <br>
                        </div>

                        <div class="form-group">
                            <div class="row calc">
                                <label class="col-sm-4 control-label" for="isideA">{{__('calc.Side A')}} {{ __('calc.mm.') }}</label>
                                <div class="col-sm-8">
                                    <input class="form-control" type="number" id="sideA" wire:model.live="sideA">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row calc">
                                <label class="col-sm-4 control-label" for="sideB">{{__('calc.Side B')}} {{ __('calc.mm.') }}</label>
                                <div class="col-sm-8">
                                    <input class="form-control" type="number" id="sideB" wire:model.live="sideB">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row calc">
                                <label class="col-sm-4 control-label" for="tikness">{{__('calc.Thickness S, mm.')}}</label>
                                <div class="col-sm-8">
                                    <input class="form-control" type="number" id="tikness" wire:model.live="tikness">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row calc">
                                <label class="col-sm-4 control-label" for="length">{{__('calc.Length')}} {{__('calc.m.')}}</label>
                                <div class="col-sm-8">
                                    <input class="form-control" type="number" id="length" wire:model.live="length">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Panel 1 -->
                    <!-- Panel 2 -->
                    <div class="tab-pane fade" id="panel2" role="tabpanel">
                        <div class="mb-2">
                            <span>Длина гладкой арматуры (L) рассчитывается по следующей формуле:</span><br>
                            <span>L = (M / (ρ * π * (d/2)^2))</span><br>
                            <span>Где:</span>
                            <span>d - диаметр гладкой арматуры, мм</span> <br>
                            <span>M - масса арматуры в килограммах (кг)</span> <br>
                            <span>π - число Пи</span> <br>
                            <span>ρ - плотность стали, 7850 кг/м^3</span> <br>
                        </div>

                        <div class="tab-pane fade in active show" id="panel1" role="tabpanel">
                            <div class="form-group">
                                <div class="row calc">
                                    <label class="col-sm-4 control-label" for="isideA">{{__('calc.Side A')}} {{ __('calc.mm.') }}</label>
                                    <div class="col-sm-8">
                                        <input class="form-control" type="number" id="sideA" wire:model.live="sideA">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row calc">
                                    <label class="col-sm-4 control-label" for="sideB">{{__('calc.Side B')}} {{ __('calc.mm.') }}</label>
                                    <div class="col-sm-8">
                                        <input class="form-control" type="number" id="sideB" wire:model.live="sideB">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row calc">
                                    <label class="col-sm-4 control-label" for="tikness">{{__('calc.Thickness S, mm.')}}</label>
                                    <div class="col-sm-8">
                                        <input class="form-control" type="number" id="tikness" wire:model.live="tikness">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row calc">
                                    <label class="col-sm-4 control-label" for="weight">{{__('calc.Weight')}}</label>
                                    <div class="col-sm-8">
                                        <input class="form-control" type="number" id="weight" wire:model.live="weight">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Panel 2 -->
                </div>

            </div>
            <div class="col-sm-6 mb-4">
                <div class="card text-center">
                    <div class="card-img-top mt-2 p-3 h-50"><img src="{{ asset('images/calculator/profil_calc.svg') }}" alt=""></div>
                    <div class="card-title">
                        @if($lw)
                            <span> <strong>{{__('calc.Weight')}}:</strong> </span>
                            <h3 class="text-primary ">{{ $resWeight }} {{__('calc.kg.')}}</h3>
                        @else
                            <span> <strong>{{__('calc.Length')}}, {{ __('calc.m') }}:</strong> </span>
                            <h3 class="text-primary ">{{ $resLength }} {{__('calc.m.')}}</h3>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>



</div>

