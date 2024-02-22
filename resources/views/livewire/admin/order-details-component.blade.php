@section('title', __('Order Details'))
<div>
    <!-- BEGIN .main-heading -->
    <header class="main-heading">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-8">
                    <div class="page-icon">
                        <i class="icon-tabs-outline"></i>
                    </div>
                    <div class="page-title">
                        <h5>Invoice</h5>
                        <h6 class="sub-heading">Welcome to Kendir Admin Template</h6>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="right-actions">
{{--                        <a href="#" class="btn btn-primary float-right" data-toggle="tooltip" data-placement="left"--}}
{{--                           title="Download Reports">--}}
{{--                            <i class="icon-download4"></i>--}}
{{--                        </a>--}}
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- END: .main-heading -->
    <!-- BEGIN .main-content -->
    <div class="main-content">
        <!-- Row start -->
        <div class="row justify-content-md-center gutters">
            <div class="col-md-9 col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div class="invoice-container">
                            <!-- Row start -->
                            <div class="row gutters">
                                <div class="col-sm-6">
                                    <img src="{{ asset('admin/img/logo.png') }}" alt="Google Dashboards" style="width: 130px;" />
                                </div>
                                <div class="col-sm-6">
                                    <h3 class="text-right text-secondary">Invoice - 00{{ $order->id }}</h3>
                                </div>
                            </div>
                            <!-- Row end -->

                            <div class="spacer30"></div>

                            <!-- Row start -->
                            <div class="row gutters">
                                <div class="col-sm-6">
                                    <p>Hello, Yuki Hayashi.</p>
                                    <p>Thank you for shopping from our store and for your order.</p>
                                </div>
                                <div class="col-sm-6">
                                    <p class="text-right">ORDER <span class="text-primary">#10000048</span></p>
                                    <p class="text-right"><small>{{ \Carbon\Carbon::create($order->created_at)->format('F d, Y') }}</small></p>
                                </div>
                            </div>
                            <!-- Row end -->

                            <div class="spacer50"></div>

                            <!-- Row start -->
                            <div class="row gutters">
                                <div class="col-sm-12">
                                    <table class="table table-hover table-bordered table-responsive table-striped">
                                        <thead>
                                        <tr>
                                            <th>Item</th>
                                            <th>Product ID</th>
                                            <th>Quantity</th>
                                            <th>Subtotal</th>
                                        </tr>
                                        </thead>
                                        <tbody>
{{--                                        @foreach($order->orderItems as $product)--}}
{{--                                        <tr>--}}
{{--                                            <td>{{ $product->name }}</td>--}}
{{--                                            <td>#{{ $product->id }}</td>--}}
{{--                                            <td>{{ $product->qty }}</td>--}}
{{--                                            <td>{{ $product->sale_price }}</td>--}}
{{--                                        </tr>--}}
{{--                                        @endforeach--}}
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- Row end -->

                            <!-- Row start -->
                            <div class="row gutters">
                                <div class="col-md-6 col-sm-12">

                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <table class="table plain">
                                        <tbody>
                                        <tr>
                                            <td>
                                                <p class="text-right">Subtotal</p>
                                                <p class="text-right">Shipping &amp; Handling</p>
                                                <p class="text-right text-secondary"><strong>Grand Total (Incl.Tax)</strong></p>
                                                <p class="text-right">Tax</p>
                                            </td>
                                            <td>
                                                <p class="text-right">$172.99</p>
                                                <p class="text-right">$30.01</p>
                                                <p class="text-right text-secondary"><strong>$205.00</strong></p>
                                                <p class="text-right">$55.79</p>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- Row end -->

                            <div class="spacer20"></div>

                            <!-- Row start -->
                            <div class="row gutters">
                                <div class="col-sm-6">
                                    <p class="text-uppercase">
                                        <strong>Billing Information</strong>
                                    </p>
                                    <address>
                                        <strong>Yuki Hayashi</strong><br>
                                        Public Wales, Somewhere<br>
                                        New York NY,4468, United States<br>
                                        Tel: 000-000-9999<br>
                                    </address>
                                </div>
                                <div class="col-sm-6">
                                    <p class="text-uppercase">
                                        <strong>Payment Method</strong>
                                    </p>
                                    <address>
                                        <strong>Credit Card</strong><br>
                                        Credit Card Type: Visa<br>
                                        Transaction ID: #0009324670<br><br>
                                        <a href="#" class="btn btn-primary btn-sm">Right of Withdrawl</a>
                                    </address>
                                </div>
                            </div>
                            <!-- Row end -->

                            <div class="spacer30"></div>

                            <!-- Row start -->
                            <div class="row gutters">
                                <div class="col-sm-6">
                                    <p class="text-uppercase">
                                        <strong>Shipping Information</strong>
                                    </p>
                                    <address>
                                        <strong>Unify INC.</strong><br>
                                        Another Location, Somewhere<br>
                                        New York NY,4468, United States<br>
                                        Tel: 000-000-6666<br>
                                    </address>
                                </div>
                                <div class="col-sm-6">
                                    <p class="text-uppercase">
                                        <strong>Shipping Method</strong>
                                    </p>
                                    <p class="m-0">UPS: U.S. Shipping Services</p>
                                </div>
                            </div>
                            <!-- Row end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Row end -->
    </div>
    <!-- END: .main-content -->
</div>
