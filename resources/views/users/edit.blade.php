<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Centered with Bootstrap</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">
    <div class="d-flex vh-100">
        <div class="container d-flex justify-content-center align-items-center">
            <form action="{{ route('users.update', $user->id) }}" method="POST" class="p-4 bg-white rounded shadow"
                style="width: 100%; max-width: 700px;">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input value="{{ $user->name }}" type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                        name="name" placeholder="Enter your name">
                    @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input value="{{ $user->email }}" type="email" class="form-control  @error('email') is-invalid @enderror" id="email"
                        name="email" placeholder="Enter your email">
                    @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label">Phone</label>
                    <input value="{{ $user->phone->phone }}" type="number" class="form-control @error('phone') is-invalid @enderror" id="phone"
                        name="phone" placeholder="Enter your phone number">
                    @error('phone')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary w-100">Submit</button>
            </form>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
