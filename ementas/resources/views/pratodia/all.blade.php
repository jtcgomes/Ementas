@extends('layout.layout')

@section('content')
    @if (Session::has('message'))
        <div class="alert alert-info">{{ Session::get('message') }}</div>
    @endif
    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Sopa</th>
            <th scope="col">Sopa</th>
            <th scope="col">Peixe</th>
            <th scope="col">Peixe</th>
            <th scope="col">Carne</th>
            <th scope="col">Carne</th>
            <th scope="col">Sobremesa</th>
            <th scope="col">Sobremesa</th>
            <th scope="col">Obs</th>
        </tr>
        </thead>
        <tbody>
        @foreach($pratodias as $pratodia)
            <tr>
                <th scope="row">{{$pratodia->dia}}</th>
                <td>{{$pratodia->sopa1}}</td>
                <td>{{$pratodia->sopa2}}</td>
                <td>{{$pratodia->peixe1}}</td>
                <td>{{$pratodia->peixe2}}</td>
                <td>{{$pratodia->carne1}}</td>
                <td>{{$pratodia->carne2}}</td>
                <td>{{$pratodia->sobremesa1}}</td>
                <td>{{$pratodia->sobremesa2}}</td>
                <td>{{$pratodia->obs}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection