@extends('layouts.master')
@section('title')
    @lang('translation.Apex_Charts')
@endsection

@section('content')
    @component('common-components.breadcrumb')
        @slot('pagetitle')
            Charts
        @endslot
        @slot('title')
            Apex Charts
        @endslot
    @endcomponent

    <div class="row">
        <div class="col-md-6 col-xl-3">
            <div class="card">
                <div class="card-body">
                    <div class="float-end mt-2">
                        <div id="total-revenue-chart"></div>
                    </div>
                    <div>
                        <h4 class="mb-1 mt-1">$<span data-plugin="counterup">34,152</span></h4>
                        <p class="text-muted mb-0">Sales Amount</p>
                    </div>
                    <p class="text-muted mt-3 mb-0"><span class="text-success me-1"><i
                                class="mdi mdi-arrow-up-bold me-1"></i>2.65%</span> since last week
                    </p>
                </div>
            </div>
        </div> <!-- end col-->

        <div class="col-md-6 col-xl-3">
            <div class="card">
                <div class="card-body">
                    <div class="float-end mt-2">
                        <div id="orders-chart"> </div>
                    </div>
                    <div>
                        <h4 class="mb-1 mt-1"><span data-plugin="counterup">5,643</span></h4>
                        <p class="text-muted mb-0">Orders</p>
                    </div>
                    <p class="text-muted mt-3 mb-0"><span class="text-danger me-1"><i
                                class="mdi mdi-arrow-down-bold me-1"></i>0.82%</span> since last week
                    </p>
                </div>
            </div>
        </div> <!-- end col-->

        <div class="col-md-6 col-xl-3">
            <div class="card">
                <div class="card-body">
                    <div class="float-end mt-2">
                        <div id="customers-chart"> </div>
                    </div>
                    <div>
                        <h4 class="mb-1 mt-1"><span data-plugin="counterup">45,254</span></h4>
                        <p class="text-muted mb-0">Customers</p>
                    </div>
                    <p class="text-muted mt-3 mb-0"><span class="text-danger me-1"><i
                                class="mdi mdi-arrow-down-bold me-1"></i>6.24%</span> since last week
                    </p>
                </div>
            </div>
        </div> <!-- end col-->

        <div class="col-md-6 col-xl-3">

            <div class="card">
                <div class="card-body">
                    <div class="float-end mt-2">
                        <div id="growth-chart"></div>
                    </div>
                    <div>
                        <h4 class="mb-1 mt-1">+ <span data-plugin="counterup">12.58</span>%</h4>
                        <p class="text-muted mb-0">Tax Amount </p>
                    </div>
                    <p class="text-muted mt-3 mb-0"><span class="text-success me-1"><i
                                class="mdi mdi-arrow-up-bold me-1"></i>10.51%</span> since last week
                    </p>
                </div>
            </div>
        </div> <!-- end col-->
    </div> <!-- end row-->

    <div class="row">
        <div class="col-xl-8">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Sales Amount & Production Cost</h4>

                    <div id="spline_area" class="apex-charts" dir="ltr"></div>
                </div>
            </div>
            <!--end card-->
        </div>

        <div class="col-xl-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Bar Chart</h4>

                    <div id="bar_chart" class="apex-charts" dir="ltr"></div>
                </div>
            </div>
            <!--end card-->
        </div>
    </div> <!-- end row-->

    <div class="row">
        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">
                    <div class="float-end">
                        <div class="dropdown">
                            <a class="dropdown-toggle text-reset" href="#" id="dropdownMenuButton5"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="fw-semibold">Sort By:</span> <span class="text-muted">Yearly<i
                                        class="mdi mdi-chevron-down ms-1"></i></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton5">
                                <a class="dropdown-item" href="#">Monthly</a>
                                <a class="dropdown-item" href="#">Yearly</a>
                                <a class="dropdown-item" href="#">Weekly</a>
                            </div>
                        </div>
                    </div>
                    <h4 class="card-title mb-4">Sales Amount</h4>

                    <div class="mt-1">
                        <ul class="list-inline main-chart mb-0">
                            <li class="list-inline-item chart-border-left me-0 border-0">
                                <h3 class="text-primary">$<span data-plugin="counterup">2,371</span><span
                                        class="text-muted d-inline-block font-size-15 ms-3">Income</span></h3>
                            </li>
                            <li class="list-inline-item chart-border-left me-0">
                                <h3><span data-plugin="counterup">258</span><span
                                        class="text-muted d-inline-block font-size-15 ms-3">Sales</span>
                                </h3>
                            </li>
                            <li class="list-inline-item chart-border-left me-0">
                                <h3><span data-plugin="counterup">3.6</span>%<span
                                        class="text-muted d-inline-block font-size-15 ms-3">Conversation Ratio</span>
                                </h3>
                            </li>
                        </ul>
                    </div>

                    <div class="mt-3">
                        <div id="sales-analytics-chart" class="apex-charts" dir="ltr"></div>
                    </div>
                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div> <!-- end col-->

        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Order Quantity By Year</h4>

                    <div id="column_chart" class="apex-charts" dir="ltr"></div>
                </div>
            </div>

        </div> <!-- end row-->

        <div class="row">
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-4">Pie Chart</h4>

                        <div id="pie_chart" class="apex-charts" dir="ltr"></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-4">Donut Chart</h4>

                        <div id="donut_chart" class="apex-charts" dir="ltr"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->
    @endsection

    @push('script')
        <!-- apexcharts -->
        <script src="{{ URL::asset('/assets/libs/apexcharts/apexcharts.min.js') }}"></script>

        <script src="{{ URL::asset('/assets/js/pages/dashboard.init.js') }}"></script>
    @endpush
