<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Hello, world!</title>
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            {{-- sidebar Start --}}
            @include('extend.sidebar')
            {{-- sidebar End --}}

            <div class="col-md-9">
                <div class="container-fluid bg-light p-4">
                    {{-- header Start --}}
                    @include('extend.header')
                    {{-- header End --}}

                    <div class="row">
                        <div class="col-md-12">
                            welcome to dashboard
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>


</body>

</html>
