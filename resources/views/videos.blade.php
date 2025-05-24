<!DOCTYPE html>
<html>

<head>
    <title>YouTube Video List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <div id="loader" class="text-center">
        <div class="spinner-border text-primary" role="status"></div>
        <p class="mt-2">Loading videos...</p>
    </div>

    <div class="container-fluid" style="display:none;" id="main-layout">
        <div class="row h-100">
            <!-- Player column -->
            <div class="col-md-7 p-3 bg-dark text-white">
                <h5 class="text-center text-info py-2">Now Playing</h5>
                <div class="ratio ratio-16x9">
                    <iframe id="player" src="" allowfullscreen></iframe>
                </div>
            </div>

            <!-- Video list column -->
            <div class="col-md-5 p-3 bg-light" id="video-list">
                <div id="videos" class="row row-cols-1 g-3"></div>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/script.js') }}"></script>
</body>

</html>
