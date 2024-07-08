<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ $title }} -  AI Learning Path </title>
    <link rel="icon" type="image/x-icon" href="/res/favicon.ico"/>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}"></script>
</head>
<body class="bg-orange-400">
    <div class="flex justify-center items-center h-screen">
        <div class="flex bg-white basis-2/4">
            <div class="basis-2/3 flex-col p-12">
                <p class="text-2xl font-bold text-info mb-8">Daftar</p>
                <form class="form-control w-full max-w-xs" action="/daftar" method="POST">
                    @csrf
                    <div class="form-control w-full max-w-xs mb-4">
                        <label for="nama-lengkap" class="mb-2">Nama Lengkap</label>
                        <input id="nama-lengkap" name="name" type="text" placeholder="Nama Lengkap" class="input input-bordered shadow-lg @error('name') input-error @enderror" required value="{{ old('name') }}" />
                        @error('name')
                        <p id="err-name" class="my-2 text-sm text-red-400">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-control w-full max-w-xs mb-4">
                        <label for="email" class="mb-2">E-mail</label>
                        <input id="email" name="email" type="email" placeholder="exampel@gmail.com" class="input input-bordered shadow-lg @error('email') input-error @enderror" value="{{ old('email') }}" required/>
                        @error('email')
                        <p id="err-email" class="my-2 text-sm text-red-400">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-control w-full max-w-xs mb-4">
                        <label for="password" class="mb-2">Password</label>
                        <input id="password" name="password" type="password" class="input input-bordered shadow-lg @error('password') input-error @enderror" required/>
                        @error('password')
                        <p id="err-password" class="my-2 text-sm text-red-400">{{ $message }}</p>
                        @enderror
                    </div>
                    <input type="submit" class="btn btn-info my-4 text-white normal-case" value="Daftar">
                </form>
                <p class="text-center">Sudah memiliki akun? <a href="/masuk" class="font-semibold text-info">masuk</a></p>
            </div>
            <div class="basis-1/3 bg-base-100 bg-no-repeat bg-cover bg-right-top" style="background-image: url(/res/img/bg-daftar.png);">
            
            </div>
        </div>
    </div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    $("#nama-lengkap").keyup(function(){
        $(this).removeClass('input-error');
        $("#err-name").hide();
    });
    $("#email").keyup(function(){
        $(this).removeClass('input-error');
        $("#err-email").hide();
    });
    $("#password").keyup(function(){
        $(this).removeClass('input-error');
        $("#err-password").hide();
    });
});
</script>
</html>