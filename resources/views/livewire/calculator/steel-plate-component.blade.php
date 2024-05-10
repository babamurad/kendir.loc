<div>
    <h1 class="my-4 text-center" >{{__('calc.Steel Plate')}}</h1>

    <div class="container-fluid">
        <div class="row ">
            <div class="col-sm-6 mb-4" wire:ignore>

                <!-- Nav tabs -->
                <ul class="nav md-tabs nav-justified">
                    <li class="nav-item waves-effect waves-light ml-2" wire:click.prevent="changeLW">
                        <a class="nav-link active" data-toggle="tab" href="#panel1" role="tab" aria-selected="true">1 {{__('calc.piece')}}</a>
                    </li>
                    <li class="nav-item waves-effect waves-light" wire:click.prevent="changeWL">
                        <a class="nav-link" data-toggle="tab" href="#panel2" role="tab" aria-selected="false">1 {{__('calc.m²')}}</a>
                    </li>
                </ul>
                <!-- Tab panels -->
                <div class="tab-content card" style="margin-top: -12px;">
                    <!-- Panel 1 -->
                    <div class="tab-pane fade in active show" id="panel1" role="tabpanel">
                        <div class="mb-1">
                            <span>Формула расчета веса стальной пластины:</span> <br>
                            <span> <strong>Вес = Площадь * Толщина * Плотность</strong> </span> <br>
                            Вес: Вес стального листа в кг <br>
                            Площадь: Площадь листа в м² <br>
                            Толщина: Толщина листа в мм <br>
                            Плотность: Плотность стали, обычно принимается 7850 кг/м³ <br>
                        </div>

                        <div class="form-group">
                            <div class="row calc">
                                <label class="col-sm-4 control-label" for="plateLenght">{{__('calc.Length')}} {{ __('calc.mm.') }} </label>
                                <div class="col-sm-8">
                                    <input class="form-control" type="number" id="plateLenght" step="10" wire:model.live="length">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row calc">
                                <label class="col-sm-4 control-label" for="plateWidth">{{__('calc.Width')}} {{ __('calc.mm.') }}</label>
                                <div class="col-sm-8">
                                    <input class="form-control" type="number" id="plateWidth" step="10" wire:model.live="width">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row calc">
                                <label class="col-sm-4 control-label" for="inputFirstName">{{__('calc.Thickness')}} {{ __('calc.mm.') }}</label>
                                <div class="col-sm-8">
                                    <input class="form-control" type="number" id="inputFirstName" step="0.1" wire:model.live="tickness">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row calc">
                                <label class="col-sm-4 control-label" for="inputFirstName">{{__('calc.Quantity')}} {{ __('calc.piece') }}</label>
                                <div class="col-sm-8">
                                    <input class="form-control" type="number" id="inputFirstName" wire:model.live="qty">
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- Panel 1 -->
                    <!-- Panel 2 -->
                    <div class="tab-pane fade" id="panel2" role="tabpanel">
                        <div class="mb-2">
                            <span>Формула расчета веса стальной пластины:</span> <br>
                            <span> <strong>Вес = Площадь * Толщина * Плотность</strong> </span> <br>
                            Вес: Вес стального листа в кг <br>
                            Площадь: Площадь листа в м² <br>
                            Толщина: Толщина листа в мм <br>
                            Плотность: Плотность стали, обычно принимается 7850 кг/м³ <br>
                        </div>

                        <div class="tab-pane fade in active show" id="panel1" role="tabpanel">
                            <div class="form-group">
                                <div class="row calc">
                                    <label class="col-sm-4 control-label" for="inputFirstName">{{__('calc.Thickness')}} {{ __('calc.mm.') }}</label>
                                    <div class="col-sm-8">
                                        <input class="form-control" type="number" id="inputFirstName" step="0.1" wire:model.live="tickness">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row calc">
                                    <label class="col-sm-4 control-label" for="inputFirstName">{{__('calc.Quantity')}} {{ __('calc.m²') }}</label>
                                    <div class="col-sm-8">
                                        <input class="form-control" type="number" id="inputFirstName" wire:model.live="qty">
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
                    <div class="card-img-top mt-2 p-3 h-50"><img src="{{ asset('images/calculator/list_calc.svg') }}" alt=""></div>
                    <div class="card-title">
                        @if($lw)
                            <span> <strong>{{__('calc.Weight')}}:</strong> </span>
                            <h3 class="text-primary ">{{ $resWeight }} {{__('kg')}}</h3>
                        @else
                            <span> <strong>{{__('calc.Weight')}}:</strong> </span>
                            <h3 class="text-primary ">{{ $resKv }} {{__('kg')}}</h3>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>



</div>
