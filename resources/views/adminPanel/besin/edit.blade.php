@extends("adminPanel.app")

@section("content")
    <div class="container">
        <h2>Besini Düzenle</h2>
        <form action="{{ route('besin.update', $besin->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Adı:</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $besin->name }}">
            </div>
            <div class="form-group">
                <label for="fiyat">Fiyatı:</label>
                <input type="text" class="form-control" id="fiyat" name="fiyat" value="{{ $besin->fiyat }}">
            </div>
            <div class="form-group">
                <label for="image">Resim:</label>
                <input type="file" class="form-control-file" id="image" name="image">
            </div>
            <div class="form-group">
                <label for="description">Açıklama:</label>
                <textarea class="form-control" id="description" name="description" rows="3">{{ $besin->description }}</textarea>
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Güncelle</button>
        </form>
        <br>
        <a href="{{route("besin.index")}}" class="btn btn-dark">Geri Dön</a>
    </div>
@endsection
