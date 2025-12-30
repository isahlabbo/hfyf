<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $item->title }} - Hajiya Fatima Yahaya Foundation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
</head>
<body>
<div class="container my-5">
    <h1>{{ $item->title }}</h1>
    <p class="text-muted">{{ optional($item->published_at)->format('M d, Y') }}</p>

    @if($item->image)
        <img src="{{ $item->image }}" class="img-fluid mb-4" alt="{{ $item->title }}">
    @endif

    <div class="content">{!! $item->body !!}</div>

    <a href="{{ route('news.index') }}" class="btn btn-link mt-4">&larr; Back to news</a>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
