<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-12 col-md-6">
                <h1>{{ $title }}</h1>
            </div>
            <div class="col-12 col-md-6">
                <ol class="breadcrumb float-md-right">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                    @foreach($breadcrumbs as $breadcrumb)
                        <li class="breadcrumb-item">
                            @if($breadcrumb['active'])
                                {{ $breadcrumb['label'] }}
                            @else
                                <a href="{{ $breadcrumb['url'] }}">{{ $breadcrumb['label'] }}</a>
                            @endif
                        </li>
                    @endforeach
                </ol>
            </div>
        </div>
    </div>
</section>