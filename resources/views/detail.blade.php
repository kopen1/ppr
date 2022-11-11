<x-app-layout title="{{$post->judul}}">
<x-breadcrumb kategori="{{$post->kategori->name}}" judul="{{$post->judul}}" />

  <div class="container">
    <div class="row">
     <div class="col-md-9 py-4 border-2 border-end border-bottom rounded-5">
 <div class="border-bottom border-2 rounded-5 text-center">
<h2 class="fs-1 fw-bold font-viga">{{$post->judul}}</h2>
   </div>

 <ul class="list-group list-group-flush">
  <li class="list-group-item"> 
   <i class="bi bi-clock-history">
    <small class="text-muted">Last updated {{$post->updated_at->diffForHumans()}}</small>
    </i>
  </li>
  <li class="list-group-item">
   <i class="bi bi-calendar-check">
   <small class="text-muted"> {{$post->created_at->format('d F Y')}}</small>
   </i>
  </li>
  <li class="list-group-item">
   <i class="bi bi-pen"> 
     <small class="text-muted">Di Tulis <b>{{$post->user->name}}</b></small>
   </i>
  </li>
  <li class="list-group-item">Share Post:
  <a class="btn btn-sm btn-primary" href="/">Fb</a>
  <a class="btn btn-sm btn-primary" href="/">WhatsApp</a>
  </li>
  <li class="list-group-item"></li>
</ul>

   <div class="fs-5">
      <div class="shadow border-0 mt-2 mb-4 rounded-4">
      <img src="{{asset('/img/bg.png')}}" alt="ppr" class="img-fluid rounded-4 ">
      </div>
      {!!$post->body!!}
   </div>
     </div>
     
     
     <div class="col-md">
       Turahane
     </div>

  </div>
  </div>
  
</x-app-layout>