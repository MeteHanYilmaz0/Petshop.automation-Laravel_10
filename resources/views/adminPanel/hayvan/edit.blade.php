@extends("adminPanel.app")

@section("content")

    <div class="container">
        <h2>Hayvanı Düzenle</h2>
        <form action="{{ route('hayvan.update', $hayvan->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Yeni Adı:</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $hayvan->name }}">
            </div>
            <div class="form-group">
                <label for="yas">Yeni Yaşı:</label>
                <input type="text" class="form-control" id="yas" name="yas" value="{{ $hayvan->yas }}">
            </div>
            <div class="form-group">
                <label for="fiyat">Yeni Fiyatı:</label>
                <input type="text" class="form-control" id="fiyat" name="fiyat" value="{{ $hayvan->fiyat }}">
            </div>
            <div class="form-group">
                <label for="cins_adi">Yeni Cinsi:</label>
                <input type="text" class="form-control" id="cins_adi" name="cins_adi" value="{{ $hayvan->cins_adi }}">
            </div>
            <div class="form-group">
                <label for="renk">Yeni Rengi:</label>
                <input type="text" class="form-control" id="renk" name="renk" value="{{ $hayvan->renk }}">
            </div>
            <div class="form-group">
                <label for="category_id">Yeni Kategorisi:</label>
                <select class="form-control" id="category_id" name="category_id">
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}" {{ $category->id == $hayvan->category_id ? 'selected' : '' }}>
                            {{ $category->kategori }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="image">Yeni Resim:</label>
                <input type="file" class="form-control-file" id="image" name="image">
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Güncelle</button>
        </form>
        <br>
        <a href="{{route("hayvan.index")}}" class="btn btn-dark">Geri dön</a>
    </div>
@endsection
