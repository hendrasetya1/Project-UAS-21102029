@extends('layout.admin')
@section('jdpage',$jdpg)
@section('konten')
<h3>Menambahkan Data</h3>
<form method="POST" action="{{route('admin.store')}}" enctype="multipart/form-data">
    @csrf()
    @method("POST")
    <div>
        <div class="form-label">Nama</div>
        <input type="text" name="txKOMPONEN" class="form-control">
    </div>
    <div>
        <div class="form-label">Deskripsi</div>
        <textarea name="txFUNGSI" class="form-control"></textarea>
    </div>

    <div>
        <div class="form-label">Jenis</div>
        <select name="txJENIS" class="form-select">
            <option value="komponen">Komponen</option>
            <option value="board">Board</option>
            <option value="project">Project</option>
        </select>
    </div>
    <div>
        <div class="form-label">File Gambar</div>
        <input type="file" name="fGAMBAR" class="form-control">
    </div>
    <div class="tombol">
        <input type="submit" name="btnNEW" class="btn btn-primary" value=" Buat Data ">
    </div>
</form>
@endsection