{{-- <h2>pagina di prova numero 3</h2> --}}

<h1>{{$titolo}}</h1>
@if (count($lista_regali)>0)
<ul>
    @foreach ($lista_regali as $regali)
    <li>
        {{$loop->index}}
        {{$loop->first}}
        {{$loop->last}}

        {{$regali}}
    </li>
        
    @endforeach
</ul>
@else
<p>nessun dato disponibile</p>

@endif
<a href="{{route('firstpage')}}">torna in home</a>
