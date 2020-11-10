@section('title')
<title>Item List</title>
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
    <h2 class="my-5"><strong>Data Barang</strong></h2>
    <div class="row justify-content-center">
        <div class="col-sm-12 col-md-12 col-lg-10">
            <div class="table-responsive">
                <table class="table table-bordered text-nowrap">
                    <thead class="elegant-color-dark white-text">
                        <tr>
                            <th></th>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Harga</th>
                            <th>Diskon</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    @php
                    $no = 1
                    @endphp
                    <tbody>
                        @foreach ($dataitem as $item)
                        <tr>
                            <td>
                                <a href="admin/item/hapus/{{$item->id}}" onclick="return confirm('Hapus Data Item Ini?')" class="btn btn-sm btn-danger">
                                    <i class="fas fa-trash"></i>
                                </a>
                            </td>
                            <td>{{$no++}}</td>
                            <td>{{$item->namaitem}}</td>
                            <td>Rp. {{number_format($item->harga, 0, ',', '.')}}</td>
                            <td>
                                @if ($item->diskon == 0)
                                -
                                @else
                                {{$item->diskon}}%
                                @endif
                            </td>
                            <td>
                                <form action="{{route('itemaction'.Auth::user()->level)}}" method="post">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="id" value="{{$item->id}}">
                                    <input class="btn btn-sm blue darken-4 white-text" name="detail" id="detail"
                                        type="submit" value="Detail">
                                    <input class="btn btn-sm lime accent-2" name="edit" id="edit" type="submit"
                                        value="Edit Data">
                                    <input class="btn btn-sm cyan darken-4 white-text" name="warna" id="warna"
                                        type="submit" value="Warna">
                                    <input class="btn btn-sm red darken-2 white-text" name="gambar" id="gambar"
                                        type="submit" value="Gambar">
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

@include('layouts/master')