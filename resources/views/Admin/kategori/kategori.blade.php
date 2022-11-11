<x-app-layout>
<div class="container py-4">
  
@if(session('status'))
<div class="alert alert-success">
  {{session('status')}}
</div>
@endif

<a class="btn btn-primary mb-2" data-bs-toggle="modal" href="#exampleModalToggle" role="button">+Tambah Kategori</a>
<table class="table">
  <thead>
    <tr class="table-success">
      <th scope="col">#</th>
      <th scope="col">Slug</th>
      <th scope="col">judul</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
@foreach($data as $i)
    <tr>
      <th scope="row">{{$i->id}}</th>
      <td>{{$i->slug}}</td>
      <td>
        <a href="kategori/{{$i->slug}}" class="text-decoration-none">{{$i->name}}</a></td>
      <td>
      <a class="btn btn-primary mb-2" data-bs-toggle="modal" href="#edit" role="button">Edit</a>
      <a href="kategori/{{$i->slug}}/edit" class="btn btn-sm btn-primary">Edit</a>        
      <form action="{{route('kategori.destroy',$i->id)}}" method="post">
       @csrf
       @method('DELETE')
      <button onclick="return confirm('Yakin mau menghapus {{$i->judul}}?')" class="btn btn-sm btn-danger">Delete</button>
      </form>
    </tr>
@endforeach
  </tbody>
</table>

<div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalToggleLabel">Tambah Kategori</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="{{route('kategori.store')}}" method="post">
        @csrf
        <div class="mb-3">
         <label for="name" class="form-label">Name:</label>
        <input type="text" class="form-control" id="name" name="name" value="{{old('name')}}" required>
        </div>
        <div class="mb-3">
         <label for="slug" class="form-label">Slug:</label>
        <input type="text" id="slug" class="form-control" name="slug" value="{{old('slug')}}" required>
        </div>
      </div>
      <div class="modal-footer">
       <button class="btn btn-sm btn-info">Save</button>
      </div>
      </form>
    </div>
  </div>
</div>



</div>




</x-app-layout>
