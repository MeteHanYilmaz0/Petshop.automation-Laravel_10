@extends("adminPanel.app")

@section("content")
    <div class="container">
        <h2>{{ $besin->name }}</h2>
        <div class="row">
            <div class="col-md-4">
                <img src="{{ asset('storage/' . $besin->image) }}" alt="{{ $besin->name }}" class="img-fluid">
            </div>
            <div class="col-md-8">
                <ul class="list-group">
                    <li class="list-group-item">Fiyatı: {{ $besin->fiyat }}</li>
                    <li class="list-group-item">Açıklama: {{ $besin->description }}</li>
                </ul>
                <a href="{{ route('besin.edit', $besin->id) }}" class="btn btn-primary">Düzenle</a>
                <a href="{{route("besin.index")}}" class="btn btn-dark">Geri dön</a>
            </div>
        </div>
    </div>
@endsection
