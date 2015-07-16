@foreach($categories as $category)
        <li>{{$category->name}}, &nbsp;&nbsp;{{$category->description}}</li>
@endforeach