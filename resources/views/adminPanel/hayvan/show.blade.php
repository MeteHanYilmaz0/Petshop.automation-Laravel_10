@extends("adminPanel.app")

@section("content")
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <img src="{{ asset('storage/' . $hayvan->image) }}" alt="{{ $hayvan->name }}" class="img-fluid">
            </div>
            <div class="col-md-8">
                <h2>{{ $hayvan->name }}</h2>
                <ul class="list-group">
                    <li class="list-group-item">Yaş: {{ $hayvan->yas }}</li>
                    <li class="list-group-item">Fiyat: {{ $hayvan->fiyat }}TL</li>
                    <li class="list-group-item">Cinsi: {{ $hayvan->cins_adi }}</li>
                    <li class="list-group-item">Renk: {{ $hayvan->renk }}</li>
                    <li class="list-group-item">Kategori: {{ $hayvan->category->kategori }}</li>
                    <!-- Diğer alanlar da aynı şekilde -->

                </ul>
                <br>
                <a href="{{ route('hayvan.edit', $hayvan->id) }}" class="btn btn-primary">Düzenle</a>
                <a href="{{route("hayvan.index")}}" class="btn btn-dark">Geri dön</a>
            </div>
        </div>
    </div>
@endsection
