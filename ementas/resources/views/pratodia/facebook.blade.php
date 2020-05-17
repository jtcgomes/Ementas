@extends('layout.layout')

@section('page-script')
<script type="text/javascript">
  function copy() {
    let textarea = document.getElementById("postfacebook");
    textarea.select();
    document.execCommand("copy");
  }
</script>

@section('content')
    @if (Session::has('message'))
        <div class="alert alert-info">{{ Session::get('message') }}</div>
    @endif
<br><br><br><br>

@foreach($ultimoIntroduzido as $ultimo)
<textarea type="text" class="form-control" id="postfacebook" rows="18">
Aceite as nossas sugestões para hoje:
  {{$ultimo->sopa1}}
  {{$ultimo->sopa2}}

  {{$ultimo->peixe1}}
  {{$ultimo->peixe2}}
  {{$ultimo->carne1}}
  {{$ultimo->carne2}}

  {{$ultimo->sobremesa1}}
  {{$ultimo->sobremesa2}}

{{$ultimo->obs}}
  </textarea>
    
@endforeach

<button onclick="copy()">Copiar para o Facebook</button>

@endsection

<script>
    var msg = '{{Session::get('alert')}}';
    var exist = '{{Session::has('alert')}}';
    if(exist){
      alert(msg);
    }
  </script>