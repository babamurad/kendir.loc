@section('title', __('Order Details'))
<div>
    <style>
        @media print {
            .header, .footer, .banner {
                display: none;
            }
            #app-side{
                display: none;
            }
            .app-header{
                display: none;
            }
            .container-fluid{
                display: none;
            }
            .btn-sm{
                display: none;
            }
        }
    </style>
    <!-- BEGIN .main-heading -->
    <header class="main-heading">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-8">
                    <div class="page-icon">
                        <a href="{{ route('admin.orders') }}"><i class="icon-undo2"></i></a>
                    </div>
                    <div class="page-title">
                        <h5>Invoice</h5>
                        <h6 class="sub-heading">Welcome to Kendir Admin Template</h6>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="right-actions mr-3">
                        <a href="#" id="action-print" class="btn btn-primary float-right" data-toggle="tooltip" data-placement="top"
                           title="Print Invoice">
                            <i class="icon-printer2"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- END: .main-heading -->
    @push('print')
        <script>
            $(function($){
                $("#action-print").click(function(){
                    window.print();
                    return false;
                });
            });
        </script>
    @endpush

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
                                            <th>Product ID</th>
                                            <th>Product Name</th>
                                            <th>Price</th>
                                            <th>Quantity</th>
                                            <th>Subtotal</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($order->orderItems as $product)
                                        <tr>
                                            <td>{{ $product->id }}</td>
                                            <td>{{ $product->product->name }}</td>
                                            <td>{{ $product->price }}</td>
                                            <td>{{ $product->quantity }}</td>
                                            <td>{{ number_format((float)$product->price*$product->quantity, 2, '.', '') }}</td>
                                        </tr>
                                        @endforeach
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
                                                <p>Subtotal</p>
                                                <p>Shipping &amp; Handling</p>
                                                <p class="text-secondary"><strong>Grand Total (Incl.Tax)</strong></p>
                                                <p>Tax</p>
                                            </td>
                                            <td>
                                                <p>{{ $order->subtotal }}</p>
                                                <p>Free Shipping</p>
                                                <p class="text-secondary"><strong>{{ $order->total }}</strong></p>
                                                <p>{{ $order->tax }}</p>
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
                                        <strong>{{ $order->firstname.' '.$order->lastname }}</strong><br>
                                        {{ $order->line1.', '.$order->line2 }}<br>
                                        {{ $order->city.', '.$order->province }}<br>
                                        {{ $order->zipcode }}<br>
                                        Tel: {{ $order->mobile }}<br>
                                    </address>
                                </div>
                                <div class="col-sm-6">
                                    <p class="text-uppercase">
                                        <strong>{{ __('Payment Method') }}</strong>
                                    </p>
                                    <address>
                                        <strong>{{ ucfirst($order->transaction->mode) }}</strong><br>
                                        Status: {{ $order->transaction->status }}<br>
                                        Transaction ID: #{{ $order->transaction->id }}<br><br>
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
                                        {{ $order->line1.', '.$order->line2 }}<br>
                                        {{ $order->city.', '.$order->province }}<br>
                                        Tel: {{ $order->mobile }}<br>
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
