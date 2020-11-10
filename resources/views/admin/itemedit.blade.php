@section('title')
<title>Item Edit</title>
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
<script>
    $('select').on('change', function() {
        var diskon = document.getElementById('diskon');
        // alert( this.value );
        if (this.value == 0) {
            diskon.value = 0;
            diskon.readOnly = true;
        } else {
            diskon.value = 10;
            diskon.readOnly = false;
            
        }
    });
</script>
@endsection

@section('content')
<div class="container-fluid text-center">
    <div class="mt-4">
        &nbsp;
    </div>
    <div class="row justify-content-center mt-5">
        <div class="col-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title"><a>Edit Item</a></h4>
                    <form action="/admin/item/edit" method="post">
                        {{ csrf_field() }}
                        <input type="hidden" name="id" value="{{$dataitem[0]->id}}">
                        <label for="namaitem">Nama Item</label>
                        <input type="text" class="form-control mb-3 text-center" name="namaitem" id="namaitem"
                            value="{{$dataitem[0]->namaitem}}" required>
                        <label for="harga">Harga Item</label>
                        <input type="number" min="10000" class="form-control mb-3 text-center" name="harga" id="harga"
                            value="{{$dataitem[0]->harga}}" required>
                        <label for="diskonstate">Status Diskon</label>
                        <select class="form-control mb-3" style="text-align-last: center" name="diskonstate"
                            id="diskonstate" required>
                            <option value="0" {{$dataitem[0]->diskonstate == 0 ? 'selected' : ''}}>Tidak</option>
                            <option value="1" {{$dataitem[0]->diskonstate == 1 ? 'selected' : ''}}>Ya</option>
                        </select>
                        <label for="diskon">Diskon</label>
                        <input type="text" class="form-control mb-3 text-center" name="diskon" id="diskon"
                            value="{{$dataitem[0]->diskon}}" {{$dataitem[0]->diskon == 0 ? "readonly" : ""}} required>
                        <button type="submit" class="btn btn-sm btn-primary">Ubah</button>
                        <a href="/admin/item" class="btn btn-sm btn-danger">Kembali</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@include('layouts/master')