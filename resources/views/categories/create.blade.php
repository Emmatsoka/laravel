@extends('layout')

@section('content')

<h1>Új kategória</h1>



<form action="{{ route('categories.store') }}" method="post">
    @csrf
    <fieldset>

        <label for="name">Kategória név</label>
        <input type="text" name="name" id="name">
        <button type="submit" class="gomb bekuld jobbrafloat">Küldés</button>
    </fieldset>

    
</form>

<script>
    
    document.addEventListener('DOMContentLoaded', function () {
        var errorModal = document.getElementById('errorModal');
        var closeModal = document.getElementsByClassName('close')[0];

      
        @error('name')
        errorModal.style.display = 'block';
        @enderror


        closeModal.addEventListener('click', function () {
            errorModal.style.display = 'none';
        });
    });
</script>
@endsection