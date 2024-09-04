@extends('fe.profil.partials.main')
@section('container')
<div class="container mt-5">
    <!-- Detail Pengajuan -->
    <div class="card mb-4">
        <div class="card-header bg-primary text-white">
            Info Pencairan Dana
        </div>
        <div class="card-body">
            <div class="row mb-2">
                <div class="col-md-4"><strong>Nama:</strong></div>
                <div class="col-md-8">{{ $member->username }}</div>
            </div>
            {{-- <div class="row mb-2">
                <div class="col-md-4"><strong>Jenis Pelatihan yang Telah Diikuti:</strong></div>
                <div class="col-md-8">Komputer</div>
            </div> --}}
            {{-- <div class="row mb-2">
                <div class="col-md-4"><strong>Jenis Usaha yang Akan Dijalankan:</strong></div>
                <div class="col-md-8">Usaha Toko Komputer</div>
            </div> --}}
            {{-- <div class="row mb-2">
                <div class="col-md-4"><strong>Proposal Usaha:</strong></div>
                <div class="col-md-8"><a href="#">Download Proposal</a></div>
            </div> --}}
            <div class="row mb-2">
                <div class="col-md-4"><strong>Status Pengajuan Dana:</strong></div>
                <div class="col-md-8 fw-bold">
                    @if($pengajuan)
                        {{ $pengajuan->status }}
                    @else
                        Belum ada pengajuan
                    @endif
                </div>
            </div>
            
        </div>
    </div>

   <!-- Form Pengajuan Dana -->
<div class="container mt-5">
   <!-- Menampilkan Pesan Sukses -->
    @if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <!-- Menampilkan Pesan Error -->
    @if(session('error'))
    <div class="alert alert-danger">{{ session('error') }}</div>
    @endif

    <div class="card">
        <div class="card-header bg-primary text-white">
            Pengajuan Dana
        </div>
        <div class="card-body">
            <form action="{{ route('pengajuan-dana.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" value="{{ $member->username }}" placeholder="Masukkan nama Anda" required>
                </div>
                <div class="mb-3">
                    <label for="jenisPelatihan" class="form-label">Jenis Pelatihan yang Telah Diikuti</label>
                    <select class="form-select" id="jenisPelatihan" name="jenis_pelatihan" required>
                        <option selected disabled value="">Pilih jenis pelatihan</option>
                        <option value="Komputer">Komputer</option>
                        <option value="Otomotif">Otomotif</option>
                        <option value="Elektro">Elektro</option>
                        <option value="Menjahit">Menjahit</option>
                        <option value="Salon">Salon</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="jenisUsaha" class="form-label">Jenis Usaha yang Akan Dijalankan</label>
                    <input type="text" class="form-control" id="jenisUsaha" name="jenis_usaha" placeholder="Masukkan jenis usaha" required>
                </div>
                <div class="mb-3">
                    <label for="proposal" class="form-label">Upload Proposal Usaha</label>
                    <input type="file" class="form-control" id="proposal" name="proposal" required>
                </div>
                <button type="submit" class="btn btn-primary">Ajukan Dana</button>
            </form>
        </div>
    </div>
</div>


@endsection