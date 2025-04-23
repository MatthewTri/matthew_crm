<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PT Sehat</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body>
    <!-- component -->
<div class="bg-sky-100 flex justify-center items-center h-screen">
  <!-- Left: Image -->
<div class="w-1/2 h-screen hidden lg:block">
<img src="https://img.freepik.com/fotos-premium/imagen-fondo_910766-187.jpg?w=826" alt="Placeholder Image" class="object-cover w-full h-full">
</div>
<!-- Right: Login Form -->
<div class= "lg:p-36 md:p-52 sm:20 p-8 w-full lg:w-1/2">

@if (session()->has('loginError'))
  <div class="flex items-center p-4 mb-4 text-sm text-red-600 rounded-lg bg-red-100 border border-red-300" role="alert">
      <svg class="flex-shrink-0 inline w-4 h-4 mr-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
          <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
      </svg>
      <span class="sr-only">Error</span>
      <div>
          <span class="font-medium">Login Failed!</span> Check your email and password.
      </div>
  </div>
@endif


  <form action="/login" method="POST" class="max-w-md mx-auto bg-white shadow-lg rounded-2xl p-8 space-y-6">
    @csrf

    <h2 class="text-2xl font-bold text-center text-gray-800">Welcome Back, Tim Sales PT. Smart!</h2>
    <p class="text-center text-sm text-gray-500 mb-6">Please login to your account</p>

    <!-- Email -->
    <div>
      <label for="email" class="block text-sm font-medium text-gray-600 mb-1">Email</label>
      <input
        type="email"
        id="email"
        name="email"
        class="w-full border border-gray-300 rounded-lg py-2 px-4 focus:outline-none focus:ring-2 focus:ring-red-400 transition"
        placeholder="you@example.com"
        value="{{ old('email') }}"
        required
        autofocus
      >
      @error('email')
        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
      @enderror
    </div>

    <!-- Password -->
    <div>
      <label for="password" class="block text-sm font-medium text-gray-600 mb-1">Password</label>
      <input
        type="password"
        id="password"
        name="password"
        class="w-full border border-gray-300 rounded-lg py-2 px-4 focus:outline-none focus:ring-2 focus:ring-red-400 transition"
        placeholder="********"
        required
      >
      @error('password')
        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
      @enderror
    </div>


    <!-- Submit -->
    <button
      type="submit"
      class="w-full bg-red-500 hover:bg-red-600 text-white font-semibold rounded-lg py-2 transition duration-200"
    >
      Sign In
    </button>

  </form>


</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@if(session('success'))
  <script>
      document.addEventListener('DOMContentLoaded', function() {
          Swal.fire({
              icon: 'success',
              title: 'Success!',
              text: '{{ session('success') }}',
              showConfirmButton: false,
              timer: 2000
          });
      });
  </script>
@endif

{{-- Password --}}
<script>
  const togglePassword = document.getElementById('togglePassword');
  const passwordField = document.getElementById('password');
  const iconEye = document.getElementById('icon-eye');

  togglePassword.addEventListener('click', function () {
      // Ubah tipe input
      const isPassword = passwordField.type === 'password';
      passwordField.type = isPassword ? 'text' : 'password';

      // Ganti ikon
      iconEye.innerHTML = isPassword
          ? `<path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
             <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />`
          : `<path stroke-linecap="round" stroke-linejoin="round" d="M3.98 8.223A10.477 10.477 0 0 0 1.934 12C3.226 16.338 7.244 19.5 12 19.5c.993 0 1.953-.138 2.863-.395M6.228 6.228A10.451 10.451 0 0 1 12 4.5c4.756 0 8.773 3.162 10.065 7.498a10.522 10.522 0 0 1-4.293 5.774M6.228 6.228 3 3m3.228 3.228 3.65 3.65m7.894 7.894L21 21m-3.228-3.228-3.65-3.65m0 0a3 3 0 1 0-4.243-4.243m4.242 4.242L9.88 9.88" />`;
  });
</script>
</body>
</html>




