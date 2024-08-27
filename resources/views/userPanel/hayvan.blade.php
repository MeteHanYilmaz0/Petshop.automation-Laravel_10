@extends("userPanel.app")

@section("content")
    <div class="container mt-5">
        @foreach($hayvans as $hayvan)
            <div class="card mb-4">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="{{ asset('storage/' . $hayvan->image) }}" alt="{{ $hayvan->name }}" class="img-fluid" style="width: 500px">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">{{ $hayvan->name }}</h5>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Yaş: {{ $hayvan->yas }}</li>
                                <li class="list-group-item">Fiyat: {{ $hayvan->fiyat }} TL</li>
                                <li class="list-group-item">Cinsi: {{ $hayvan->cins_adi }}</li>
                                <li class="list-group-item">Renk: {{ $hayvan->renk }}</li>
                                <li class="list-group-item">Kategori: {{ $hayvan->category->kategori }}</li>
                                <!-- Diğer alanlar da aynı şekilde -->
                            </ul>
                            <button class="btn btn-primary mt-3">Sepete Ekle</button>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
