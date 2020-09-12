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
<form class="form-signin" method="post" action="{{route('addProduct')}}" enctype="multipart/form-data">
    @csrf
    <h1 class="h3 mb-3 font-weight-normal">Добавление товара</h1>
    <div>
        <label for="inputPassword" class="sr-only">Название</label>
        <input type="text" class="form-control" name="name" placeholder="Введите название" required autofocus>
    </div>
    <div>
        <label for="description">Описание <sup>*</sup></label>
        <textarea id="description" name="description" placeholder="Напишите описание"></textarea>
    </div>
    <div>
        <label for="inputEmail" class="sr-only">Цена</label>
        <input type="text" name="price" class="form-control" placeholder="Введите цену" required>
    </div>
    <div>
        <label for="category">Категория <sup>*</sup></label>
        <select id="category" name="category">
            @foreach($categories as $category)
            <option value="{{$category->name}}">{{$category->name}}</option>
            @endforeach
        </select>
        <span class="form__error">Выберите категорию</span>
    </div>
    <div>
        <div class="form__input-file">
            <input class="visually-hidden" type="file" id="lot-img" name="image" value="">
        </div>
    </div>


    <div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Отправить</button>
    </div>
</form>
</body>
</html>
