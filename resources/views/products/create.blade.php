<form method="POST" action="{{ route('products.store') }}">
    @csrf
    Name:
    <br />
    <input type="text" name="name" value="{{ old('name') }}" />
    {{-- Show the validation error for the "name" field --}}
    @error('name')
        <p>{{ $message }}</p>
    @enderror
    <br /><br />
    <button type="submit">Save</button>
</form>
