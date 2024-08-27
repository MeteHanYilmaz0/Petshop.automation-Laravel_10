@extends('adminPanel.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Bakım Ürünü Göster</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('bakim.index') }}"> Geri</a>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>İsim:</strong>
                    {{ $bakim->name }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Fiyat:</strong>
                    {{ $bakim->fiyat }} TL
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Resim:</strong>
                    <img src="{{ asset('storage/' . $bakim->image) }}" width="200">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Açıklama:</strong>
                    {{ $bakim->description }}
                </div>
            </div>
        </div>
    </div>
@endsection
