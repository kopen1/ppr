<x-app-layout>
  
      <div class="container table-responsive">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">All Post</h1>
        <a href="post/create" class="btn btn-sm btn-success m-2">+Tambah Post</a>
      </div>
@if(session('status'))
<div class="alert alert-success">
{{session('status')}}
</div>
@endif

        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">title</th>
              <th scope="col">kategori</th>
              <th scope="col">Update</th>
              <th scope="col">Create</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
      <tbody>
        @foreach($post as $i)
            <tr>
              <td scope="row">{{$loop->iteration}}</td>
            <td>
              <a href="{{route('blog.detail',$i->slug)}}" class="text-decoration-none text-info">
              {{$i->judul}}
              </a>
              </td>
            <td>
              <a href="/kategori/{{$i->kategori->slug}}" class="text-decoration-none text-info">{{$i->kategori->name}}</a>
              </td>
              <td>{{$i->updated_at->diffForHumans()}}</td>
              <td>{{$i->created_at->format('d-m-y')}}</td>
              <td>
<a href="{{route('post.edit',$i->slug)}}" class="btn btn-sm mb-1 btn-warning text-decoration-none"><i class="bi bi-pencil-square"></i>Edit</a>
<form action="{{route('post.destroy',$i->slug)}}" method="post" onclick="return confirm('Yakin untuk menghapus ?')">
@method('DELETE')
@csrf
<button class="btn btn-sm btn-danger text-decoration-none">
<i class="bi bi-x-circle-fill"></i>Del</button>
</form>
              </td>
            </tr>
        @endforeach
       </tbody>
        </table>
        {{$post->links()}}
       </div>



</x-app-layout>