<x-app-layout>

    <div>
        <h2>Persons Details</h2>
    </div>

    <div>

        <form action="{{ route('cruds.update', $data->id) }}" method="post">

            @csrf
            <div>
                <label for="">Name:</label>
                <input type="text" name="name" value="{{ $data->name ?? null }}">
                @if ($errors->has('name'))
                    <span class="text-danger">{{ $errors->first('name') }}</span>
                @endif

            </div>
            </br>
            <div>
                <label for="">Email:</label>
                <input type="text" name="email" value="{{ $data->email ?? null }}">
                @if ($errors->has('email'))
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                @endif
            </div>
            </br>
            <div>
                <label for="">Contact:</label>
                <input type="number" name="contact" value="{{ $data->contact ?? null }}">
                @if ($errors->has('contact'))
                    <span class="text-danger">{{ $errors->first('contact') }}</span>
                @endif
            </div>
            </br>
            <div>
                <button type="submit">Update</button>
            </div>
            </br>
        </form>
    </div>
</x-app-layout>
