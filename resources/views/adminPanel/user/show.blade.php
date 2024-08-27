@extends("adminPanel.app")

@section("content")
    <div class="container">
        <h2>{{ $user->name }} {{ $user->surname }}</h2>
        <ul class="list-group">
            <li class="list-group-item">E-posta: {{ $user->email }}</li>
            <li class="list-group-item">Telefon Numarası: {{ $user->telephoneNumber }}</li>
            <!-- Diğer alanlar da aynı şekilde -->
        </ul>
        <br>
        <a href="{{route("kullanici.index")}}" class="btn btn-success">Geri dön</a>
    </div>
@endsection
