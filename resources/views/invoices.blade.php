@extends('home')

@section('content')
               <div class="container-fluid">
                    <div class="page-header">
                        <div class="row align-items-end">
                            <div class="col-lg-8">
                                <div class="page-header-title">
                                    <i class="ik ik-file-text bg-blue"></i>
                                    <div class="d-inline">
                                        <h5>Invoice</h5>
                                        <span>lorem ipsum dolor sit amet, consectetur adipisicing elit</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <nav class="breadcrumb-container" aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item">
                                            <a href="../index.html"><i class="ik ik-home"></i></a>
                                        </li>
                                        <li class="breadcrumb-item">
                                            <a href="#">Pages</a>
                                        </li>
                                        <li class="breadcrumb-item active" aria-current="page">Invoice</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <h3 class="d-block w-100">ThemeKit<small class="float-right">Date: 12/11/2018</small></h3>
                        </div>
                        <div class="card-body">
                            <div class="row invoice-info">
                                <div class="col-sm-4 invoice-col">
                                    From
                                    <address>
                                            <strong>ThemeKit,</strong><br>795 Folsom Ave, Suite 546 <br>San Francisco, CA 54656 <br>Phone: (123) 123-4567<br>Email: info@themekit.com
                                        </address>
                                </div>
                                <div class="col-sm-4 invoice-col">
                                    To
                                    <address>
                                            <strong>John Doe</strong><br>795 Folsom Ave, Suite 600<br>San Francisco, CA 94107<br>Phone: (555) 123-7654<br>Email: john.doe@example.com
                                        </address>
                                </div>
                                <div class="col-sm-4 invoice-col">
                                    <b>Invoice #007612</b><br>
                                    <br>
                                    <b>Order ID:</b> 4F3S8J<br>
                                    <b>Payment Due:</b> 2/22/2014<br>
                                    <b>Account:</b> 968-34567
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-12 table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>Qty</th>
                                                <th>Product</th>
                                                <th>Serial #</th>
                                                <th>Description</th>
                                                <th>Subtotal</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Call of Duty</td>
                                                <td>455-981-221</td>
                                                <td>El snort testosterone trophy driving gloves handsome</td>
                                                <td>$64.50</td>
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>Need for Speed IV</td>
                                                <td>247-925-726</td>
                                                <td>Wes Anderson umami biodiesel</td>
                                                <td>$50.00</td>
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>Monsters DVD</td>
                                                <td>735-845-642</td>
                                                <td>Terry Richardson helvetica tousled street art master</td>
                                                <td>$10.70</td>
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>Grown Ups Blue Ray</td>
                                                <td>422-568-642</td>
                                                <td>Tousled lomo letterpress</td>
                                                <td>$25.99</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-6">
                                    <p class="lead">Payment Methods:</p>
                                    <img src="../img/credit/visa.png" alt="Visa">
                                    <img src="../img/credit/mastercard.png" alt="Mastercard">
                                    <img src="../img/credit/american-express.png" alt="American Express">
                                    <img src="../img/credit/paypal2.png" alt="Paypal">

                                    <div class="alert alert-secondary mt-20">
                                        Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles, weebly ning heekya handango imeem plugg dopplr jibjab, movity jajah plickers sifteo edmodo ifttt zimbra.
                                    </div>
                                </div>
                                <div class="col-6">
                                    <p class="lead">Amount Due 10/11/2018</p>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <tr>
                                                <th style="width:50%">Subtotal:</th>
                                                <td>$250.30</td>
                                            </tr>
                                            <tr>
                                                <th>Tax (9.3%)</th>
                                                <td>$10.34</td>
                                            </tr>
                                            <tr>
                                                <th>Shipping:</th>
                                                <td>$5.80</td>
                                            </tr>
                                            <tr>
                                                <th>Total:</th>
                                                <td>$265.24</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="row no-print">
                                <div class="col-12">
                                    <button type="button" class="btn btn-success pull-right"><i class="fa fa-credit-card"></i> Submit Payment</button>
                                    <button type="button" class="btn btn-primary pull-right" style="margin-right: 5px;"><i class="fa fa-download"></i> Generate PDF</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           
        </div>
    </div>

@endsection