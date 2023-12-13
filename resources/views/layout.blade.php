<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AI Eszközök</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <script src="{{ asset('script.js')}}"></script>
    <link rel="shortcut icon" href="https://creazilla-store.fra1.digitaloceanspaces.com/icons/3259703/db-icon-md.png" type="image/x-icon">
</head>
<body>
    @if(session('success'))
<div  class="modal" id="successModal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <div class="modal-body" id="successContent">
            {{ session('success') }}
        </div>
    </div>
</div>
@endif
    @error('name')
    <div class="modal" id="errorModal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <div class="modal-body"  id="errorContent">
                {{ $message }}
            </div>
        </div>
    </div>
    @enderror
    <header>
        <nav>
            <ul>
                <li><a href="{{route('categories.create')}}">Készítés</a></li>
                <li><a href="{{route('categories.index')}}">Kategóriák</a></li>
            </ul>
        </nav>
    </header>
    <div class='egesz'>
    <main>
        @yield('content')
    </main>
</div>
    <footer>
        <p>Valami footer</p>

    </footer>
    
</body>
</html>