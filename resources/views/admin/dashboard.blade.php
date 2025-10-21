@extends('layouts.admin')

@section('title', 'Dashboard Admin - Bank Sampah')

@section('content')
<div class="container-fluid py-4">

    <!-- Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="fw-bold text-success">
            <i class="bi bi-recycle"></i> Dashboard Admin
        </h1>
        <span class="text-muted small">Bank Sampah Management Panel</span>
    </div>

    <!-- Welcome Card -->
    <div class="card border-0 shadow-sm rounded-4 mb-4 bg-light">
        <div class="card-body d-flex justify-content-between align-items-center flex-wrap">
            <div>
                <h5 class="fw-bold text-success mb-2">Selamat Datang 👋</h5>
                <p class="text-secondary mb-0">
                    Halo, Admin! Kelola data nasabah, transaksi, dan laporan Bank Sampah dengan mudah.
                </p>
            </div>
            <img src="https://cdn-icons-png.flaticon.com/512/1049/1049858.png" 
                 alt="Eco Icon" width="80" class="ms-3">
        </div>
    </div>

    <!-- Statistik Utama -->
    <div class="row">
        <div class="col-md-3 mb-4">
            <div class="card border-0 shadow-sm text-white bg-gradient-green rounded-4">
                <div class="card-body text-center">
                    <i class="bi bi-person-badge display-6"></i>
                    <h6 class="mt-2">Total Nasabah</h6>
                    <h3>856</h3>
                </div>
            </div>
        </div>

        <div class="col-md-3 mb-4">
            <div class="card border-0 shadow-sm text-white bg-gradient-blue rounded-4">
                <div class="card-body text-center">
                    <i class="bi bi-trash2 display-6"></i>
                    <h6 class="mt-2">Sampah Terkumpul</h6>
                    <h3>1.245 kg</h3>
                </div>
            </div>
        </div>

        <div class="col-md-3 mb-4">
            <div class="card border-0 shadow-sm text-white bg-gradient-yellow rounded-4">
                <div class="card-body text-center">
                    <i class="bi bi-cash-coin display-6"></i>
                    <h6 class="mt-2">Saldo Tersimpan</h6>
                    <h3>Rp 12.350.000</h3>
                </div>
            </div>
        </div>

        <div class="col-md-3 mb-4">
            <div class="card border-0 shadow-sm text-white bg-gradient-teal rounded-4">
                <div class="card-body text-center">
                    <i class="bi bi-graph-up display-6"></i>
                    <h6 class="mt-2">Kinerja Bulan Ini</h6>
                    <h3>97%</h3>
                </div>
            </div>
        </div>
    </div>

    <!-- Informasi Ringan -->
    <div class="card border-0 shadow-sm rounded-4 bg-white">
        <div class="card-body">
            <h5 class="text-success fw-bold mb-3"><i class="bi bi-info-circle"></i> Info Terkini</h5>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">♻️ Program edukasi “Sekolah Peduli Sampah” dimulai minggu ini.</li>
                <li class="list-group-item">🌍 Total 12 cabang Bank Sampah aktif di seluruh daerah.</li>
                <li class="list-group-item">💰 Penarikan saldo digital kini bisa dilakukan via e-wallet.</li>
            </ul>
        </div>
    </div>

</div>
@endsection
