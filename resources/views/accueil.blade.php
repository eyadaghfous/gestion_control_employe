@extends('home')

@section('content')

<div class="card">
    <ul class="nav nav-pills custom-pills row" id="pills-tab" role="tablist">
        <li class="nav-item col-4">
            <a class="nav-link text-center active" id="pills-profile-tab" data-toggle="pill" href="#current-month" role="tab" aria-controls="pills-timeline" aria-selected="true"><i class="ik ik-users"></i> Profile</a>
        </li>
        <li class="nav-item col-4">
            <a class="nav-link text-center" id="pills-facturation-tab" data-toggle="pill" href="#last-month" role="tab" aria-controls="pills-profile" aria-selected="false">Facturation</a>
        </li>
        <li class="nav-item col-4">
            <a class="nav-link text-center" id="pills-archived-tab" data-toggle="pill" href="#previous-month" role="tab" aria-controls="pills-setting" aria-selected="false">Archived Projects</a>
        </li>
    </ul>
    <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="current-month" role="tabpanel" aria-labelledby="pills-profile-tab">
            <div class="card-body">
                <div class="container-fluid">
    
                    <div class="row">
                       
                        <!-- product profit start -->
                        <div class="col-xl-4 col-md-4">
                            <div class="card prod-p-card card-red">
                                <div class="card-body">
                                    <div class="row align-items-center mb-30">
                                        <div class="col">
                                            <h6 class="mb-5 text-white">Total Profit</h6>
                                            <h3 class="mb-0 fw-700 text-white">$1,783</h3>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fa fa-money-bill-alt text-red f-18"></i>
                                        </div>
                                    </div>
                                    <p class="mb-0 text-white"><span class="label label-danger mr-10">+11%</span>From Previous Month</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-xl-4 col-md-4">
                            <div class="card prod-p-card card-green">
                                <div class="card-body">
                                    <div class="row align-items-center mb-30">
                                        <div class="col">
                                            <h6 class="mb-5 text-white">Average Price</h6>
                                            <h3 class="mb-0 fw-700 text-white">$6,780</h3>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-dollar-sign text-green f-18"></i>
                                        </div>
                                    </div>
                                    <p class="mb-0 text-white"><span class="label label-success mr-10">+52%</span>From Previous Month</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-4">
                            <div class="card prod-p-card card-yellow">
                                <div class="card-body">
                                    <div class="row align-items-center mb-30">
                                        <div class="col">
                                            <h6 class="mb-5 text-white">Product Sold</h6>
                                            <h3 class="mb-0 fw-700 text-white">6,784</h3>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-tags text-warning f-18"></i>
                                        </div>
                                    </div>
                                    <p class="mb-0 text-white"><span class="label label-warning mr-10">+52%</span>From Previous Month</p>
                                </div>
                            </div>
                        </div>
                        
                        <!-- analytic card start -->
                        <div class="col-xl-4 col-md-4">
                            <div class="card analytic-card widget bg-purple">
                                <div class="card-body">
                                    <div class="row align-items-center mb-30">
                                        <div class="col-auto">
                                            <i class="fas fa-shopping-cart text-purple f-18 analytic-icon"></i>
                                        </div>
                                        <div class="col text-right">
                                            <h3 class="mb-5 text-white">15,678</h3>
                                            <h6 class="mb-0 text-white">Total Sales</h6>
                                        </div>
                                    </div>
                                    <p class="mb-0  text-white d-inline-block">Total Income : </p>
                                    <h5 class=" text-white d-inline-block mb-0 ml-10">$2,451</h5>
                                    <h6 class="mb-0 d-inline-block  text-white float-right"><i class="fas fa-caret-up mr-10 f-18"></i>10%</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-4">
                            <div class="card analytic-card card-blue">
                                <div class="card-body">
                                    <div class="row align-items-center mb-30">
                                        <div class="col-auto">
                                            <i class="fas fa-users text-blue f-18 analytic-icon"></i>
                                        </div>
                                        <div class="col text-right">
                                            <h3 class="mb-5 text-white">1,678</h3>
                                            <h6 class="mb-0 text-white">Total Users</h6>
                                        </div>
                                    </div>
                                    <p class="mb-0 text-white d-inline-block">Total Revenue : </p>
                                    <h5 class="text-white d-inline-block mb-0 ml-10">$2,451</h5>
                                    <h6 class="mb-0 d-inline-block text-white float-right"><i class="fas fa-caret-up mr-10 f-18"></i>30%</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-4">
                            <div class="card analytic-card widget bg-lime">
                                <div class="card-body">
                                    <div class="row align-items-center mb-30">
                                        <div class="col-auto">
                                            <i class="fas fa-file-code text-lime f-18 analytic-icon"></i>
                                        </div>
                                        <div class="col text-right">
                                            <h3 class="mb-5 text-white">15,678</h3>
                                            <h6 class="mb-0 text-white">Total Project</h6>
                                        </div>
                                    </div>
                                    <p class="mb-0 d-inline-block text-white">Active Projects : </p>
                                    <h5 class="text-white d-inline-block mb-0 ml-10">$2,451</h5>
                                    <h6 class="mb-0 d-inline-block text-white float-right"><i class="fas fa-caret-down mr-10 f-18"></i>10%</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="last-month" role="tabpanel" aria-labelledby="pills-facturation-tab">
            <div class="card-body">
                <div class="row">
                    <div class="col-6">
                        <p class="lead">Payment Methods:</p>
                        <img src="{{ asset('img/credit/visa.png') }}" alt="Visa">
                        <img src="{{ asset('img/credit/mastercard.png') }}" alt="Mastercard">
                        <img src="{{ asset('img/credit/american-express.png') }}" alt="American Express">
                        <img src="{{ asset('img/credit/paypal2.png') }}" alt="Paypal">

                        <div class="alert alert-secondary mt-20">
                            Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles, weebly ning heekya handango imeem plugg dopplr jibjab, movity jajah plickers sifteo edmodo ifttt zimbra.
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="card">
                            <div class="card-header"><h3>Add invoice</h3></div>
                            <div class="card-body">
                                <form>
                                    <div class="form-group row">
                                        <div class="col-sm-12">
                                            <input type="text" class="form-control form-control-lg" placeholder="Numéro du carte">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-12">
                                            <input type="text" class="form-control datetimepicker-input" id="datepicker" data-toggle="datetimepicker" data-target="#datepicker">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-12">
                                            <input type="text" class="form-control form-control-lg" placeholder="Crypto visuel">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
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

            </div>
        </div>
        <div class="tab-pane fade" id="previous-month" role="tabpanel" aria-labelledby="pills-archived-tab">
            <div class="card-body">
                <div class="card">
                    
                    <div class="card-body p-0 table-border-style">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Username</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                        <td>@fat</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>Larry</td>
                                        <td>the Bird</td>
                                        <td>@twitter</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection