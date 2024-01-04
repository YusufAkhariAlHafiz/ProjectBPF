@extends('templateUser')
@section('content')
<!-- Main Content -->
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
    <div class="card mb-4">
      <!-- Header -->
      <div class="text-center mt-5">
          <h1>Laporan Penanggung Jawab</h1>
          {{-- <p>Periode: Januari 2023 - Desember 2023</p> --}}
      </div>

      <!-- Konten Laporan -->

      <div class="m-4">
          {{-- <h3>Detail Laporan</h3> --}}
          <table class="table table-striped">
              <thead>
                  <tr>
                      <th scope="col">Judul</th>
                      <th scope="col">Status</th>
                      <th scope="col">Aksi</th>
                      <th scope="col">Status</th>
                  </tr>
              </thead>

              <tbody>
                  <!-- Isi tabel dengan data laporan -->
                  <tr>
                      <th scope="row">1</th>
                      <td>Keuangan</td>
                      <td>Pengelolaan anggaran proyek</td>
                      <td>Selesai</td>
                  </tr>
                  <!-- Tambahkan lebih banyak baris sesuai kebutuhan -->
              </tbody>
          </table>
      </div>
    </div>
  </div>
</div>
</div>
@endsection
