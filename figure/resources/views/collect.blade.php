<x-app-layout>

    <div>
        <h3>Collections</h3>
    </div>

    <div>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>Brands</th>
                <th>Origin</th>
                <th>Category</th>
                <th>Type</th>
                <th>Price</th>
                <th>Description</th>
                <th>Delete</th>
                <th>Edit</th>



            </tr>
            @foreach ($figures as $figure)
                <tr>
                    <td> {{ $figure->id }}</td>
                    <td> {{ $figure->brand }}</td>
                    <td>{{ $figure->origin }}</td>
                    <td>{{ $figure->category }}</td>
                    <td>{{ $figure->type }}</td>
                    <td>{{ $figure->price }}</td>
                    <td>{{ $figure->description }}</td>
                    <td><a href="{{ route('form.delete', $figure->id) }}">Delete</a></td>
                    <td><a href="{{ route('form.edit', $figure->id) }}">Edit</a></td>
                </tr>
            @endforeach
        </table>
    </div>
</x-app-layout>
