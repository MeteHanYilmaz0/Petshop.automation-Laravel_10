@extends("adminPanel.app")

@section("content")
    <div class="container">
        <h2>Yeni Hayvan Ekle</h2>
        <form action="{{ route('hayvan.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="name">Adı:</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>
            <div class="form-group">
                <label for="yas">Yaşı:</label>
                <input type="text" class="form-control" id="yas" name="yas">
            </div>
            <div class="form-group">
                <label for="fiyat">Fiyatı:</label>
                <input type="text" class="form-control" id="fiyat" name="fiyat">
            </div>
            <div class="form-group">
                <label for="cins_adi">Cinsi:</label>
                <input type="text" class="form-control" id="cins_adi" name="cins_adi">
            </div>
            <div class="form-group">
                <label for="renk">Renk:</label>
                <input type="text" class="form-control" id="renk" name="renk">
            </div>
            <div class="form-group">
                <label for="category_id">Kategori:</label>
                <select class="form-control" id="category_id" name="category_id">
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->kategori }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="image">Resim:</label>
                <input type="file" class="form-control-file" id="image" name="image">
            </div>
            <button type="submit" class="btn btn-primary">Kaydet</button>
        </form>
    </div>

@endsection
