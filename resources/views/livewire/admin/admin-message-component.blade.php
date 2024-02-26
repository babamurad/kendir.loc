<div>
    <header class="main-heading">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-8">
                    <div class="page-icon">
                        <a href="{{ route('admin.contacts') }}"><i class="icon-undo2"></i></a>
                    </div>
                    <div class="page-title">
                        <h5>Message</h5>
                        <h6 class="sub-heading">Welcome to Kendir Admin Template</h6>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="right-actions">
                        <a href="#" class="btn btn-primary float-right" data-toggle="tooltip" data-placement="left" title="" data-original-title="Download Reports">
                            <i class="icon-download4"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="main-content">

        <!-- Row start -->
        <div class="row gutters">

            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title">{{ __('Message') }}</div>
                        <div class="row gutters">
                            <div class="col-sm-4 col-12">
                                <div class="form-group">
                                    <label for="inputReadOnly">Name</label>
                                    <input class="form-control" id="name" type="text" placeholder="Name" readonly="" wire:model="name">
                                </div>
                            </div>
                            <div class="col-sm-4 col-12">
                                <div class="form-group">
                                    <label for="inputReadOnly">Email</label>
                                    <input class="form-control" id="email" type="text" placeholder="Email" readonly="" wire:model="email">
                                </div>
                            </div>
                            <div class="col-sm-4 col-12">
                                <div class="form-group">
                                    <label for="inputReadOnly">Phone</label>
                                    <input class="form-control" id="phone" type="text" placeholder="Phone" readonly="" wire:model="phone">
                                </div>
                            </div>
                            <div class="col-sm-4 col-12">
                                <div class="form-group">
                                    <label for="inputReadOnly">Subject</label>
                                    <input class="form-control" id="subject" type="text" readonly="" wire:model="subject">
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="form-group">
                                    <label for="message">Message</label>
                                    <textarea class="form-control" id="message" rows="3" readonly="" wire:model="message"></textarea>
                                </div>
                            </div>
                            <div class="col-sm-4 col-12">
                            </div>
                            <div class="col-sm-4 col-12">
                                <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input" id="customSwitch1" wire:model.live="arhiw" wire:click="toArchive" {{ $arhiw? 'checked':'' }}>
                                    <label class="custom-control-label" for="customSwitch1">{{ __('To Archive') }}</label>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
        <!-- Row end -->

    </div>
</div>
