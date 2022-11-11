<x-app-layout>
<div class="container-md">
<div class="row py-4">
  
<table class="table">
  <thead>
  <tr>
    <th>No</th>
    <th>NAME</th>
    <th>Total</th>
    <th>Action</th>
  </tr>
  </thead>
  <tbody>
    <tr>
      <td>1</td>
      <td>Post</td>
      <td>{{@count($user->post)}}</td>
      <td>    
      <a href="{{route('post.index')}}" class="btn btn-primary">Check</a>
      </td>
    </tr>
    <tr>
      <td>2</td>
      <td>Kategori</td>
      <td>kategori</td>
      <td>    
      <a href="{{route('kategori.index')}}" class="btn btn-primary">Check</a>
      </td>
    </tr>
  </tbody>
</table>

</div>
</div>
</x-app-layout>