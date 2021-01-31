@extends('base')

@section('main')
    <h1>{{$daru->name}}</h1>
    <p>{{$daru->price}}</p>

    <form action="{{ route('darus.destroy', $daru)}}" method="post">
        @csrf
        @method('DELETE')
        <a class="btn btn-info" href="{{ url()->previous() }}" >back</a>
        <button class="btn btn-danger" type="submit">Delete</button>
    </form>
@endsection