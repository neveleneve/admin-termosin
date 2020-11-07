<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Termosin Store Administrator</title>
    <link rel="stylesheet" href="{{asset('assets/css/mdb.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/font-awesome/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/loginstyle.css')}}">
</head>

<body>
    <header>
        <section class="view intro-2">
            <div class="mask rgba-stylish-strong h-100 d-flex justify-content-center align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-5 col-lg-6 col-md-10 col-sm-12 mx-auto mt-lg-5">
                            <div class="card wow fadeIn" data-wow-delay="0.5s">
                                <form action="/login" method="post">
                                    {{ csrf_field() }}
                                    <div class="card-body">
                                        <div class="form-header blue-gradient">
                                            <h3>Termosin Store</h3>
                                            <h6>Administrator</h6>
                                        </div>
                                        <div class="md-form">
                                            <input type="text" id="username" name="username" class="form-control">
                                            <label class="text-white" for="username">Nama Pengguna</label>
                                        </div>
                                        <div class="md-form">
                                            <input type="password" id="password" name="password" class="form-control">
                                            <label class="text-white" for="password">Kata Sandi</label>
                                        </div>
                                        <div class="text-center">
                                            <button class="btn blue-gradient">Masuk</button>
                                        </div>
                                        <div class="text-center">
                                            <a class="text-white" href="/forgot-password">Lupa Kata Sandi?</a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </header>
    <script type="text/javascript" src="{{asset('assets/js/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/popper.min.js')}}"></script>
    <script type="text/javascript" src="{{asset("assets/js/bootstrap.min.js")}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/mdb.min.js')}}"></script>
    <script type="text/javascript" src="{{asset("assets/font-awesome/js/all.min.js")}}"></script>
    <script>
        $(document).ready(() => {
          new WOW().init();
        });
    </script>
</body>

</html>