@extends('fe.profil.partials.main')
@section('container')
<h3 class="mt-4">Profile</h3>
<div class="row gy-4 mt-2">
    <div class="col-lg-3 col-md-6 col-sm-12">
        <div class="card p-4 border border-3 shadow-lg h-100">
            <a class="nav-link d-flex align-items-center justify-content-center h-100 text-decoration-none text-dark" href="/pengajuan-dana">
                <i class="bi bi-cash fs-2 me-3"></i>
                <span class="fw-bold">Pengajuan Dana</span>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-12">
        <div class="card p-4 border border-3 shadow-lg h-100">
            <a class="nav-link d-flex align-items-center justify-content-center h-100 text-decoration-none text-dark" href="{{ route('sertifikat.saya') }}">
                <i class="bi bi-trophy fs-2 me-3"></i>
                <span class="fw-bold">Lihat Sertifikat</span>
            </a>
        </div>
    </div>
    
</div>

@endsection