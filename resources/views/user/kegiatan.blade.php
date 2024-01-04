@extends('templateUser')
@section('content')
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h6>Tabel Kegiatan</h6>
                        @if (session('user_role') == 'ukm')
                            <button type="button" class="btn btn-primary btn-md mt-3 px-5 py-4" data-bs-toggle="modal"
                                data-bs-target="#ModalInput" data-bs-whatever="@fat">Tambahkan Proposal</button>
                        @endif
                        <div class="modal fade" id="ModalInput" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog modal-lg modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-4 text-primary-emphasis my-3" id="exampleModalLabel">
                                            Formulir Penginputan Proposal</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="{{ route('kegiatan.post') }}" method="POST">
                                            {{ csrf_field() }}
                                            <div class="my-3 px-5">
                                                <label for="recipient-name" class="col-form-label">Judul Proposal:</label>
                                                <input type="text" class="form-control" id="recipient-name"
                                                    name="judul">
                                            </div>
                                            <div class="my-3 px-5">
                                                <label for="recipient-name" class="col-form-label">Tanggal:</label>
                                                <input type="date" class="form-control" id="recipient-name">
                                            </div>
                                            <div class="my-3 px-5">
                                                <label for="recipient-name" class="col-form-label">Deskripsi:</label>
                                                <textarea class="form-control" id="message-text" name="deskripsi"></textarea>
                                            </div>
                                            <div class="my-3 mb-6 px-5">
                                                <label for="message-text" class="col-form-label">Upload Proposal:</label>
                                                <input type="file" class="form-control" id="recipient-name"
                                                    name="isi">
                                            </div>

                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary"
                                            style="background-color: rgb(38, 128, 255);">Submit</button>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Judul
                                            Proposal</th>
                                        @if (session('user_role') == 'dosen')
                                            <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7">
                                                User
                                            </th>
                                        @endif
                                        <th class="text-center text-uppercase text-secondary text-xs font-weight-bolder opacity-7">
                                            Tanggal</th>
                                        <th class="text-center text-uppercase text-secondary text-xs font-weight-bolder opacity-7">
                                            Status</th>
                                        <th class="text-center text-uppercase text-secondary text-x xs font-weight-bolder opacity-7">
                                            Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($proposal as $p)
                                        <tr>
                                            <td>
                                                <div class="d-flex px-2 py-1 my-3">

                                                    <div class="d-flex flex-column justify-content-center">
                                                        <h6 class="mb-0 text-sm">{{ $p->judul }}</h6>

                                                    </div>
                                                </div>
                                            </td>
                                            @if (session('user_role') == 'dosen')
                                            <td>
                                                <p class=" text-xs font-weight-bold mb-0">{{ $p->user_up }}</p>
                                            </td>
                                            @endif
                                            <td class="align-middle text-center">
                                                <span
                                                    class="text-secondary text-xs font-weight-bold">{{ date('d F Y', strtotime($p->created_at)) }}</span>
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                <?php
                                                if ($p->status == 'Pending') {
                                                    echo '<span class="badge badge-sm bg-warning">Pending</span>';
                                                } elseif ($p->status == 'Diterima') {
                                                    echo '<span class="badge badge-sm bg-gradient-success">Diterima</span>';
                                                } else {
                                                    echo '<span class="badge badge-sm bg-gradient-danger">Ditolak</span>';
                                                }
                                                ?>
                                            </td>
                                            <td class="align-middle">
                                                @if (session('user_role') == 'dosen')
                                                    <div class="container"
                                                        style="display: flex; justify-content: center; vertical-align: center; align-items: center;">
                                                        <!-- Button trigger modal -->
                                                        <button type="button"
                                                            class="btn {{ $p->status == 'Pending' ? 'btn-info' : 'btn-secondary' }}"
                                                            data-bs-toggle="{{ $p->status == 'Pending' ? 'modal' : '' }}"
                                                            data-bs-target="#exampleModal{{ $p->id }}">
                                                            Edit
                                                        </button>
                                                        <!-- Modal -->
                                                        <div class="modal fade" id="exampleModal{{ $p->id }}"
                                                            tabindex="-1" aria-labelledby="exampleModalLabel"
                                                            aria-hidden="true">
                                                            <div class="modal-dialog modal-dialog-centered">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h1 class="modal-title fs-5 text-info"
                                                                            id="exampleModalLabel">Proposal</h1>
                                                                        <button type="button" class="btn-close"
                                                                            data-bs-dismiss="modal"
                                                                            aria-label="Close"></button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <div class="card-body p-3">
                                                                            <ul class="list-group list-group-flush">
                                                                                <li
                                                                                    class="list-group-item  ps-0 pt-0 text-sm">
                                                                                    <strong
                                                                                        class="text-dark">Judul:</strong>&nbsp;
                                                                                    {{ $p->judul }}
                                                                                </li>
                                                                                <li class="list-group-item  ps-0 text-sm">
                                                                                    <strong class="text-dark">Tanggal
                                                                                        Input:</strong>&nbsp;{{ date('d F Y', strtotime($p->created_at)) }}
                                                                                </li>
                                                                                    <li
                                                                                        class="list-group-item  ps-0 text-sm">
                                                                                        <strong
                                                                                            class="text-dark">Status:</strong>&nbsp;{{ $p->status }}
                                                                                    </li>
                                                                                <li class="list-group-item  ps-0 text-sm">
                                                                                    <strong
                                                                                        class="text-dark">User:</strong>&nbsp;{{ $p->user_up }}
                                                                                </li>
                                                                                <li class="list-group-item  ps-0 text-sm ">
                                                                                    <strong class="text-danger">File
                                                                                        Proposal : </strong><a
                                                                                        href="lokasi_file_pdf"
                                                                                        target="_blank">File PDF</a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <a href="/Proposal/terima/{{ $p->id }}/{{ session('user_name') }}"
                                                                            class="btn btn-success"> Terima </a>
                                                                        <a href="/Proposal/tolak/{{ $p->id }}"
                                                                            class="btn btn-danger"> Tolak </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @else
                                                    <div class="container"
                                                        style="display: flex; justify-content: center; vertical-align: center; align-items: center;">
                                                        <!-- Button trigger modal -->
                                                        <button type="button"
                                                            class="btn {{ $p->status == 'Pending' ? 'btn-secondary' : ($p->status == 'Diterima' ? 'btn-success' : 'btn-danger') }}"
                                                            data-bs-toggle="{{ $p->status == 'Pending' ? '' : 'modal' }}"
                                                            data-bs-target="#exampleModal{{ $p->id }}">
                                                            Edit
                                                        </button>
                                                        <!-- Modal -->
                                                        <div class="modal fade" id="exampleModal{{ $p->id }}"
                                                            tabindex="-1" aria-labelledby="exampleModalLabel"
                                                            aria-hidden="true">
                                                            <div class="modal-dialog modal-dialog-centered">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <?php if ($p->status == 'Diterima') {
                                                                            echo '<h1 class="modal-title fs-5 text-success" id="exampleModalLabel">Proposal Diterima</h1>';
                                                                        } elseif ($p->status == 'Ditolak') {
                                                                            echo '<h1 class="modal-title fs-5 text-danger"id="exampleModalLabel">Proposal Ditolak</h1>';
                                                                        } ?>
                                                                        <button type="button" class="btn-close"
                                                                            data-bs-dismiss="modal"
                                                                            aria-label="Close"></button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <div class="card-body p-3">
                                                                            <ul class="list-group list-group-flush">
                                                                                <li
                                                                                    class="list-group-item  ps-0 pt-0 text-sm">
                                                                                    <strong
                                                                                        class="text-dark">Judul:</strong>&nbsp;
                                                                                    {{ $p->judul }}
                                                                                </li>
                                                                                <li class="list-group-item  ps-0 text-sm">
                                                                                    <strong class="text-dark">Tanggal
                                                                                        Input:</strong>&nbsp;{{ date('d F Y', strtotime($p->created_at)) }}
                                                                                </li>
                                                                                <li class="list-group-item  ps-0 text-sm">
                                                                                    <strong
                                                                                        class="text-dark">Status:</strong>&nbsp;{{ $p->status }}
                                                                                </li>
                                                                                <li class="list-group-item  ps-0 text-sm">
                                                                                    <strong
                                                                                        class="text-dark">User:</strong>&nbsp;{{ $p->user_up }}
                                                                                </li>
                                                                                @if ($p->status == 'Diterima')
                                                                                    <li
                                                                                        class="list-group-item  ps-0 text-sm ">
                                                                                        <strong class="text-danger">Upload
                                                                                            File
                                                                                            LPJ :</strong>
                                                                                    </li>
                                                                                    <li
                                                                                        class="list-group-item  ps-0 text-sm mt-3">
                                                                                        <form
                                                                                            action="{{ route('lpj.post') }}"
                                                                                            method="POST">
                                                                                            {{ csrf_field() }}
                                                                                            <input type="hidden"
                                                                                                name="judul"
                                                                                                value="{{ $p->judul }}">
                                                                                            <input type="hidden"
                                                                                                name="deskripsi"
                                                                                                value="{{ $p->deskripsi }}">
                                                                                            <input type="hidden"
                                                                                                name="user_up"
                                                                                                value="{{ $p->user_up }}">
                                                                                            <input type="file"
                                                                                                class="form-control"
                                                                                                id="recipient-name"name="isi">
                                                                                    </li>
                                                                                @else
                                                                                    <li
                                                                                        class="list-group-item  ps-0 text-sm ">
                                                                                        <strong class="text-danger">Upload
                                                                                            Ulang Proposal :</strong>
                                                                                    </li>
                                                                                    <li
                                                                                        class="list-group-item  ps-0 text-sm mt-3">
                                                                                        <form
                                                                                            action="{{ route('kegiatan.posts') }}"
                                                                                            method="POST">
                                                                                            {{ csrf_field() }}
                                                                                            <input type="hidden"
                                                                                                name="judul"
                                                                                                value="{{ $p->judul }}">
                                                                                            <input type="hidden"
                                                                                                name="deskripsi"
                                                                                                value="{{ $p->deskripsi }}">
                                                                                            <input type="hidden"
                                                                                                name="user_up"
                                                                                                value="{{ $p->user_up }}">
                                                                                            <input type="file"
                                                                                                class="form-control"
                                                                                                id="recipient-name"name="isi">
                                                                                    </li>
                                                                                @endif
                                                                            </ul>
                                                                            <ul class="list-group">
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button"
                                                                            class="btn btn-danger"data-bs-dismiss="modal">Close</button>
                                                                        <button type="submit"
                                                                            class="btn btn-info">Submit</button>
                                                                    </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endif

                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        </main>
    @endsection
