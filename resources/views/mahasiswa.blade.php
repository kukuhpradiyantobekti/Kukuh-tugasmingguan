@extends('layouts.main')

@section('content')
<h1 class="text-centre">Data Mahasiswa</h1>
    <div class="row">
      <a href="/tambahmahasiswa">
        
        <button type="button" class="btn btn-success">Tambah</button>
      </a>
      @if($message = Session::get('success'))

      <script>
        document.addEventListener('DOMContentLoaded', function() {
          Swal.fire({
          title: "Berhasil!",
           text: "{{ $message }}",
           icon: "success"
          });
        });
      </script>
    
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
      <a href="#" class="btn btn-danger delete" data-id="{{ $mahasiswa['id'] }}">Hapus</a>
      </td>
      <?php $i++; ?>
    </tr>
    @endforeach
  </tbody>
</table>
    </div>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js" 
    integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" 
    crossorigin="anonymous"></script>

    <script>

      $('.delete').click(function(){

        let data =$(this).attr('data-id');

        Swal.fire({
  title: "Are you sure?",
  text: "You won't be able to revert this!",
  icon: "warning",
  showCancelButton: true,
  confirmButtonColor: "#3085d6",
  cancelButtonColor: "#d33",
  confirmButtonText: "Yes, delete it!"
}).then((result) => {
  if (result.isConfirmed) {
    window.location = "/deletedata/"+ id;
  }
});
      });
     
    </script>
    
@endsection