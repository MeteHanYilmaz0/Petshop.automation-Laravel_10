@extends("userPanel.app")

@section("content")

    <div class="container">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <h2 class="mt-5 mb-3">Bakım Ürünleri Listesi</h2>
            </div>
        </div>

        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif

        <div class="row row-cols-1 row-cols-md-3 g-4">
            @foreach ($bakimss as $bakim)
                <div class="col">
                    <div class="card h-100">
                        <img src="{{ asset('storage/' . $bakim->image) }}" class="card-img-top" alt="{{ $bakim->name }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $bakim->name }}</h5>
                            <p class="card-text">Fiyat: {{ $bakim->fiyat }} TL</p>
                            <p class="card-text">{{ $bakim->description }}</p>
                            <button class="btn btn-primary mt-3">Sepete Ekle</button>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <div class="mt-5"></div> <!-- Footer'ı aşağı itmek için boşluk ekleme -->

@endsection
