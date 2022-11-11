<nav class="navbar navbar-expand-md bg-light border-bottom shadow sticky-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="/">
      Home</a>
    <button class="navbar-toggler p-0 fs-1 " type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <i id="but" class="bi bi-list"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-md-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">Artikel</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>
        
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
           Kategori
          </a>
          <ul class="dropdown-menu dropdown-menu-end">
        @foreach($kategori as $i)
            <li><a class="dropdown-item" href="{{route('kategori',$i->slug)}}">{{$i->name}}</a></li>
        @endforeach
          </ul>
        </li>
      
        @if(Auth::check())
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
           {{Auth::user()->name}}
          </a>
          <ul class="dropdown-menu dropdown-menu-end">
            <li><a class="dropdown-item" href="{{route('post.index')}}">Post</a></li>
            <li><a class="dropdown-item" href="{{route('kategori.index')}}">Kategori</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Log Out</a></li>
          </ul>
        </li>
          </ul>
        </li>
        @endif
      </ul>
    </div>
  </div>
</nav>