@extends('adminPanel.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Personeli Düzenle</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('admin.personel') }}"> Geri</a>
                </div>
            </div>
        </div>

        @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('personel.update', $personel->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>İsim:</strong>
                        <input type="text" name="name" value="{{ $personel->name }}" class="form-control" placeholder="İsim">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Maaş:</strong>
                        <input type="text" name="maas" value="{{ $personel->maas }}" class="form-control" placeholder="Maaş">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Email:</strong>
                        <input type="text" name="email" value="{{ $personel->email }}" class="form-control" placeholder="Email">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Resim:</strong>
                        <input type="file" name="image" class="form-control">
                        <img src="{{ $personel->image }}" alt="{{ $personel->name }}" width="100" height="100">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Pozisyon:</strong>
                        <input type="text" name="pozisyon" value="{{ $personel->pozisyon }}" class="form-control" placeholder="Pozisyon">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">Güncelle</button>
                </div>
            </div>

        </form>
    </div>
@endsection
