<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit</title>
</head>
<body>
  <h1>Edit a Product</h1>
  <div>
    @if($errors->any())
    <ul>
      @foreach($errors->all() as $error)
      <li>{{$error}}</li>
      @endforeach 
    </ul>
    @endif
  </div>
   <form action="{{route('product.update',['product'=>$product])}}" method="post">
    @csrf
    @method('post')
    <div>
        <label for="name">Name:</label>
        <input type="text" name="name" value="{{$product->name}}">
    </div>
    </br>
    <div>
        <label for="qty">Qty:</label>
        <input type="text" name="qty" value="{{$product->qty}}">
    </div>
    </br>
    <div>
        <label for="price">Price:</label>
        <input type="text" name="price" value="{{$product->price}}">
    </div>
    </br>
    <div>
        <label for="description">Description:</label>
        <input type="text" name="description" value="{{$product->description}}">
    </div>
    </br>
    <button type="submit">Update</button>
   </form>
</body>
</html>