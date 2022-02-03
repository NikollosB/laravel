

@extends('layouts', ['title' => 'Home page'])

@section('content')
    

    <h1>Home page</h1>
    @foreach ($grupe as $grupa)
        
    @if ($grupa[0]=="W") {{$grupa}}
        
    @endif
    @endforeach
    
    <p>Specialitatea: <strong>{{$specialitatea}}</strong> </p>

    <p>Pașii:

    @for ($i = 0; $i < 20; $i++)

    @if ($i%2==0) {{$suma=$suma+$i}}
        
    @endif
 
    @endfor
    </p>
    <p>Suma: <strong>{{$suma}}</strong> </p>

@endsection