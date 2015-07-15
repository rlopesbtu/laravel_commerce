<h1>Exemplo</h1>
<ul>
   @foreach($categories as $category)
        <li>{{$category->name}}</li>
   @endforeach
       @foreach($product as $product)
           &nbsp;&nbsp;&nbsp;&nbsp;{{$product->name}}&nbsp;->&nbsp;{{$product->price}}
       @endforeach
</ul>