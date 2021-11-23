<aside id="sidebar-wrapper">
  <div class="sidebar-brand sidebar-custom">
    <div class="row justify-content-center" style="margin-top: 10px">
      <img src="{{ asset('img/unesa-bw.png') }}" alt="">
      <div class="column" style="max-height: 10px">
        <p>Sistem</p>
        <p style="margin-left:20px;margin-top:-10px">Keuangan</p>
      </div>
    </div>
  </div>
  <div class="sidebar-brand sidebar-custom sidebar-custom-sm">
    <img src="{{ asset('img/unesa-bw.png') }}" alt="">
  </div>
  <div class="sidebar-brand">
    <div class="row justify-content-center mt-2">
      <div class="nav-link-user-custom">
        <img alt="image" src="{{ asset('stisla-master/assets/img/avatar/avatar-1.png') }}"
          class="rounded-circle mr-1" />
      </div>
      <a href="#" style="margin-top: 3px; margin-left:15px">SIPERAN</a>
    </div>
  </div>
  <div class="sidebar-brand sidebar-brand-sm">
    <a href="#">SP</a>
  </div>
  <ul class="sidebar-menu">
    <li class="nav-item {{ (request()->is('dashboard')) ? ' active' : '' }}">
      <a href="/dashboard" class="nav-link"><i class="fas fa-home"></i><span>Beranda</span></a>
    </li>

    <li class="nav-item dropdown">
      <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-database"></i>
        <span>Data Master</span></a>
      <ul class="dropdown-menu">
        <li class="nav-item {{ (request()->is('indexGuru')) ? ' active' : '' }}">
          <a class="nav-link" href="{{ route('indexGuru') }}">Data Guru</a>
        </li>
        {{-- <li><a class="nav-link" href="/data-kelas">Data Kelas</a></li> --}}
        <li class="nav-item {{ (request()->is('indexSiswa')) ? ' active' : '' }}">
          <a class="nav-link" href="{{ route('indexSiswa') }}">Data Siswa</a>
        </li>
        {{-- <li><a class="nav-link" href="/jenis-transaksi">Jenis Transaksi</a></li> --}}
        {{-- <li><a class="nav-link" href="/tanggal-merah">Tanggal Merah</a></li> --}}
      </ul>
    </li>

    <li class="nav-item dropdown">
      <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i>
        <span>Kas Masuk</span></a>
      <ul class="dropdown-menu">
        <li class="nav-item {{ (request()->is('indexPendaftaran')) ? ' active' : '' }}">
          <a class="nav-link" href="{{ route('indexPendaftaran') }}">Pendaftaran</a>
        </li>
        <li class="nav-item {{ (request()->is('indexUjian')) ? ' active' : '' }}">
          <a class="nav-link" href="{{ route('indexUjian') }}">Uang Ujian</a>
        </li>
        <li class="nav-item {{ (request()->is('indexSpp')) ? ' active' : '' }}">
          <a class="nav-link" href="{{route('indexSpp')}}">Uang SPP</a>
        </li>
      </ul>
    </li>

    <li class="nav-item dropdown">
      <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i>
        <span>Kas Keluar</span></a>
      <ul class="dropdown-menu">
        <li class="nav-item {{ (request()->is('indexGaji')) ? ' active' : '' }}">
          <a class="nav-link" href="{{ route('indexGaji') }}">Pembayaran gaji</a>
        </li>
      </ul>
    </li>

    <li class="nav-item {{ (request()->is('laporan')) ? ' active' : '' }}">
      <a class="nav-link" href="/laporan"><i class="far fa-chart-bar"></i> <span>Laporan</span></a>
    </li>

  </ul>

  <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
    <a href="#" class="btn btn-primary btn-lg btn-block btn-icon-split">
      <i class="fas fa-sign-out-alt"></i> Logout
    </a>
  </div>
</aside>
