@extends('layouts.master')

@section('title', 'Dashbord Sistem Keuangan')

@section('content')
<section class="section">
  <h1 class="mt-2" style="font-size: 30px">Data Beranda</h1>
  <div class="container">
    <div class="row">

      <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1 bg-dark " style="border-radius: 30px">
          <div class="card-icon text-light">
            <i class="far fa-user"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4 class=" text-light">Saldo Awal</h4>
            </div>
            <div class="card-body text-light mt-2" style="font-size: 13px">
              Rp 25.000.000
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 col-12 ">
        <div class="card card-statistic-1 bg-dark " style="border-radius: 30px">
          <div class="card-icon text-light">
            <i class="far fa-user"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4 class=" text-light">Saldo Awal</h4>
            </div>
            <div class="card-body text-light mt-2" style="font-size: 13px">
              Rp 25.000.000
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 col-12 ">
        <div class="card card-statistic-1 bg-dark " style="border-radius: 30px">
          <div class="card-icon text-light">
            <i class="far fa-user"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4 class=" text-light">Saldo Awal</h4>
            </div>
            <div class="card-body text-light mt-2" style="font-size: 13px">
              Rp 25.000.000
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 col-12 ">
        <div class="card card-statistic-1 bg-dark " style="border-radius: 30px">
          <div class="card-icon text-light">
            <i class="far fa-user"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4 class=" text-light">Saldo Awal</h4>
            </div>
            <div class="card-body text-light mt-2" style="font-size: 13px">
              Rp 25.000.000
            </div>
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