<x-app-layout>
<div class="container">
  <div class="d-flex vh-100">
<main class=" form-signin w-100 m-auto align-items-center justify-content-center">
  <form action="{{route('login.store')}}" method="post">
    <img class="mb-4 text-center" src="{{asset('/img/logo.png')}}" alt="Log-in" >
    <h1 class="h3 mb-3 fw-normal">Sign In</h1>
    @csrf
    <div class="form-floating mb-3">
      <input name="email" type="email" class="form-control" id="floatingInput" placeholder="name@example.com" autofocus required>
      <label for="floatingInput">Email address or Username</label>
    </div>
    <div class="form-floating mb-3">
      <input name="password" type="password" class="form-control" id="floatingPassword" placeholder="Password" autofocus required>
      <label for="floatingPassword">Password</label>
    </div>
    <p>Belum Punya Akun? <a href="/signup" class="btn btn-sm btn-info">Daftar Sekarang</a></p>
    <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
  </form>
</main>
  </div>
</div>
</x-app-layout>
