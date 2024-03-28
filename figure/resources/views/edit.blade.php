<x-app-layout>

    <div>
        <h2>Edit</h2>
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
                <input type="text" name="brand" value="{{ $figures->brand }}">
            </div>
            </br>
            <div>
                <label for="origin">Origin:</label>
                <input type="text" name="origin" value="{{ $figures->origin }}">
            </div>
            </br>

            <div>
                <label for="category">Category:</label>
                <input type="radio" name="category" @if ($figures->category == 'male') checked @endif>Male
                <input type="radio" name="category" @if ($figures->category == 'female') checked @endif>Female
                <input type="radio" name="category"@if ($figures->category == 'kids') checked @endif>Kids
                <input type="radio" name="category" @if ($figures->category == 'others') checked @endif>Others
            </div>
            </br>
            <div>
                <label for="type">Type:</label>
                <select name="type" id="" value="{{ $figures->type }}">
                    <option @if ($figures->type == 'shorts') checked @endif>Shorts</option>
                    <option @if ($figures->type == 'T-shirts') checked @endif>T-shirts</option>
                    <option @if ($figures->type == 'shirt') checked @endif>Shirt</option>
                    <option @if ($figures->type == 'coat') checked @endif>Coats&Blazers</option>
                    <option @if ($figures->type == 'saree') checked @endif>Saree</option>
                    <option @if ($figures->type == 'jumpsuits') checked @endif>Jumpsuits</option>
                    <option @if ($figures->type == 'hoodie') checked @endif>Hoodie</option>
                </select>
            </div>
            </br>
            <div>
                <label for="price">Price:</label>
                <input type="number" name="price" value="{{ $figures->price }}">
            </div>
            </br <div>
            <label for="description">Description:</label>
            <textarea name="description" cols="30" rows="10" value="{{ $figures->description }}"></textarea>
    </div>

    <div>
        <button type="submit" href="form">Update</button>
    </div>
    </div>

    </form>
    </div>

</x-app-layout>
