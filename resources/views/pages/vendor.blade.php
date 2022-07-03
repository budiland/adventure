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
        <div class="col-xl-8">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Donut Chart</h4>

                    <div id="donut_chart" class="apex-charts" dir="ltr"></div>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-xl-4">
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
    </div> <!-- end row-->




    <div class="col-xl-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4">Sales Amount & Production Cost</h4>

                <div id="spline_area" class="apex-charts" dir="ltr"></div>
            </div>
        </div>
        <!--end card-->
    </div>
@endsection

@push('script')
    <!-- apexcharts -->
    <script src="{{ URL::asset('/assets/libs/apexcharts/apexcharts.min.js') }}"></script>

    <script src="{{ URL::asset('/assets/js/pages/dashboard.init.js') }}"></script>
@endpush
