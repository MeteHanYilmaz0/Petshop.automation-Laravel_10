@extends("adminPanel.app")

@section("content")
    <div class="container">
        <h2>Kullanıcılar</h2>
        <table class="table">
            <thead>
            <tr>
                <th>#</th>
                <th>Adı</th>
                <th>Soyadı</th>
                <th>E-posta</th>
                <th>Telefon Numarası</th>
                <th>İşlemler</th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->surname }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->telephoneNumber }}</td>
                    <td>
                        <a href="{{ route('kullanici.show', $user->id) }}" class="btn btn-info btn-sm">Göster</a>
                        <form action="{{ route('kullanici.delete', $user->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Bu kullanıcıyı silmek istediğinize emin misiniz?')">Sil</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
