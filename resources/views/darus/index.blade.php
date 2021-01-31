@extends('base')

@section('main')
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">date</th>
            <th scope="col">action</th>
        </tr>
        </thead>
        <tbody>
            @yield('main')
    @foreach($darus as $daru)
        <tr>
            <th scope="row">{{$daru->id}}</th>
            <td>{{$daru->title}}</td>
            <td>{{$darus->created_at}}</td>
            <td>
                <div class="btn-group" role="group" aria-label="Basic example">
                    <a href="{{route('darus.edit',$daru)}}" type="button" class="btn btn-secondary">edit</a>
                    <a href="{{route('darus.show',$daru)}}" class="btn btn-secondary">view</a>
                </div>
            </td>
        </tr>
     @endforeach
        </tbody>
    </table>
@endsection
