

@extends('layouts', ['title' => 'Home page'])

@section('content')
    

    <h1>Home page</h1>
    @foreach ($grupe as $grupa)
        
    @if ($grupa[0]=="W") {{$grupa}}
        
    @endif
    @endforeach
    
    
    <p>Specialitatea: <strong>{{$specialitatea}}</strong> </p>
       

@endsection