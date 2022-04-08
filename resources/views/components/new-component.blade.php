
<div {{$attributes->merge(['class'=>'font-bold'])}}>
    <h1>Coucou {{$name}} tu es sur le post : {{$title}}</h1>
    {{$subtitle}}
    @foreach ($tags as $tag)
        {{$tag}}
    @endforeach
</div>
