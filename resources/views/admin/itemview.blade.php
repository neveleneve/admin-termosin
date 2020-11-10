@section('title')
<title>Item View</title>
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
    <h2 class="my-5"><strong>Detail Barang</strong></h2>
    <div class="row justify-content-center">
        <div class="col-sm-12 col-md-12 col-lg-6">
            <div id="carousel-thumb" class="carousel slide carousel-fade carousel-thumbnails" data-ride="carousel">
                <div class="carousel-inner" role="listbox">
                    {{$dataitem[0]->img_qty}}
                    @for ($i = 0; $i < $dataitem[0]->img_qty; $i++)
                        <div class="carousel-item {{$i == 0 ? 'active' : ''}}">
                            <img class="d-block w-100" src="{{asset('/images/item/'.$dataitem[0]->id.'-'.$i.'.png')}}"
                                alt="slide {{$i+1}}">
                        </div>
                        @endfor
                </div>
                <a class="carousel-control-prev" href="#carousel-thumb" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carousel-thumb" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
                <ol class="carousel-indicators">
                    @for ($i = 0; $i < $dataitem[0]->img_qty; $i++)
                        <li data-target="#carousel-thumb" data-slide-to="{{$i}}" class="{{$i == 0 ? 'active' : ''}}">
                            <img src="{{asset('/images/item/'.$dataitem[0]->id.'-'.$i.'.png')}}" width="100">
                        </li>
                        @endfor
                </ol>
            </div>
        </div>
    </div>
    <div class="row justify-content-center mb-5">
        <div class="col-sm-12 col-md-12 col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title"><strong>{{$dataitem[0]->namaitem}}</strong></h4>
                    <h6 class="font-weight-bold">Deskripsi</h6>
                    <p class="card-text">
                        {{File::get(public_path('../..//images/desc/'.$dataitem[0]->id.'.txt'))}}
                    </p>
                    <h6 class="font-weight-bold">Warna</h6>
                    <ul class="list-group list-group-horizontal-lg justify-content-center">
                        @foreach ($datawarna as $item)
                        <li class="list-group-item">
                            {{$item->warna}}
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@include('layouts/master')