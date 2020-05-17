@extends('layout.layout')

@section('content')
    @if (Session::has('message'))
        <div class="alert alert-info">{{ Session::get('message') }}</div>
    @endif
<br><br>

@foreach($ultimoIntroduzido as $ultimo)
    <section class="section bg-light py-5  bottom-slant-gray">
      <div class="container">
      <div class="row">
          <div class="text-center service-block" >
            <h3 class="text-primary"><b>Prato do dia &nbsp;&nbsp;&nbsp;<span class="flaticon-dinner mb-2"></span>&nbsp;&nbsp;&nbsp;{{$ultimo->dia}}</b></h3>
          </div>
        </div>
        <div class="row"><br></div>
      <div class="row">
          <div class="col-md-6 mb-4 mb-lg-0 col-lg-3 text-left service-block" >
            <h3 class="mb-2 text-primary">Sopa</h3>
            <span class="wrap-icon"><span class="flaticon-cook d-block mb-4"></span></span>
          </div>
          <div class="col-md-6 mb-4 mb-lg-0 col-lg-3 text-left service-block" >
            <h3 class="mb-2 text-primary">Peixe</h3>
            <span class="wrap-icon"><span class="flaticon-fish d-block mb-4"></span></span>
          </div>
          <div class="col-md-6 mb-4 mb-lg-0 col-lg-3 text-left service-block" >
            <h3 class="mb-2 text-primary">Carne</h3>
            <span class="wrap-icon"><span class="flaticon-meat d-block mb-4"></span></span>
          </div>
          <div class="col-md-6 mb-4 mb-lg-0 col-lg-3 text-left service-block" >
            <h3 class="mb-2 text-primary">Sobremesa</h3>
            <span class="wrap-icon"><span class="flaticon-hot-coffee-rounded-cup-on-a-plate-from-side-view d-block mb-4"></span></span>
          </div>
        </div>
      
      <!--<div class="row"><br></div>-->
      <div class="row">
          <div class="col-md-6 mb-4 mb-lg-0 col-lg-3 text-left service-block" >
          <div class="text">{{$ultimo->sopa1}}</div><p class="text-primary text-right">{{$ultimo->sopa1preco}}</p>
          </div>
          <div class="col-md-6 mb-4 mb-lg-0 col-lg-3 text-left service-block" >
          <div class="text">{{$ultimo->peixe1}}</div><p class="text-primary text-right">{{$ultimo->peixe1preco}}</p>
          </div>
          <div class="col-md-6 mb-4 mb-lg-0 col-lg-3 text-left service-block" >
          <div class="text">{{$ultimo->carne1}}</div><p class="text-primary text-right">{{$ultimo->carne1preco}}</p>
          </div>
          <div class="col-md-6 mb-4 mb-lg-0 col-lg-3 text-left service-block" >
          <div class="text">{{$ultimo->sobremesa1}}</div><p class="text-primary text-right">{{$ultimo->sobremesa1preco}}</p>
          </div>
        </div>      
        <div class="row"><br></div>
      <div class="row">
          <div class="col-md-6 mb-4 mb-lg-0 col-lg-3 text-left service-block" >
          <div class="text">{{$ultimo->sopa2}}</div><p class="text-primary text-right">{{$ultimo->sopa2preco}}</p>
          </div>
          <div class="col-md-6 mb-4 mb-lg-0 col-lg-3 text-left service-block" >
          <div class="text">{{$ultimo->peixe2}}</div><p class="text-primary text-right">{{$ultimo->peixe2preco}}</p>
          </div>
          <div class="col-md-6 mb-4 mb-lg-0 col-lg-3 text-left service-block" >
          <div class="text">{{$ultimo->carne2}}</div><p class="text-primary text-right">{{$ultimo->carne2preco}}</p>
          </div>
          <div class="col-md-6 mb-4 mb-lg-0 col-lg-3 text-left service-block" >
          <div class="text">{{$ultimo->sobremesa2}}</div><p class="text-primary text-right">{{$ultimo->sobremesa2preco}}</p>
          </div>
        </div>
        <div class="row"><br></div>
      <textarea type="text" class="form-control" id="obs" name="obs" rows="4" style="border: none">{{$ultimo->obs}}</textarea>
    </div>
    </section>
@endforeach

@endsection

<script>
    var msg = '{{Session::get('alert')}}';
    var exist = '{{Session::has('alert')}}';
    if(exist){
      alert(msg);
    }
  </script>