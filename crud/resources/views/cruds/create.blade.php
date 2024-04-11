<x-app-layout>

    <div>
        <h2>Persons Details</h2>
    </div>

    <div>

        <form action="{{ route('cruds.store') }}" method="post">

            @csrf
            <div>
                <label for="">Name:</label>
                <input type="text" name="name">
                @if ($errors->has('name'))
                    <span class="text-danger">{{ $errors->first('name') }}</span>
                @endif

            </div>
            </br>
            <div>
                <label for="">Email:</label>
                <input type="text" name="email">
                @if ($errors->has('email'))
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                @endif
            </div>
            </br>
            <div>
                <label for="">Contact:</label>
                <input type="number" name="contact">
                @if ($errors->has('contact'))
                    <span class="text-danger">{{ $errors->first('contact') }}</span>
                @endif
            </div>
            </br>
            <div>
                <button type="submit">Submit</button>
            </div>
            </br>
        </form>
    </div>
</x-app-layout>
