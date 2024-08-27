@extends('adminPanel.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Bakım Ürünü Düzenle</h2>
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

        <form action="{{ route('bakim.update', $bakim->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>İsim:</strong>
                        <input type="text" name="name" value="{{ $bakim->name }}" class="form-control" placeholder="İsim">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Fiyat:</strong>
                        <input type="number" name="fiyat" value="{{ $bakim->fiyat }}" class="form-control" placeholder="Fiyat">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Resim:</strong>
                        <input type="file" name="image" class="form-control">
                        <img src="{{ asset('storage/' . $bakim->image) }}" width="100" class="mt-2">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Açıklama:</strong>
                        <textarea class="form-control" style="height:150px" name="description" placeholder="Açıklama">{{ $bakim->description }}</textarea>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">Güncelle</button>
                </div>
            </div>
        </form>
    </div>
@endsection
