@extends("adminPanel.app")


@section("content")
    <div class="container">
        <h2>Hayvanlar</h2>
        <a href="{{ route('hayvan.create') }}" class="btn btn-primary mb-2">Yeni Hayvan Ekle</a>
        <div class="row">
            @foreach($hayvans as $hayvan)
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <img src="{{ asset('storage/' . $hayvan->image) }}" alt="{{ $hayvan->name }}" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">{{ $hayvan->name }}</h5>
                            <div class="d-flex justify-content-between align-items-center">
                                <a href="{{ route('hayvan.show', $hayvan->id) }}" class="btn btn-info btn-sm">Göster</a>
                                <div>
                                    <a href="{{ route('hayvan.edit', $hayvan->id) }}" class="btn btn-primary btn-sm mr-1">Düzenle</a>
                                    <form action="{{ route('hayvan.destroy', $hayvan->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Bu hayvanı silmek istediğinize emin misiniz?')">Sil</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

@endsection
