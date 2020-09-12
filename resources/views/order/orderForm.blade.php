<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Signin Template for Bootstrap</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/sign-in/">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

</head>

<body class="text-center">
{{--<form class="form-signin" style="max-width: 600px; margin: auto;" method="post" action="{{route('order', ['product' => $product])}}">--}}
{{--    <img class="mb-4" src="../img/logo.png" alt="" width="272" height="72">--}}
{{--    @csrf--}}
{{--    <h2>Вы выбрали {{$product->name}}</h2>--}}
{{--    <h1 class="h3 mb-3 font-weight-normal">Для оформления заказа, пожалуйста оставьте свои данные: </h1>--}}
{{--    <label for="inputPassword" class="sr-only">Ваше имя</label>--}}
{{--    <input style="margin: 15px;" type="text" class="form-control" name="name" placeholder="Ваше имя" required autofocus>--}}
{{--    @if ($errors->has('user_name'))--}}
{{--        <div class="alert alert-danger" style="margin: 15px;">--}}
{{--            {{$errors->first('user_name')}}--}}
{{--        </div>--}}
{{--    @endif--}}
{{--    <label for="inputEmail" class="sr-only">Ваш Email</label>--}}
{{--    <input style="margin: 15px;" type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" required>--}}
{{--    @if ($errors->has('user_email'))--}}
{{--        <div class="alert alert-danger" style="margin: 15px;">--}}
{{--            {{$errors->first('user_email')}}--}}
{{--        </div>--}}
{{--    @endif--}}
{{--    <div>--}}
{{--        <button style="margin: 15px; background-color: #ffca41; border: 0 solid transparent;" class="btn btn-lg btn-primary btn-block" type="submit">Отправить</button>--}}
{{--    </div>--}}
{{--</form>--}}


<form method="POST" action="{{route('order', ['product' => $product])}}">
    <img class="mb-4" src="../img/logo.png" alt="" width="272" height="72">
    @csrf
    <h2>Вы выбрали {{$product->name}}</h2>
    <h1 class="h3 mb-3 font-weight-normal">Для оформления заказа, пожалуйста оставьте свои данные: </h1>

    <div class="form-group row">
        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Ваше Имя') }}</label>

        <div class="col-md-6">
            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

            @error('name')
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror
        </div>
    </div>

    <div class="form-group row">
        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Ваш E-Mail') }}</label>

        <div class="col-md-6">
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{$email_user}}" required autocomplete="email">

            @error('email')
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror
        </div>
    </div>

    <div class="form-group row mb-0">
        <div class="col-md-6 offset-md-4">
            <button type="submit" class="btn btn-primary">
                {{ __('Отправить') }}
            </button>
        </div>
    </div>
</form>

</body>
</html>
