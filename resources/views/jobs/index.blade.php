<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HFYF! @yield('title')</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Custom CSS -->
    <!-- Favicon -->
    <link rel="icon" href="{{ asset('images/logo.png') }}" sizes="any">
    <link rel="apple-touch-icon" href="{{ asset('images/logo.png') }}">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
</head>
<body style="background-color: white;">


<!-- Header -->

<!-- Vision & Mission -->
<section>
    <div class="container">
        <ul>
            @foreach(App\Models\JobOpening::all() as $job)
                <li>{{ $job->title }} - ({{ $job->type ?? 'Full time' }})</li>
                <hr>
                <table>
                    <tr>
                        <td><b>Establishment:</b></td>
                        <td>{{ $job->establishment->name }}</td>
                    </tr>
                    <tr>
                        <td><b>Location:</b></td>
                        <td>{{ $job->location }}</td>
                    </tr>
                    <tr>
                        <td><b>Posted on:</b></td>
                        <td>{{ $job->created_at->format('F d, Y') }}</td>
                    </tr>
                    <tr>
                        <td><b>Application Deadline:</b></td>
                        <td>{{ date('F d, Y',strtotime($job->created_at) + (30*24*60*60)) }}</td>
                    </tr>
                </table>
                <a href="{{ route('job.show', $job->slug) }}" class="btn btn-primary btn-sm mt-2">View Details</a>
            @endforeach
        </ul>
    </div>
</section>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
