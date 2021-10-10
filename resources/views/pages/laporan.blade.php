@extends('layouts.master')

@section('title','Data Guru')

@section('content')
<div class="container">
  <div class="row justify-content-between">
    <p style="font-size: 28px;color:#000" class="mt-4">Data Laporan Kas</p>
    <button type="button" class="btn btn-secondary btn-sm text-dark button-custom">Tambah Data</button>
  </div>

  <div class="mt-2">
    <a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a>
    <input class="form-control" type="search" placeholder="Search" aria-label="Search" data-width="250"
      style="border-radius:10px">
  </div>

  <div class="card-body p-0">
    <div class="table-responsive mt-3">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Tanggal</th>
            <th scope="col">Saldo Awal</th>
            <th scope="col">Kas Masuk</th>
            <th scope="col">Kas Keluar</th>
            <th scope="col">Saldo Akhir</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>07-10-2021</td>
            <td>25.000.000</td>
            <td>500.000</td>
            <td>0</td>
            <td>24.500.000</td>
            <td>
              <a href="#" class="badge badge-warning">Detail</a>
            </td>
          </tr>
          <tr>
            <th scope="row">1</th>
            <td>07-10-2021</td>
            <td>25.000.000</td>
            <td>500.000</td>
            <td>0</td>
            <td>24.500.000</td>
            <td>
              <a href="#" class="badge badge-warning">Detail</a>
            </td>
          </tr>
          <tr>
            <th scope="row">1</th>
            <td>07-10-2021</td>
            <td>25.000.000</td>
            <td>500.000</td>
            <td>0</td>
            <td>24.500.000</td>
            <td>
              <a href="#" class="badge badge-warning">Detail</a>
            </td>
          </tr>
          <tr>
            <th scope="row">1</th>
            <td>07-10-2021</td>
            <td>25.000.000</td>
            <td>500.000</td>
            <td>0</td>
            <td>24.500.000</td>
            <td>
              <a href="#" class="badge badge-warning">Detail</a>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>


</div>
@endsection