<form method="POST" action="{{ route('teams.store') }}">
    @csrf
    Name:
    <br />
    {{-- Change this field to contain the old value after validation error --}}
    <input type="text" name="name" value="{{ old('name') }}" />
    <br /><br />
    <button type="submit">Save</button>
</form>
