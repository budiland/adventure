@props(['links', 'title'])
<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-flex align-items-center justify-content-between">
            <h4 class="mb-0">{{ $title ?? 'Navigasi' }}</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    @foreach ($links as $label => $link)
                        <li class="breadcrumb-item {{ $loop->last ? 'active' : '' }}">
                            @if ($loop->last)
                                {{ $label }}
                            @else
                                <a href="{{ $link }}">{{ $label }}</a>
                            @endif
                        </li>
                    @endforeach
                </ol>
            </div>

        </div>
    </div>
</div>
<!-- end page title -->
