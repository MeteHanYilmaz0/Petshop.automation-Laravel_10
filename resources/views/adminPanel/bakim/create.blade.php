@extends("adminPanel.app")

@section("content")
    <div class="container">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Yeni Bakım Ürünü Ekle</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('bakim.index') }}"> Geri</a>
                </div>
            </div>
        </div>

        @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Hata!</strong> Lütfen formu kontrol edin.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('bakim.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>İsim:</strong>
                        <input type="text" name="name" class="form-control" placeholder="İsim">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Fiyat:</strong>
                        <input type="number" name="fiyat" class="form-control" placeholder="Fiyat">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Resim:</strong>
                        <input type="file" name="image" class="form-control">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Açıklama:</strong>
                        <textarea class="form-control" style="height:150px" name="description" placeholder="Açıklama"></textarea>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">Kaydet</button>
                </div>
            </div>
        </form>
    </div>

@endsection
