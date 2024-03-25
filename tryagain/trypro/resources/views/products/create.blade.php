<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Create</title>
</head>
<body>
  <h1>Create a Product</h1>
  <div>
    @if($errors->any())
    <ul>
      @foreach($errors->all() as $error)
      <li>{{$error}}</li>
      @endforeach 
    </ul>
    @endif
  </div>
   <form action="{{route('products.store')}}" method="post">
    @csrf
    @method('post')
    <div>
        <label for="name">Name:</label>
        <input type="text" name="name" placeholder="name">
    </div>
    </br>
    <div>
        <label for="qty">Qty:</label>
        <input type="text" name="qty" placeholder="qty" >
    </div>
    </br>
    <div>
        <label for="price">Price:</label>
        <input type="text" name="price" placeholder="price">
    </div>
    </br>
    <div>
        <label for="description">Description:</label>
        <input type="text" name="description" placeholder="description">
    </div>
    </br>
    <button type="submit">Save a New Product</button>
   </form>
</body>
</html>