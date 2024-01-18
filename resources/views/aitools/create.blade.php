@extends('layout')

@section('content')

<h1>Új AI Eszköz</h1>



<form action="{{ route('aitools.store') }}" method="post">
    @csrf
    <fieldset>

        <label for="name">AI Eszköz név</label>
        <input type="text" name="name" id="name">
        <label for="description">Leírás</label>
        <input type="text" name="description" id="description">
        <label for="link">Link</label>
        <input type="text" name="link" id="link">
        <label for="hasFreePlan">Ingyenes változat</label>
        <input type="checkbox" name="hasFreePlan" id="hasFreePlan">
        <label for="price">Havonta fizetendő</label>
        <input type="number" name="price" id="price">
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