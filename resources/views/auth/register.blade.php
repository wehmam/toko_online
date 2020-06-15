<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('bootstrap-4.1.3/dist/css/bootstrap.min.css') }}"> --}}
</head>
<body>
    
    <div class="container" style="background-image: url('register.jpg')">
        <div class="login-wrapper">
            <h1 class="title">
                Register
            </h1>
            <hr>
            <form action="{{ route('register') }}" method="POST" class="login-form">
                @csrf
                <input type="text" class="input" placeholder="Masukkan Nama" name="name" value="{{ old('name') }}" required autofocus>
                @error('name')
                    <span class="invalid-feedback" role="alert">{{ $message }}</span>
                @enderror

                <input type="email" name="email" placeholder="Masukkan Email" class="input" value="{{ old('email') }}" required>
                @error('email')
                    <span class="invalid-feedback" role="alert">{{ $message }}</span>
                @enderror

                
                <input type="password" name="password" placeholder="Masukkan Password" class="input" required>
                @error('password')
                    <span class="invalid-feedback" role="alert">{{ $message }}</span>
                @enderror
                
                <input type="password" name="password_confirmation" id="password_confirm" class="input" placeholder="Konfirmasi Password" required>

                <textarea name="address" id="address" rows="3" placeholder="Masukkan Alamat" required></textarea>
                @error('address')
                    <span class="invalid-feedback" role="alert">{{ $message }}</span>
                @enderror

                
                <input type="text" class="input" placeholder="Masukkan Nomer HP" name="phone" value="{{ old('phone') }}" required autofocus>
                @error('phone')
                    <span class="invalid-feedback" role="alert">{{ $message }}</span>
                @enderror

                <button type="submit" class="btn btn-primary">Submit</button>
                <p class="message">Apakah Kamu Sudah Punya Akun ? <a href="{{ route('login') }}">Login</a></p>
            </form>
        </div>
    </div>

</body>
</html>