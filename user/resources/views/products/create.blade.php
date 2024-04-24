<x-app-layout>
    <div>
        Products
    </div>
    <div>
        <form action="{{ route('products.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div>
                <label for="">Product Name:</label>
                <input type="text"name="name">
                @if ($errors->has('name'))
                    <span class="text-danger">{{ $errors->first('name') }}</span>
                @endif

            </div>
            </br>

            <div>
                <label for="detail">Details:</label>
                <input type="text"name="detail">
                @if ($errors->has('detail'))
                    <span class="text-danger">{{ $errors->first('detail') }}</span>
                @endif

            </div>
            </br>

            <div>
                <label for="image">Image:</label>
                <input type="file" name="image" onchangr="loadfile(e)">
                @if ($errors->has('image'))
                    <span class="text-danger">{{ $errors->first('image') }}</span>
                @endif

            </div>
            </br>

            <div>
                <button type="submit">Submit</button>
            </div>

        </form>
    </div>
</x-app-layout>
