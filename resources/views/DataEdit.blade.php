@extends('layout.admin')
@section('jdpage',$jdpg)
@section('id',$idc)
@section('konten')
<h3>Ubah Data</h3>
<form method="POST" action="{{route('admin.update',$idc)}}" enctype="multipart/form-data">
    @csrf()
    @method("PUT")
    <div>
        <div class="form-label">Nama</div>
        <input type="text" name="txKOMPONEN" value="{{$kdt->komponens}}" class="form-control">
    </div>
    <div>
        <div class="form-label">Deskripsi</div>
        <textarea name="txFUNGSI" class="form-control">{{$kdt->fungsi}}</textarea>
    </div>
    <div>
        <div class="form-label">Jenis</div>
        <select name="txJENIS" class="form-select">
            <option value="komponen"{{$jKomponen}}>Komponen</option>
            <option value="board"{{$jBoard}}>Board</option>
            <option value="project"{{$jProject}}>Project</option>
        </select>
    </div>

    
    <div>
        <div class="form-label">File Gambar</div>
        <input type="file" name="fGAMBAR" class="form-control">
    </div>
    
    <div class="tombol">
        <input type="submit" name="btnUPDATE" class="btn btn-primary" value=" Ubah Data ">
    </div>
</form>

<form method="POST" action="{{route('admin.destroy',$idc)}}">
    @csrf()
    @method("DELETE")
    <div class="tombol">
        <input type="submit" name="btnDELETE" class="btn btn-danger" value=" Hapus Data ">
    </div>
</form>
@endsection