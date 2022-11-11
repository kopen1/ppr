<div class="container">
<div class="row">

@foreach($post as $i)
  <div class="col-md-6 my-2" >
    <div class="card border-0 shadow ">
      <div class="card-body">
      <img src="{{$i->image??asset('/img/bg.png')}}" class="card-img-top img-thumbnail border-0" alt="{{$i->judul}}">
      <a class="card-title text-decoration-none" href="{{route('blog.detail',$i->slug)}}">
      <p class="card-text text-primary">{{$i->kategori->name}}</p>
      <h2 class="card-text fs-4 fw-bold text-dark text-uppercase">{{$i->judul}}</h2>
      <article class="text-secondary border-top">{!!Str::limit($i->body,200,'....')!!}</article>
      </a>
      </div>
        <div class="card-footer border-0 bg-transparent">
          <smal class="text-secondary">
          Last updated {{$i->updated_at->diffForHumans()}}</div>
          </smal>
    </div>
  
 </div>
@endforeach
</div>
{{$post->links()}}
</div>
