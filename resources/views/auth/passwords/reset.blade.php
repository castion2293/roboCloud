<!doctype html>
<html lang="{{ config('app.locale') }}">
<head>
    <style>
        body,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: "Lato", sans-serif;
        }

        body,
        html {
            height: 100%;
            color: #777;
            line-height: 1.8;
            margin: 0;
        }

        /* index view image (Logo. Full height) */
        .bgimg {
            opacity: 1;
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            background-image: url('https://s3.amazonaws.com/robotechcloud/Industrial-Robots-Teaser.jpg');
        }
    </style>
    <!-- Latest compiled and minified CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <!-- Latest compiled and minified JavaScript -->

    <script src="https://npmcdn.com/tether@1.2.4/dist/js/tether.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

</head>
<body>
<div class="bgimg" style="height:100%;padding-top:12em;">
    <div class="row justify-content-center">
        <div class="col-lg-3 w3-padding-large w3-round-large w3-hide-medium w3-hide-small" style="background-color: rgba(241, 241, 241, .8);">
            <form class="" action="{{ route('postPasswordReset') }}" method="post">
                {{ csrf_field() }}
                <div class="text-center">
                    <h1 class="text-primary" style="font-family: Monda;font-size: 2em;">ROBOTECH CLOUD</h1>
                </div>
                <div class="form-group" style="margin-top:3em;">
                    <input type="email" name="email" class="form-control" placeholder="電子信箱" value="{{ $email }}">
                </div>
                <div class="form-group" style="margin-top:1em;">
                    <input type="password" name="password" class="form-control" placeholder="密碼">
                </div>
                <div class="form-group" style="margin-top:1em;">
                    <input type="password" name="password_confirmation" class="form-control" placeholder="確認密碼">
                </div>

                <input name="token" style="display:none;" value="{{ $token }}">

                @if (count($errors))
                    @foreach($errors->all() as $error)
                        <b class="text-danger">{{ $error }}</b>
                    @endforeach
                @endif

                <button type="submit" class="btn btn-primary form-control" style="cursor:pointer;margin-top:1em;">重置</button>
                {{--<div class="w3-right" style="margin-top:1em;">--}}
                    {{--<a href="{{ url('/') }}" class="text-primary" style="text-decoration: none;font-weight: bold;">登入</a>--}}
                {{--</div>--}}
            </form>
        </div>

        <div class="col-md-10 w3-padding-large w3-round-large w3-hide-large" style="background-color: rgba(241, 241, 241, .8);">
            <form class="" action="{{ route('postPasswordReset') }}" method="post">
                {{ csrf_field() }}
                <div class="text-center">
                    <h1 class="text-primary" style="font-family: Monda;font-size: 5em;">ROBOTECH CLOUD</h1>
                </div>
                <div class="form-group" style="margin-top:5em;">
                    <input type="email" name="email" class="form-control" placeholder="電子信箱" style="font-size: 3em;" value="{{ $email }}">
                </div>
                <div class="form-group" style="margin-top:3em;">
                    <input type="password" name="password" class="form-control" placeholder="密碼" style="font-size: 3em;">
                </div>
                <div class="form-group" style="margin-top:3em;">
                    <input type="password" name="password_confirmation" class="form-control" placeholder="確認密碼" style="font-size: 3em;">
                </div>

                <input name="token" style="display:none;" value="{{ $token }}">

                @if (count($errors))
                    @foreach($errors->all() as $error)
                        <b class="text-danger" style="font-size: 3em;">{{ $error }}</b>
                    @endforeach
                @endif

                <button type="submit" class="btn btn-primary form-control" style="cursor:pointer;font-size: 3em;margin-top:1em;">重置</button>
                {{--<div class="w3-right" style="margin-top:1em;">--}}
                    {{--<a href="{{ ('/') }}" class="text-primary" style="text-decoration: none;font-weight: bold;font-size: 2em;">登入</a>--}}
                {{--</div>--}}
            </form>
        </div>
    </div>
</div>
</body>
</html>
