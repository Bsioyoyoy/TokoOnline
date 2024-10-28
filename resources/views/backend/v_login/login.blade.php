<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Toko Online</title>
</head>
<body>
    <h3>{{ $judul }}</h3>
    <!-- -->

   @if (@session()->has('error'))
     <div class="alert alert-danger alert-dismissible"
     role="alert">
        <button type="button" class="close"
        data-dismiss="alert" aria-label="closea"><span
            aria-hidden="true">&times;</span><button>
        <strong>{{ session('error') }} </strong>
      </div>
    @endif
    <!--errorend -->
    <form action="{{ route('backend.login') }}" method="POST">
      @csrf
      <label>user</label><br>
      <input type="text" name="email" id=""value="{{ old
      ('email') }}"
         class="form-control
@error('email') is-invalid @enderror" placeholder="Masukan Email">
     @error('email')
       <span class="invalid-feedback alert-danger"
        role="alert">
          {{ $message }}
        </span>
     @enderror
     <p></p>
     <label>password</label><br>
     <input type="password" name="password" id=""value="{{ old('password') }}"
        class="form-control @error('password') is-invalid @enderror" placeholder="Masukan password">
        @error('password')
           <span class="invalid-feedback alert-danger"
            role="alert">
              {{ $message }}
            </span>
         @enderror
         <p></p>
         <button type="submit">Login</button>
      </form>
   </body>
   
</html>