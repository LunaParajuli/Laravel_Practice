 <x-app-layout>
     <div>
         <h2>Form</h2>
     </div>

     <div>
         @if ($errors->any())
             <ul>
                 @foreach ($errors->all() as $error)
                     <li>
                         {{ $error }}
                     </li>
                 @endforeach
             </ul>
         @endif
         <form action="/form/store" method="post">
             @csrf
             <div>
                 <label for="brand">Cloth Brand:</label>
                 <input type="text" name="brand" value="">
             </div>
             </br>
             <div>
                 <label for="origin">Origin:</label>
                 <input type="text" name="origin">
             </div>
             </br>
             <div>
                 <label for="category">Category:</label>
                 <input type="radio" name="category"value="male">Male
                 <input type="radio" name="category"value="female">Female
                 <input type="radio" name="category"value="kids">Kids
                 <input type="radio" name="category"value="others">Others
             </div>
             </br>
             <div>
                 <label for="type">Type:</label>
                 <select name="type" id="">
                     <option value="shorts">Shorts</option>
                     <option value="T-shirts">T-shirts</option>
                     <option value="shirt">Shirt</option>
                     <option value="coat">Coats&Blazers</option>
                     <option value="saree">Saree</option>
                     <option value="jumpsuits">Jumpsuits</option>
                     <option value="hoodie">Hoodie</option>
                 </select>
             </div>
             </br>
             <div>
                 <label for="price">Price:</label>
                 <input type="number" name="price">
             </div>
             </br <div>
             <label for="description">Description:</label>
             <textarea name="description" cols="30" rows="10"></textarea>
     </div>

     <div>
         <button type="submit" href="form">Submit</button>
     </div>
     </div>

     </form>
     </div>

 </x-app-layout>
