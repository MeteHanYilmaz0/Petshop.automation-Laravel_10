@extends("adminPanel.app")

@section("content")
    <div class="container">
        <h2>Yeni Besin Ekle</h2>
        <form action="{{ route('besin.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="name">Adı:</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>
            <div class="form-group">
                <label for="fiyat">Fiyatı:</label>
                <input type="text" class="form-control" id="fiyat" name="fiyat">
            </div>

            <div class="form-group">
                <label for="description">Açıklama:</label>
                <textarea class="form-control" id="description" name="description" rows="3"></textarea>
            </div>
            <br>
            <div class="form-group">
                <label for="image">Resim:</label>
                <input type="file" class="form-control-file" id="image" name="image">
            </div>
            <button type="submit" class="btn btn-primary">Kaydet</button>
        </form>
    </div>
@endsection
