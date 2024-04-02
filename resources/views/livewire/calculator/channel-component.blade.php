<div>
    <h1 class="my-4 text-center" >{{__('calc.Channel')}}</h1>

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
                    <!-- Panel 1 -->                    <div class="tab-pane fade in active show" id="panel1" role="tabpanel">
                        <div class="mb-2">
                            <span>Формула для расчета одного погонного метра металлического швеллера:</span> <br>
                            <span>S = 2 * b * t + (h - 2 * t) * s</span> <br>
                            <span>W = S × ρ × L</span><br>
                            <span>h – высота швеллера, мм; b – ширина полки, мм</span>
                            <span>t – толщина полки, мм; s – толщина стенки, мм</span>
                            <span>ρ – плотность металла</span>
                        </div>

                        <div class="form-group">
                            <div class="row calc">
                                <label class="col-sm-6 control-label" for="height">{{__('calc.Height H')}} {{ __('calc.mm.') }}</label>
                                <div class="col-sm-6">
                                    <input class="form-control" type="number" id="height" wire:model.live="height">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row calc">
                                <label class="col-sm-6 control-label" for="sbold">{{__('calc.Shelf width S')}} {{ __('calc.mm.') }}</label>
                                <div class="col-sm-6">
                                    <input class="form-control" type="number" id="sbold" wire:model.live="sbold">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row calc">
                                <label class="col-sm-6 control-label" for="wtikness">{{__('calc.Wall thickness S')}} {{ __('calc.mm.') }}</label>
                                <div class="col-sm-6">
                                    <input class="form-control" type="number" id="wtikness" wire:model.live="wtikness">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row calc">
                                <label class="col-sm-6 control-label" for="stikness">{{__('calc.Shelf thickness T')}} {{ __('calc.mm.') }}</label>
                                <div class="col-sm-6">
                                    <input class="form-control" type="number" id="stikness" wire:model.live="stikness">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row calc">
                                <label class="col-sm-6 control-label" for="length">{{__('calc.Length')}} {{__('calc.m.')}}</label>
                                <div class="col-sm-6">
                                    <input class="form-control" type="number" id="length" wire:model.live="length">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Panel 1 -->
                    <!-- Panel 2 -->
                    <div class="tab-pane fade" id="panel2" role="tabpanel">
                        <div class="mb-2">
                            <span>Формула для расчета веса металлического уголка </span><br>
                            <span>M = (A + B - t) * t * 7.85 / 1000</span>
                        </div>
                        <div class="tab-pane fade in active show" id="panel1" role="tabpanel">
                            <div class="form-group">
                                <div class="row calc">
                                    <label class="col-sm-6 control-label" for="height">{{__('calc.Height H')}} {{ __('calc.mm.') }}</label>
                                    <div class="col-sm-6">
                                        <input class="form-control" type="number" id="height" wire:model.live="height" min="1">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row calc">
                                    <label class="col-sm-6 control-label" for="sbold">{{__('calc.Shelf width S')}} {{ __('calc.mm.') }}</label>
                                    <div class="col-sm-6">
                                        <input class="form-control" type="number" id="sbold" wire:model.live="sbold" min="1">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row calc">
                                    <label class="col-sm-6 control-label" for="wtikness">{{__('calc.Wall thickness S')}} {{ __('calc.mm.') }}</label>
                                    <div class="col-sm-6">
                                        <input class="form-control" type="number" id="wtikness" wire:model.live="wtikness" min="1">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row calc">
                                    <label class="col-sm-6 control-label" for="stikness">{{__('calc.Shelf thickness T')}} {{ __('calc.mm.') }}</label>
                                    <div class="col-sm-6">
                                        <input class="form-control" type="number" id="stikness" wire:model.live="stikness" min="1">
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
                    <div class="card-img-top mt-2 p-3 h-50"><img src="{{ asset('images/calculator/shveller_calc.svg') }}" alt=""></div>
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

