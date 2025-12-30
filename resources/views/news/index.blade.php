<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News - Hajiya Fatima Yahaya Foundation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
</head>
<body>
<div class="container my-5">
    <h1 class="mb-4">News & Updates</h1>

    @if($news->isEmpty())
        <p>No news available yet.</p>
    @else
        <div class="row g-4">
            @foreach($news as $item)
                <div class="col-md-6">
                    <div class="card h-100 shadow-sm">
                        @if($item->image)
                            <img src="{{ $item->image }}" class="card-img-top" alt="{{ $item->title }}">
                        @endif
                        <div class="card-body">
                            <h5 class="card-title">{{ $item->title }}</h5>
                            <p class="card-text text-truncate" style="max-height:4.5rem">{!! strip_tags($item->body) !!}</p>
                            <a href="{{ url('news/'.$item->slug) }}" class="btn btn-primary">Read more</a>
                        </div>
                        <div class="card-footer text-muted small">{{ optional($item->published_at)->format('M d, Y') }}</div>
                    </div>
                </div>
            @endforeach
        </div>
    @endif

    <a href="/" class="btn btn-link mt-4">&larr; Back to home</a>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
