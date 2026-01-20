<!-- Page Header Start -->
<div class="container-fluid page-header py-5">
    <div class="container text-center py-5">
        <h1 class="display-2 text-white mb-4 animated slideInDown">{{ $title }}</h1>
        <nav aria-label="breadcrumb" class="animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                @foreach ($breadcrumbs as $index => $breadcrumb)
                    @php($isLast = $index === count($breadcrumbs) - 1)
                    <li class="breadcrumb-item {{ $isLast ? 'active' : '' }}" @if($isLast) aria-current="page" @endif>
                        @if (!empty($breadcrumb['url']) && !$isLast)
                            <a href="{{ $breadcrumb['url'] }}">{{ $breadcrumb['label'] }}</a>
                        @else
                            {{ $breadcrumb['label'] }}
                        @endif
                    </li>
                @endforeach
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->
