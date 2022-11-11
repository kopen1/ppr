<nav style="--bs-breadcrumb-divider: '»'; background:rgba(0,0,0,0.111);" aria-label="breadcrumb">
    <div class="container">
  <ol class="breadcrumb py-1 px-2">
      
    <li class="breadcrumb-item"><a class="text-decoration-none text-dark text-uppercase fw-bold" href="/">⟩ {{env('APP_NAME')}}</a></li>
    <li class="breadcrumb-item">
      <a class="text-decoration-none text-black text-uppercase" href="/kategori/{{$kategori}}">{{$kategori}}</a>
      </li>
      @isset($judul)
    <li class="breadcrumb-item active" aria-current="page">{{$judul}}</li>
      @endisset
  </ol>
    </div>
</nav>
