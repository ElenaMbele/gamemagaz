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

</head>

<body class="text-center">
<form class="form-signin" method="post" action="{{route('addCategory')}}">
    @csrf
    <h1 class="h3 mb-3 font-weight-normal">Добавление категории</h1>
    <div>
        <label for="inputPassword" class="sr-only">Название</label>
        <input type="text" class="form-control" name="name" placeholder="Введите название" required>
    </div>
    <div>
        <label for="inputEmail" class="sr-only">Описание</label>
        <input type="text" name="description" class="form-control" placeholder="Введите онисание" required autofocus>
    </div>


    <div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Сохранить изменения</button>
    </div>
</form>
</body>
</html>
