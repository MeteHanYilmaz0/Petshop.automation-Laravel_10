@extends('adminPanel.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Personel Detayı</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('admin.personel') }}"> Geri</a>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>İsim:</strong>
                    {{ $personel->name }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Maaş:</strong>
                    {{ $personel->maas }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Email:</strong>
                    {{ $personel->email }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Resim:</strong>
                    <img src="{{ $personel->image }}" width="300" height="300">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Pozisyon:</strong>
                    {{ $personel->pozisyon }}
                </div>
            </div>
        </div>
    </div>
@endsection
