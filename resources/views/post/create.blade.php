<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form  method="post" action="{{route('post.store')}}" enctype="multipart/form-data">
        @csrf
        <input type="text" name="title" class="border-gray-600 border-2">
        <textarea name="content" id="" cols="30" rows="10"></textarea>

        <button type="submit" class="bg-green-500">Créer</button>

    </form>
</body>
</html>
