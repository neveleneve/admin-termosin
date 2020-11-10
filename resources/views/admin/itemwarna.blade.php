@section('title')
<title>Warna Item</title>
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
<div class="container-fluid">
    <div class="my-2">
        &nbsp;
    </div>
    <h2 class="mt-5 mb-2 text-center"><strong>Warna Item</strong></h2>
    <h5 class="mb-5 mt-2 text-center"><strong>{{$dataitem[0]->namaitem}}</strong></h5>
    <div class="row text-center mt-5">
        <div class="col-12">
            <a href="/admin/item" class="btn btn-sm red darken-4 white-text">Kembali</a>
            <a href="#" class="btn btn-sm blue darken-4 white-text" data-toggle="modal"
                data-target="#modalTambahWarna"><strong>Tambah Warna</strong></a>
        </div>
    </div>
    <div class="row text-center justify-content-center mt-5">
        @foreach ($datawarna as $item)
        <div class="col-3 mb-5">
            {{$item->warna}}
            <div class="row justify-content-center">
                <a href="/admin/item/warna/edit/{{$item->id}}" class="btn btn-sm blue darken-4 white-text"
                    title="Edit"><i class="fas fa-edit"></i></a>
                <a href="/admin/item/warna/hapus/{{$item->id}}" class="btn btn-sm red darken-4 white-text" title="Hapus"
                    onclick="return confirm('Hapus Item Warna {{$item->warna}}')"><i class="fas fa-trash"></i></a>
            </div>
        </div>
        @endforeach
    </div>
</div>
<div class="modal fade" id="modalTambahWarna" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h4 class="modal-title w-100 font-weight-bold">Tambah Warna</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="/admin/item/warna/tambah" method="post">
                {{ csrf_field() }}
                <input type="hidden" name="id_item" value="{{$dataitem[0]->id}}">
                <div class="modal-body mx-3">
                    <div class="md-form mb-5">
                        <input type="text" id="warna" name="warna" class="form-control validate">
                        <label class="text-dark" data-error="wrong" data-success="right" for="warna">Warna</label>
                    </div>
                </div>
                <div class="modal-footer d-flex justify-content-center">
                    <button class="btn btn-sm blue darken-4 white-text">Tambah</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@include('layouts/master')