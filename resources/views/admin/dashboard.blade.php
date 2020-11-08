@section('title')
<title>Dashboard</title>
@endsection

@section('link')
<link rel="stylesheet" href="{{asset('assets/css/mdb.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/font-awesome/css/all.min.css')}}">
@endsection

@section('script')
<script type="text/javascript" src="{{asset('assets/js/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/popper.min.js')}}"></script>
<script type="text/javascript" src="{{asset("assets/js/bootstrap.min.js")}}"></script>
<script type="text/javascript" src="{{asset('assets/js/mdb.min.js')}}"></script>
<script type="text/javascript" src="{{asset("assets/font-awesome/js/all.min.js")}}"></script>
<script>
    $(document).ready(() => {
            $(".button-collapse").sideNav();
            var sideNavScrollbar = document.querySelector('.custom-scrollbar');
            var ps = new PerfectScrollbar(sideNavScrollbar);
            new WOW().init();
    });
</script>
@endsection

@section('content')
<div class="container-fluid text-center">
    <div class="my-2">
        &nbsp;
    </div>
    <div class="card card-cascade wider reverse my-5 pb-5">
        <div class="view view-cascade overlay wow fadeIn">
            <img src="https://termosin.store/images/termosin.jpg" class="img-fluid">
            <a href="">
                <div class="mask rgba-white-slight"></div>
            </a>
        </div>
        <div class="card-body card-body-cascade text-center wow fadeIn" data-wow-delay="0.5s">
            <h4 class="card-title"><strong>Selamat Datang, {{Auth::user()->nama}} </strong></h4>
            <h5 class="blue-text"><strong>Administrator Termosin Store</strong></h5>
            <p class="card-text">
                Sed ut perspiciatis unde omnis iste natus sit voluptatem accusantium doloremque laudantium, totam rem
                aperiam.
            </p>
        </div>
    </div>
</div>
@endsection

@include('layouts/master')