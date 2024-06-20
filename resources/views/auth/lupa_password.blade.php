<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600&display=swap" rel="stylesheet">
    <title>{{ $title ?? config('app.name') }}</title>
    <style>
        body {
            background: lightgray;
            font-family: 'Quicksand', sans-serif
        }

    </style>
</head>
<body>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card">
                    @if(session('error'))
                    <div class="alert alert-danger text-center">
                        <small class="font-weight-bold">
                            {{ session('error') }}
                        </small>
                    </div>
                    @endif
                    @if (session('success'))
                    <div class="alert alert-info text-center">
                        <small class="font-weight-bold">
                            {{ session('success') }}
                        </small>
                    </div>
                    @endif
                    <div class="card-body">
                        {{-- @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                    </div>
                    @endif --}}

                    <form method="POST" action="">
                        @csrf

                        <div class="form-group">
                            <label class="font-weight-bold text-uppercase">Email Address</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Masukkan Alamat Email">

                            @error('email')
                            <div class="alert alert-danger mt-2">
                                <strong>{{ $message }}</strong>
                            </div>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary btn-block">SEND PASSWORD RESET LINK</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
