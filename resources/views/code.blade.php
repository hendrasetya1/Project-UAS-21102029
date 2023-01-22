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

    <div class="container jdlrang">
        <h2>RANGKAIAN</h2>

        <img src="img/rangkaian.jpg" alt="Gambar rangkaian" width="550" height="550" style="display:block; margin:auto";>
        </div>

    <div class="container rang">
        <p>
        Adapun rangkaian dari alat pendeteksi polaritas magnet seperti pada diatas. 
        VCC dan gnn dihungkan pada breadboard untuk memudahkan pembagian sumber tegangan. 
        Pada sensor analog hal kabel merah merupakan VCC dan Hitam adalah gnd sedangkan kabel orange 
        terhubung ke pin A0 arduino. Untuk LCD pin SDA terhubung ke pin A4 arduino dengan kabel berwarna 
        hijau dan pin SCL ke pin A5 arduino pada kaleb biru, dan untuk tegangan LCD juga menganbil dari 
        breadboard yang sudah terhubung ke arduino yaitu merak sebagai VCC dan hitam sebagai gnd. 
        Dan LED 2 color, gnd pada LED terhubung pada gnd pada breadboard, 
        dan pin tengah dan ujung kanan pada LED terhubung dengan pin 5 dan 6 pada arduino.
        
        </p>

    </div>
    
    <div class="container jdlcode">

        <h2>CODE</h2>   
    </div>

    <div class="container code">
        <p>
        Berikut code dari sensor pendeteksi polaritas magnet:
        </p>        
    </div>

    <div class="container imgcode1">
        <img src="img/code1.png" width="300" height="400">        
    </div>
    <div class="container imgcode2">
        <img src="img/code2.png" width="250" height="400">        
    </div>

    


@endsection