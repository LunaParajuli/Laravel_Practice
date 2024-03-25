<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Clothes</title>
</head>
<body>
  <h1>Clothes Collection</h1>
  
    <div> 
     <form action="{{route('cloth.store')}}" method="post">
     @csrf
      <div>
          <label for="brands">Brand Name:</label>
          <input type="text" name="brands" id="brands" value="" >
      </div> 
</br>   

      <div>
          <label for="origin">Brand Origin:</label>
          <input type="text" name="origin" id="origin" value="" >
      </div> 
</br>  

        <div>
          <label for="price">Price:</label>
          <input type="text" name="price" id="price" value="" >
      </div> 
</br>  

        <div>
          <label for="price">Type:</label>
          <input type="text" name="price" id="price" value="" >
      </div> 
</br> 
        <div>
            <button type="submit">Save</button>
        </div>

     </form> 
    </div>

</body>
</html>