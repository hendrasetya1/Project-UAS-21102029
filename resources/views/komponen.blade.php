@extends('layout.layout')
@section('jdpage',$jdpg)
@section('konten')

<h3>Board</h3>
<div class="accordion" id="accordionExample">
@foreach($kdb as $dt=>$k)
<div class="accordion-item">
    <h2 class="accordion-header" id="heading{{$k->ID}}">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{$k->ID}}" aria-expanded="true" aria-controls="collapse{{$k->ID}}">
        {{$k->komponens}}
      </button>
    </h2>
    <div id="collapse{{$k->ID}}" class="accordion-collapse collapse show" aria-labelledby="heading{{$k->ID}}" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <h4>{{$k->komponens}}</h4>
        <div class="row">
            <div class="col-2">
                <img src="images/{{$k->flname}}" width="100">
            </div>
            <div class="col-10">
                {{$k->fungsi}}
            </div>  
          </div>
      </div>
    </div>
  </div>
@endforeach
</div>

<h3>Komponens</h3>
<div class="accordion" id="accordionExample">
@foreach($kda as $dt=>$k)
    <div class="accordion-item">
    <h2 class="accordion-header" id="heading{{$k->ID}}">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{$k->ID}}" aria-expanded="true" aria-controls="collapse{{$k->ID}}">
        {{$k->komponens}}
      </button>
    </h2>
    <div id="collapse{{$k->ID}}" class="accordion-collapse collapse show" aria-labelledby="heading{{$k->ID}}" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <h4>{{$k->komponens}}</h4>
        <div class="row">
            <div class="col-2">
                <img src="images/{{$k->flname}}" width="100">
            </div>
            <div class="col-10">
                {{$k->fungsi}}
            </div>  
          </div>
      </div>
    </div>
  </div>
@endforeach
</div>


<h3>Project</h3>
<div class="accordion" id="accordionExample">
@foreach($kdc as $dt=>$k)
    <div class="accordion-item">
    <h2 class="accordion-header" id="heading{{$k->ID}}">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{$k->ID}}" aria-expanded="true" aria-controls="collapse{{$k->ID}}">
        {{$k->komponens}}
      </button>
    </h2>
    <div id="collapse{{$k->ID}}" class="accordion-collapse collapse show" aria-labelledby="heading{{$k->ID}}" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <h4>{{$k->komponens}}</h4>
        <div class="row">
            <div class="col-2">
                <img src="images/{{$k->flname}}" width="100">
            </div>
            <div class="col-10">
                {{$k->fungsi}}
            </div>  
          </div>
      </div>
    </div>
  </div>
@endforeach
</div>


@endsection