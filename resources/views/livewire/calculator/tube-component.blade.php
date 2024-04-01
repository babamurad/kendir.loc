<div>
    <h1 class="my-4 text-center" >{{__('calc.tube')}}</h1>

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
                            {!! __('calc.text-tube') !!}
                        </div>

                        <div class="form-group">
                            <div class="row calc">
                                <label class="col-sm-4 control-label" for="inputFirstName">{{__('calc.Diameter mm.')}}</label>
                                <div class="col-sm-8">
                                    <input class="form-control" type="number" id="inputFirstName" wire:model.live="diameter">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row calc">
                                <label class="col-sm-4 control-label" for="inputFirstName">{{__('calc.Thickness S, mm.')}}</label>
                                <div class="col-sm-8">
                                    <input class="form-control" type="number" id="inputFirstName" wire:model.live="tickness">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row calc">
                                <label class="col-sm-4 control-label" for="inputFirstName">{{__('calc.Length, m.')}}</label>
                                <div class="col-sm-8">
                                    <input class="form-control" type="number" id="inputFirstName"wire:model.live="length">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Panel 1 -->
                    <!-- Panel 2 -->
                    <div class="tab-pane fade" id="panel2" role="tabpanel">
                        <div class="mb-2">
                            {!! __('calc.tube-length') !!}
                        </div>

                        <div class="tab-pane fade in active show" id="panel1" role="tabpanel">
                            <div class="form-group">
                                <div class="row calc">
                                    <label class="col-sm-4 control-label" for="inputFirstName">{{__('calc.Diameter mm.')}}</label>
                                    <div class="col-sm-8">
                                        <input class="form-control" type="number" id="inputFirstName" wire:model.live="diameter">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row calc">
                                    <label class="col-sm-4 control-label" for="inputFirstName">{{__('calc.Thickness S, mm.')}}</label>
                                    <div class="col-sm-8">
                                        <input class="form-control" type="number" id="inputFirstName" wire:model.live="tickness">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row calc">
                                    <label class="col-sm-4 control-label" for="inputFirstName">{{__('calc.Weight')}}</label>
                                    <div class="col-sm-8">
                                        <input class="form-control" type="number" id="inputFirstName"wire:model.live="weight">
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
                    <div class="card-img-top mt-2 p-3 h-50"><img src="{{ asset('images/calculator/truba_calc.svg') }}" alt=""></div>
                    <div class="card-title">
                        @if($lw)
                            <span> <strong>{{__('calc.Weight')}}:</strong> </span>
                            <h3 class="text-primary ">{{ $resWeight }} {{__('kg')}}</h3>
                        @else
                            <span> <strong>{{__('calc.Length')}}:</strong> </span>
                            <h3 class="text-primary ">{{ $resLength }} {{__('meter')}}</h3>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>



</div>
