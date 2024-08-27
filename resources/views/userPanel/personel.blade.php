@extends("userPanel.app")

@section("content")
    <div class="container">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">

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

                            <p class="card-text"><strong>Email:</strong> {{ $personel->email }}</p>
                            <p class="card-text"><strong>Pozisyon:</strong> {{ $personel->pozisyon }}</p>
                            <div class="d-flex justify-content-between align-items-center">

                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

@endsection
