@extends("adminPanel.app")


@section("content")
    <div class="container">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Personel Listesi</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-success" href="{{ route('personel.create') }}"> Yeni Personel Ekle</a>
                </div>
            </div>
        </div>

        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif

        <div class="card-group">
            @foreach ($personels as $personel)
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img class="card-img-top" src="{{ $personel->image }}" alt="{{ $personel->name }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $personel->name }}</h5>
                            <p class="card-text"><strong>Maaş:</strong> {{ $personel->maas }}</p>
                            <p class="card-text"><strong>Email:</strong> {{ $personel->email }}</p>
                            <p class="card-text"><strong>Pozisyon:</strong> {{ $personel->pozisyon }}</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <a class="btn btn-info" href="{{ route('personel.show', $personel->id) }}">Göster</a>
                                    <a class="btn btn-primary" href="{{ route('personel.edit', $personel->id) }}">Düzenle</a>
                                </div>
                                <form action="{{ route('personel.destroy', $personel->id) }}" method="POST">
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
