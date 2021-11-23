@extends('layouts.master')

@section('title','Data Penggajian')

@section('content')
<br>
<section class="section">
  <div class="row">
      <div class="col-12">
          <div class="card">
              <div class="card-header p-0">
                  <div class="col-md-6  col-lg-6 text-left col-12">
                      <h5 class="text-blue">Data Keluar Penggajian</h5>
                  </div>
                  <div class="col-md-12 col-lg-6 d-flex col-12 justify-content-end">
                      <div class="card-header-action mx-1">
                          <a href="{{ route('tambahdataspp') }}" class="btn btn-primary">Tambah
                              Data <i class="fas fa-plus"></i></a>
                      </div>
                  </div>
              </div>

              <div class="card-body pb-5 pt-2">
                  {{-- <div class="row mt-4 mb-3 input-daterange">
                      <div class="col-md-3 offset-2">
                          <input type="text" name="from_date" id="from_date" class="form-control"
                              placeholder="Dari tanggal" readonly />
                      </div>
                      <div class="col-md-3">
                          <input type="text" name="to_date" id="to_date" class="form-control"
                              placeholder="Saat ini" readonly />
                      </div>
                      <div class="col-md-3">
                          <button type="button" name="filter" id="filter"
                              class="btn btn-primary">Cari</button>
                          <button type="button" name="refresh" id="refresh"
                              class="btn btn-default">Refresh</button>
                      </div>
                  </div> --}}
                  <div class="table-responsive overflow-hidden table-invoice">
                      <table id="tabelBerita" class="table w-100 table-hover">
                          <thead>
                              <tr>
                                  <th>ID</th>
                                  <th>Nama</th>
                                  <th>NIP</th>
                                  <th>Nominal</th>
                                  <th>Keterangan</th>
                                  <th>Tanggal</th>
                                  <th>Lihat/Edit</th>
                                  <th>Delete</th>
                              </tr>
                          </thead>
                          <tbody>
                              {{-- data table ajax --}}
                              @foreach ($sql as $list)
                              <tr style="font-size:12px;">
                                <td>{{ $list->id }}</td>
                                <td>{{ $list->nama }}</td>
                                <td>{{ $list->nip }}</td>
                                <td>{{ $list->nominal }}</td>
                                <td>{{ $list->keterangan }}</td>
                                <td>{{ $list->tgl }}</td>
                                <td><a href="" class="btn btn-sm btn-info"  style="font-size:10px;"><i class="fa fa-eye"> Detail</i></a></td>
                                <td><a href="" class="btn btn-sm btn-danger"  style="font-size:10px;"><i class="fa fa-eye"> Hapus</i></a></td>

                                {{-- <td style="font-size:10px;"><a href="" class="btn btn-md btn-danger"><i class="fa fa-eye"> Delete</i></a></td> --}}
                              </tr>
                              @endforeach
                              
                          </tbody>
                      </table>
                  </div>
              </div>
    
@endsection

@push('back-script')
{{-- data table --}}
{{-- <script src="{{ asset('assets\DataTables\js\jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets\DataTables\js\dataTables.bootstrap4.js') }}"></script> --}}
{{-- end data table --}}

{{-- <script>
    $(document).ready(function () {
        // data table ajax
        $('#from_date,#to_date').datepicker({
            todayBtn: 'linked',
            format: 'yyyy-mm-dd',
            autoclose: true
        });
        load_data();

        function load_data(from_date = '', to_date = '') {
            $('#tabelBerita').DataTable({
                processing: true,
                serverside: true,
                "order": [
                    [0, 'desc']
                ],
                ajax: {
                    url:"{{route('getDataSpp')}}",
                    data:{from_date:from_date, to_date:to_date}
                },
                columns: [{
                    data: 'id',
                    name: 'id',
                }, {
                    data: 'nama_siswa',
                    name: 'nama_siswa',
                }, {
                    data: 'nisn',
                    name: 'nisn',
                },{
                    data: 'nominal',
                    name: 'nominal',
                    "className": "text-center",
                }, {
                    data: 'keterangan',
                    name: 'keterangan'
                }, {
                    data: 'tgl',
                    name: 'tgl'
                },{
                    data: 'edit',
                    name: 'edit',
                    "className": "text-center",
                },{
                    data: 'delete',
                    name: 'delete',
                    "className": "text-center",
                }],


                // ubah bahasa data table
                "language": {
                    "sProcessing": "Sedang memproses...",
                    "sLengthMenu": "Tampilkan _MENU_ entri",
                    "sZeroRecords": "Tidak ditemukan data yang sesuai",
                    "sInfo": "Menampilkan _START_ sampai _END_ dari _TOTAL_ entri",
                    "sInfoEmpty": "Menampilkan 0 sampai 0 dari 0 entri",
                    "sInfoFiltered": "(disaring dari _MAX_ entri keseluruhan)",
                    "sInfoPostFix": "",
                    "sSearch": "Cari:",
                    "sUrl": "",
                    "oPaginate": {
                        "sFirst": "Pertama",
                        "sPrevious": "Sebelumnya",
                        "sNext": "Selanjutnya",
                        "sLast": "Terakhir"
                    }
                }
                // end ubah bahasa data table
            });
        }
        // end data table ajax

        $('#filter').click(function () {
            var from_date = $('#from_date').val();
            var to_date = $('#to_date').val();
            if (from_date != '' && to_date != '') {
                $('#tabelBerita').DataTable().destroy();
                load_data(from_date, to_date);
            } else {
                const Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 2000
                });

                Toast.fire({
                    type: 'error',
                    title: 'Kedua tanggal harus di isi'
                });
            }
        });

        $('#refresh').click(function () {
            $('#from_date').val('');
            $('#to_date').val('');
            $('#tabelBerita').DataTable().destroy();
            load_data();
        });
    });

</script> --}}
{{-- @include('sweetalert::alert') --}}
@endpush