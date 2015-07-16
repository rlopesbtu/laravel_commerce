@foreach($product as $product)
<li>{{$product->name}},&nbsp;&nbsp;{{$product->description}},&nbsp;&nbsp;{{$product->price}}</li>
@endforeach