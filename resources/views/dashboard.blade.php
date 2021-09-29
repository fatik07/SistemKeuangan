@extends('layouts.master')

@section('title', 'Dashbord Sistem Keuangan')

@section('content')
<section class="section">
  <h1 class="mt-2" style="font-size: 30px">Data Beranda</h1>
  <div class="container">
    <div class="row">

      <div class="card my-2 col-12 col-lg-3 col-md-6"
        style="max-height: 100px;background-color: #202E31;border-radius:10px;">
        <div class="row g-0">
          <div class="mt-3 ml-4">
            <img src="{{ asset('img/unesa-bw.png') }}" alt="">
          </div>
          <div class="card-body">
            <h5 class="card-title">Saldo Awal</h5>
            <p class="card-text">Rp. 25.000.000</p>
          </div>
        </div>
      </div>

      <div class="card my-2 col-12 col-lg-3 col-md-6"
        style="max-height: 100px;background-color: #202E31;border-radius:10px;">
        <div class="row g-0">
          <div class="mt-3 ml-4">
            <img src="{{ asset('img/unesa-bw.png') }}" alt="">
          </div>
          <div class="card-body">
            <h5 class="card-title">Saldo Awal</h5>
            <p class="card-text">Rp. 25.000.000</p>
          </div>
        </div>
      </div>

      <div class="card my-2 col-12 col-lg-3 col-md-6"
        style="max-height: 100px;background-color: #202E31;border-radius:10px;">
        <div class="row g-0">
          <div class="mt-3 ml-4">
            <img src="{{ asset('img/unesa-bw.png') }}" alt="">
          </div>
          <div class="card-body">
            <h5 class="card-title">Saldo Awal</h5>
            <p class="card-text">Rp. 25.000.000</p>
          </div>
        </div>
      </div>

      <div class="card my-2 col-12 col-lg-3 col-md-6"
        style="max-height: 100px;background-color: #202E31;border-radius:10px;">
        <div class="row g-0">
          <div class="mt-3 ml-4">
            <img src="{{ asset('img/unesa-bw.png') }}" alt="">
          </div>
          <div class="card-body">
            <h5 class="card-title">Saldo Awal</h5>
            <p class="card-text">Rp. 25.000.000</p>
          </div>
        </div>
      </div>

    </div>

    <div class="row mt-3">
      <div class="col">
        <div class="row justify-content-center">
          <img src="{{ asset('img/unesa.png') }}" alt="">
        </div>
        <div class="col text-center">
          <h1 style="font-weight: 100;color:#D9AF48;">Sistem Informasi Keuangan</h1>
          <p style="font-size:20px;color:#D9AF48;">Universitas Negeri Surabaya</p>
        </div>
      </div>
    </div>
  </div>

</section>
@endsection