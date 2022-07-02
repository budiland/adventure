@push('css')
    <link href="{{ mix('/assets/libs/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css" />
@endpush

@push('script')
    <script src="{{ mix('/assets/libs/datatables/datatables.min.js') }}"></script>
    <script src="{{ mix('/assets/libs/jszip/jszip.min.js') }}"></script>
    <script src="{{ mix('/assets/libs/pdfmake/pdfmake.min.js') }}"></script>
    <script src="{{ mix('/assets/js/pages/datatables.init.js') }}"></script>
    <script src="{{ asset('vendor/datatables/buttons.server-side.js') }}"></script>
@endpush
