@extends('backend.Admin.master')
@section('title','Expenses')
@section('body')
           <!-- [ breadcrumb ] start -->
           <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center justify-content-between">
                    <div class="col-sm-auto">
                        <div class="page-header-title">
                            <h5 class="mb-0">Home</h5>
                        </div>
                    </div>
                    <div class="col-sm-auto">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a
                                    href="http://html.phoenixcoded.net/flatable/navigation/index.html"><i
                                        class="ph-duotone ph-house"></i></a></li>
                            <li class="breadcrumb-item"><a href="javascript: void(0)">Dashboard</a></li>
                            <li class="breadcrumb-item" aria-current="page">Home</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div><!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row">
            <!-- table card-1 start -->
            <div class="col-xxl-4 col-md-6">
                <div class="card flat-card card-border-none">
                    <div class="row-table">
                        <div class="col-sm-6 card-body w-50 br">
                            <div class="row">
                                <div class="col-4"><i class="material-icons-two-tone text-success">visibility</i>
                                </div>
                                <div class="col-8 text-md-center">
                                    <h5>10k</h5><span>Visitors</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 card-body w-50">
                            <div class="row">
                                <div class="col-4"><i class="material-icons-two-tone text-danger">radio</i></div>
                                <div class="col-8 text-md-center">
                                    <h5>100%</h5><span>Volume</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row-table">
                        <div class="col-sm-6 card-body w-50 br">
                            <div class="row">
                                <div class="col-4"><i class="material-icons-two-tone text-primary">description</i>
                                </div>
                                <div class="col-8 text-md-center">
                                    <h5>2000 +</h5><span>Files</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 card-body w-50">
                            <div class="row">
                                <div class="col-4"><i class="material-icons-two-tone text-warning">move_to_inbox</i>
                                </div>
                                <div class="col-8 text-md-center">
                                    <h5>120</h5><span>Mails</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- table card-1 end -->
            <!-- table card-2 start -->
            <div class="col-xxl-4 col-md-6">
                <div class="card flat-card card-border-none">
                    <div class="row-table">
                        <div class="col-sm-6 card-body w-50 br">
                            <div class="row">
                                <div class="col-4"><i class="material-icons-two-tone text-primary">local_florist</i>
                                </div>
                                <div class="col-8 text-md-center">
                                    <h5>1000</h5><span>Shares</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 card-body w-50">
                            <div class="row">
                                <div class="col-4"><i class="material-icons-two-tone text-primary">router</i></div>
                                <div class="col-8 text-md-center">
                                    <h5>600</h5><span>Network</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row-table">
                        <div class="col-sm-6 card-body w-50 br">
                            <div class="row">
                                <div class="col-4"><i
                                        class="material-icons-two-tone text-primary">filter_vintage</i></div>
                                <div class="col-8 text-md-center">
                                    <h5>3550</h5><span>Returns</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 card-body w-50">
                            <div class="row">
                                <div class="col-4"><i class="material-icons-two-tone text-primary">local_mall</i>
                                </div>
                                <div class="col-8 text-md-center">
                                    <h5>100%</h5><span>Order</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- table card-2 end -->

        </div><!-- [ Main Content ] end -->
@endsection