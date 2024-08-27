@extends("adminPanel.app")

@section("content")
    <div class="container">
        <h2>Besinler</h2>
        <a href="{{ route('besin.create') }}" class="btn btn-primary mb-2">Yeni Besin Ekle</a>
        <table class="table">
            <thead>
            <tr>
                <th>#</th>
                <th>Adı</th>
                <th>Fiyatı</th>
                <th>Açıklama</th>
                <th>İşlemler</th>
            </tr>
            </thead>
            <tbody>
            @foreach($besinler as $besin)
                <tr>
                    <td>{{ $besin->id }}</td>
                    <td>{{ $besin->name }}</td>
                    <td>{{ $besin->fiyat }}</td>
                    <td>{{ $besin->description }}</td>
                    <td>
                        <a href="{{ route('besin.show', $besin->id) }}" class="btn btn-info btn-sm">Göster</a>
                        <a href="{{ route('besin.edit', $besin->id) }}" class="btn btn-primary btn-sm">Düzenle</a>
                        <form action="{{ route('besin.destroy', $besin->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Bu besini silmek istediğinize emin misiniz?')">Sil</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
