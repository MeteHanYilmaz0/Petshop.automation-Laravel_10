<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>ADMIN</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="{{asset("assets/assets/favicon.ico")}}" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{asset("assets/css/styles.css")}}" rel="stylesheet" />


</head>
<body>
<div class="d-flex" id="wrapper">
    <!-- Sidebar-->
    <div class="border-end bg-white" id="sidebar-wrapper">
        <div class="sidebar-heading border-bottom bg-light">ADMIN PANEL</div>
        <div class="list-group list-group-flush">
            <a class="list-group-item list-group-item-action list-group-item-light p-3" href="{{route("kullanici.index")}}">Kullanıcılar</a>
            <a class="list-group-item list-group-item-action list-group-item-light p-3" href="{{route("hayvan.index")}}">Hayvanlar</a>
            <a class="list-group-item list-group-item-action list-group-item-light p-3" href="{{route("besin.index")}}">Besinler</a>
            <a class="list-group-item list-group-item-action list-group-item-light p-3" href="{{route("bakim.index")}}">Bakım ürünleri</a>
            <a class="list-group-item list-group-item-action list-group-item-light p-3" href="{{route("admin.personel")}}">Personel</a>
           {{-- <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!">Status</a> --}}
        </div>
    </div>
    <!-- Page content wrapper-->
    <div id="page-content-wrapper">
        <!-- Top navigation-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
            <div class="container-fluid">

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                        <li class="nav-item active"><a class="nav-link" href="#!">ADMIN</a></li>
                        <li class="nav-item"><a class="nav-link" href="#!">Logout</a></li>

                    </ul>
                </div>
            </div>
        </nav>
        <!-- Page content-->
        <div class="container-fluid">
            @yield("content")
        </div>
    </div>
</div>
<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->
<script src="{{asset("assets/js/scripts.js")}}"></script>
</body>
</html>
