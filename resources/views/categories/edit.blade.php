@extends('layout')

@section('content')

<h1> {{ $category->name}} | Kategória szerkesztése</h1>


<form action="{{ route('categories.update', $category->id) }}" method="post">
    @csrf
    @method('PUT')
    <fieldset>

        <label for="name">Kategória név</label>
        <input type="text" name="name" id="name" value="{{ old('name', $category->name)}}">
        <button type="submit" class="gomb bekuld jobbrafloat">Küldés</button>
    </fieldset>

</form>

@endsection