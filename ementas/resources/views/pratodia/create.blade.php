@extends('layout.layout')

@section('content')
    <h1>Adicionar nova ementa</h1>
    <hr>
    <form action="store" method="post">
        {{ csrf_field() }}
       
 
        <input type="hidden" readonly class="form-control" id="dia" name="dia" value="{{ date('d-m-Y') }}">
{{-- 
@foreach($ultimoIntroduzido as $ultimo)
     {{$ultimo->sopa1}}   
    {{$ultimo->sopa2}}
    {{$ultimo->sopa1preco}}
    {{$ultimo->sopa2preco}}
    {{$ultimo->peixe1}}
    {{$ultimo->peixe2}}
    {{$ultimo->peixe1preco}}
    {{$ultimo->peixe2preco}}
    {{$ultimo->carne1}}
    {{$ultimo->carne2}}
    {{$ultimo->carne1preco}}
    {{$ultimo->carne2preco}}
    {{$ultimo->sobremesa1}}
    {{$ultimo->sobremesa2}}
    {{$ultimo->sobremesa1preco}}
    {{$ultimo->sobremesa2preco}}
    {{$ultimo->obs}}
@endforeach
--}}

@foreach($ultimoIntroduzido as $ultimo)
<div class="form-row">
            <div class="form-group col-md-10">
                <label for="inputLabel">Sopa do Dia</label>
                <input type="text" class="form-control" id="sopa1"  name="sopa1" placeholder="" value="{{$ultimo->sopa1}}">
                <input type="text" class="form-control" id="sopa2"  name="sopa2" placeholder="" value="{{$ultimo->sopa2}}">
            </div>
            <div class="form-group col-md-2">
                <label for="inputEuro">Preço</label>
                <input type="text" class="form-control" id="sopa1preco"  name="sopa1preco" placeholder="" value="{{$ultimo->sopa1preco}}">
                <input type="text" class="form-control" id="sopa2preco"  name="sopa2preco" placeholder="" value="{{$ultimo->sopa2preco}}">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-10">
                <label for="inputLabel">Prato de Peixe</label>
                <input type="text" class="form-control" id="peixe1"  name="peixe1" placeholder="" value="{{$ultimo->peixe1}}">
                <input type="text" class="form-control" id="peixe2"  name="peixe2" placeholder="" value="{{$ultimo->peixe2}}">
            </div>
            <div class="form-group col-md-2">
                <label for="inputEuro">€</label>
                <input type="text" class="form-control" id="peixe1preco"  name="peixe1preco" placeholder="" value="{{$ultimo->peixe1preco}}">
                <input type="text" class="form-control" id="peixe2preco"  name="peixe2preco" placeholder="" value="{{$ultimo->peixe2preco}}">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-10">
                <label for="inputLabel">Prato de Carne</label>
                <input type="text" class="form-control" id="carne1"  name="carne1" placeholder="" value="{{$ultimo->carne1}}">
                <input type="text" class="form-control" id="carne2"  name="carne2" placeholder="" value="{{$ultimo->carne2}}">
            </div>
            <div class="form-group col-md-2">
                <label for="inputEuro">€</label>
                <input type="text" class="form-control" id="carne1preco"  name="carne1preco" placeholder="" value="{{$ultimo->carne1preco}}">
                <input type="text" class="form-control" id="carne2preco"  name="carne2preco" placeholder="" value="{{$ultimo->carne2preco}}">
            </div>
        </div>
       
        <div class="form-row">
            <div class="form-group col-md-10">
                <label for="inputLabel">Sobremesa</label>
                <input type="text" class="form-control" id="sobremesa1"  name="sobremesa1" placeholder="" value="{{$ultimo->sobremesa1}}">
                <input type="text" class="form-control" id="sobremesa2"  name="sobremesa2" placeholder="" value="{{$ultimo->sobremesa2}}">
            </div>
            <div class="form-group col-md-2">
                <label for="inputEuro">€</label>
                <input type="text" class="form-control" id="sobremesa1preco"  name="sobremesa1preco" placeholder="" value="{{$ultimo->sobremesa1preco}}">
                <input type="text" class="form-control" id="sobremesa2preco"  name="sobremesa2preco" placeholder="" value="{{$ultimo->sobremesa2preco}}">
            </div>
        </div>
        <div class="form-group">
            <label for="description">Observações</label>
            <textarea type="text" class="form-control" id="obs" name="obs" rows="4">{{$ultimo->obs}}</textarea>
        </div>
@endforeach
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <button type="submit" class="btn btn-primary">Publicar Ementa do dia {{ date('d-m-Y') }}</button>
    </form>
@endsection