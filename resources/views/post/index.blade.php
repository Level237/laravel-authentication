<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Liste des posts</h1>
    @foreach ($posts as $post)
        <h3>{{$post->title}}</h3>
        <x-newComponent name="level brams" :title="$post->title" class="text-green-500">
            {{-- <div>Coucou les amis</div> --}}
            <x-slot name="subtitle"> Mon super sous titre</x-slot>
        </x-newComponent>
        <p>{{$post->content}}</p>
        <p>{{$post->author}}</p>
    @endforeach
</body>
</html>
