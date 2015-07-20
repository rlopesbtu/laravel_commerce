@extends('app')

@section('content')
    <div class="container">
        <h1>Categories</h1>
    </div>

    <table class="table">
       <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Description</th>
           <th>Action</th>
       </tr>
       @foreach($categories as $category)
        <tr>
          <td>{{$category->id}}</td>
          <td>{{$category->name}}</td>
          <td>{{$category->description}}</td>
            <td></td>
        </tr>
      @endforeach
    </table>

@endsection