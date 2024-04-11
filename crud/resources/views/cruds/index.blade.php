<x-app-layout>

    <div>
        <a href="{{ route('cruds.create') }}">Add Product</a>
    </div>

    <div>
        <table>
            <tr>
                <th>S.No</th>
                <th>Name</th>
                <th>Email</th>
                <th>Contact</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            @foreach ($alldata as $ald)
                <tr>
                    <td>{{ $ald->id }}</td>
                    <td>{{ $ald->name }}</td>
                    <td>{{ $ald->email }}</td>
                    <td>{{ $ald->contact }}</td>
                    <td><a href="{{ route('cruds.edit', $ald->id) }}">Edit</a></td>
                    <td><a href="{{ route('cruds.destroy', $ald->id) }}">Delete</a></td>
                </tr>
            @endforeach
        </table>
    </div>

</x-app-layout>
