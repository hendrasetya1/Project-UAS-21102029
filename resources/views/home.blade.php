@extends('layout.layout')
@section('jdpage',$jdpg)
@section('konten')
<link rel= "stylesheet" href="css/prjstyle.css">

<div class="container prj">
        <h3>ALAT PENDETEKSI POLARITAS MAGNET</h3>

        <img src="img/myprojek1.jpg" alt="my projek" width="300" height="450" style="display:block; margin:auto;">
    </div>
    <div class="container prjisi">
        <p>
        Magnet merupakan salah satu jenis logam yang mampu menarik benda tertentu. 
        Magnet diambil dari bahasa yunani “magnitis lithos” yang berarti batu magnesian. 
        Pada kesempatan kali ini akan membuat sebuah alat untuk mendeteksi polaritas dari sebuah magnet. 
        Pada dasarnya, magnet memiliki kutub-kutub atau polaritas yaitu kutub utara dan kutub selatan. 
        Namun tidak semua magnet dapat diketahui polaritasnya. 
        Ada beberapa cara sederhana untuk mengetahui kutub magnet, 
        akan tetapi tidak bisa diterapkan pada semua magnet.
    </p>

    
    </div>
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