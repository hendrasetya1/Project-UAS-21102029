@extends('layout.admin')
@section('jdpage',$jdpg)
@section('konten')
<h3>EDIT MENU</h3>
<table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">KOMPONEN</th>
      <th scope="col">GAMBAR</th>
      <th scope="col">JENIS</th>
      <th scope="col"><a href="/admin/create"><button type="button" class="btn btn-info">Tambah Baru</button></a></th>
    </tr>
  </thead>
  <tbody>
    @foreach($kdt as $dt=>$k)
    <tr>
      <th scope="row">{{$dt+1}}</th>
      <td>{{$k->komponens}}</td>
      <td><img src="images/{{$k->flname}}" width="75"></td>
      <td>{{$k->jenis}}</td>
      <td><a href="/admin/{{$k->ID}}/edit">
        <button type="button" class="btn btn-primary">Edit</button></a>
      </td>    
    </tr>
    @endforeach

  </tbody>
</table>
@endsection