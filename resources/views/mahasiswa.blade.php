@extends('layouts.main')

@section('content')
<h1 class="text-centre">Data Mahasiswa</h1>
    <div class="row">
      <a href="/tambahmahasiswa">
        
        <button type="button" class="btn btn-success">Tambah</button>
      </a>
    
</div>
        <table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">NIM</th>
      <th scope="col">Prodi</th>
        <th scope="col">email</th>
         <th scope="col">nohp</th>
          <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php $i = 1 ?>
    @foreach($data as $mahasiswa)

   
    <tr>
      <th scope="row"><?php echo $i ?></th>
      <td>{{$mahasiswa ["nama"]}}</td>
      <td>{{$mahasiswa ["nim"]}}</td>
      <td>{{$mahasiswa ["prodi"]}}</td>
      <td>{{$mahasiswa ["email"]}}</td>
      <td>{{$mahasiswa ["nohp"]}}</td>
      <td>
      <a href="tampildataedit/{{ $mahasiswa['id'] }}"  class="btn btn-primary">Edit</a>
      <button type="button" class="btn btn-danger">Hapus</button>
      </td>
      <?php $i++; ?>
    </tr>
    @endforeach
  </tbody>
</table>
    </div>
    
@endsection