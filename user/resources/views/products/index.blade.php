<x-app-layout>
    <div>
        <a href="{{ route('products.create') }}">Add Products</a>
    </div>

    <div>
        <table>
            <tr>
                <th>S.No</th>
                <th>Name</th>
                <th>Detail</th>
                <th>Image</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>

            @foreach ($alldata as $ald)
                <tr>
                    <td>{{ $ald->id }}</td>
                    <td>{{ $ald->name }}</td>
                    <td>{{ $ald->detail }}</td>
                    <td>
                        <img src="{{ asset($ald->image) }}" style= "width:50px; height:50px;" alt="Img" />
                    </td>
                    <td><a href="{{ route('products.edit', $ald->id) }}">Edit</a></td>
                    <td><a href="{{ route('products.destroy', $ald->id) }}">Delete</a></td>
                </tr>
            @endforeach

        </table>
    </div>

</x-app-layout>
