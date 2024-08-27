@extends("adminPanel.app")


@section("content")
    <div class="container">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Bakım Ürünleri Listesi</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-success" href="{{ route('bakim.create') }}"> Yeni Bakım Ürünü Ekle</a>
                </div>
            </div>
        </div>

        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif

        <div class="card-group">
            @foreach ($bakims as $bakim)
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img class="card-img-top" src="{{ asset('storage/' . $bakim->image) }}" alt="{{ $bakim->name }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $bakim->name }}</h5>
                            <p class="card-text"><strong>Fiyat:</strong> {{ $bakim->fiyat }} TL</p>
                            <p class="card-text">{{ $bakim->description }}</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <a class="btn btn-info" href="{{ route('bakim.show', $bakim->id) }}">Göster</a>
                                    <a class="btn btn-primary" href="{{ route('bakim.edit', $bakim->id) }}">Düzenle</a>
                                </div>
                                <form action="{{ route('bakim.destroy', $bakim->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Sil</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

@endsection
