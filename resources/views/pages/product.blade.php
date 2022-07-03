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

        <div class="col-md-6 col-xl-6">
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

        <div class="col-md-6 col-xl-6">
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

    </div> <!-- end row-->
@endsection

@push('script')
    <!-- apexcharts -->
    <script src="{{ URL::asset('/assets/libs/apexcharts/apexcharts.min.js') }}"></script>

    <script src="{{ URL::asset('/assets/js/pages/dashboard.init.js') }}"></script>
@endpush
