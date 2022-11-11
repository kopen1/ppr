<x-app-layout>
  
<div class="container">

      <div class="table-responsive">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Postingan Baru</h1>
      </div>
<form action="@if(isset($post)){{route('post.update',$post->slug)}}@else{{route('post.store')}}@endif" method="post" class="p-1 needs-validation" novalidate>
  @csrf
  @if(isset($post))
  <input type="hidden" name="id" value="{{$post->id}}">
  @method('PUT')
  @endif
  
  <div class="mb-3">
    <label for="judul" class="form-label">Judul</label>
    <input  name="judul" type="text" class="form-control" id="judul" value="{{old('judul',$post->judul??'')}}" autofocus required>  </div>
  <div class="mb-3">
    <label for="slug" class="form-label">slug</label>
    <input name="slug" type="text" class="form-control" id="slug" value="{{Str::slug(old('slug',$post->slug??''))}}" autofocus required>
  @error('slug')
  <div class="text-danger">
    {{ $message }}
  </div>
  @enderror
  </div>

  <div class="mb-3">
    <label for="kategori_id" class="form-label">Kategori</label>
    <select name="kategori_id" class="form-select" id="kategori_id" autofocus required>
      @foreach($kat as $i)
      @if(old('Kategori_id',$post->kategori_id??'') == $i->id)
      <option value="{{$i->id}}"selected>{{$i->name}}</option>
      @else
      <option value="{{$i->id}}">{{$i->name}}</option>
     @endif
      @endforeach
    </select>
    <div class="invalid-feedback">
      Please select a valid Kategori.
    </div>
  </div>
  
  <div class="mb-3">
  <input class="form-control" id="body" type="text" name="body" value="{{old('body',$post->body??'')}}" hidden autofocus required>
  <trix-editor input="body"></trix-editor>
@error('body')
<div class="text-danger">
{{$message}}
</div>
@enderror
  </div>
  <div class="col-12">
    <button class="btn btn-primary" type="submit">Create Post</button>
  </div>
</form>
      </div>
 </div>     
<script>
(() => {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  const forms = document.querySelectorAll('.needs-validation')
  const judul = document.querySelector('#judul')
  const slug = document.querySelector('#slug')

  // Loop over them and prevent submission
  Array.from(forms).forEach(form => {
    form.addEventListener('submit', event => {
      body()
      
      if (!form.checkValidity()) {
        event.preventDefault()
        event.stopPropagation()
      }

      form.classList.add('was-validated')
    }, false)
  })
})()



judul.addEventListener('change',juduls);
function juduls(){
fetch('/dashboard/post/slug?judul='+judul.value)
  .then((response) => response.json())
  .then((data) => slug.value = data.slug)
}

function body(){
const e = document.querySelector('#body')
hasil = e.value.replace(/div/g,'p')
e.value = hasil;
}



</script>
      

</x-app-layout>