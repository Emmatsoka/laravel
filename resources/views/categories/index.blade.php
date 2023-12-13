@extends('layout')

@section('content')

<h1>Kategóriák</h1>



<table border="1">
    <tr>
        <th>ID</th>
        <th>NÉV</th>
        
      </tr>
     
       
        @foreach ($categories as $category)
        <tr>
        <td>
            {{ $category->id }}
            
        </td>
        <td>
            {{ $category->name }}
            
        </td>
        <td>
            <a href="{{route('categories.show', $category->id)}}" class="gomb mutat">Megjelenítés </a>
            <a href="{{route('categories.edit', $category->id)}}" class="gomb szerkeszt">Szerkesztés </a>
            <form action="{{route('categories.destroy', $category->id)}}" method="POST" class="ib">
                @csrf
                @method('delete')
                <button type="submit" class="gomb torol">Törlés</button>
            </form>
            
        </td>
    </tr>
        @endforeach
    
</table>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        var successModal = document.getElementById('successModal');
        var closeModal = document.getElementsByClassName('close')[0];

        
        @if(session('success'))
        successModal.style.display = 'block';
        @endif

       
        closeModal.addEventListener('click', function () {
            successModal.style.display = 'none';
        });
    });
</script>
@endsection