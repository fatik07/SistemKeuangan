<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;


use Auth;

class GuruController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $sql = DB::table("m_guru")
            // ->join('t_mutasi_kas', 't_mutasi_kas.id','t_mutasi_kas_detail.t_mutasi_kas_id')
            // ->join("m_siswa", 'm_siswa.nisn', 't_mutasi_kas_detail.m_siswa_nisn')
            // ->where("t_mutasi_kas_detail.deleted_at", 'NULL')
            // ->where("t_mutasi_kas.jenis_kas", 'ujian')

            // ->where("t_mutasi_kas.tgl", $tglAwal)
            // ->where("t_mutasi_kas.tgl", $tglAkhir)
            // ->groupBy('feedback.id_feedback')
            // ->select('t_mutasi_kas.tgl','t_mutasi_kas_detail.*','m_siswa.*')
            ->orderBy('nip', 'ASC')
            // ->having('feedback.created_at')
            ->get();
        // return view('product/detail', compact('data', 'image','feedback'));

        // dd($sql);
        return view('pages/data-master/guru/indexGuru', compact('sql'));
    }

    // data table
    // public function getDataSpp(Request $request,DataTables $dataTables)
    // {
    //     $user = auth()->user()->username;
    //     $tglAwal = Carbon::now()->startOfMonth()->toDateString();
    //     $tglAkhir = Carbon::now()->endOfMonth()->toDateString();

    //     if(!empty($request->from_date)){
    //         $tglAwal = $request->from_date;
    //     }
    //     if(!empty($request->to_date)){
    //         $tglAkhir = $request->to_date;
    //     }

    //     $sql = DB::table("t_mutasi_kas_detail")
    //     ->join('t_mutasi_kas', 't_mutasi_kas.id','t_mutasi_kas_detail.t_mutasi_kas_id')
    //     ->join("m_siswa", 'm_siswa.nisn', 't_mutasi_kas.m_siswa_nisn')
    //     ->where("t_mutasi_kas_detail.deleted_at", NULL)
    //     ->where("t_mutasi_kas.tgl", $tglAwal)
    //     ->where("t_mutasi_kas.tgl", $tglAkhir)
    //     // ->groupBy('feedback.id_feedback')
    //     ->select('t_mutasi_kas*','t_mutasi_kas_detail*','m_siswa*')
    //     // ->having('feedback.created_at')
    //     ->get();
    //     // return view('product/detail', compact('data', 'image','feedback'));

    //     dd($sql);
    //     $results = DB::select($sql);
    //     $result = collect($results);
    //     return DataTables::of($result->all())
    //     ->addColumn('edit', function ($data) {
    //         return '<div class="justify-content-center d-flex">
    //            <a href="/admin/berita/berita/edit/'.$data->id.'" class="edit mr-1 btn btn-warning"><i class="fas fa-edit"></i> </a>
    //            </div>';
    //         })
    //      ->addColumn('delete', function ($data) {
    //          return '<div class="justify-content-center d-flex">
    //             <a href="/admin/berita/berita/delete/'.$data->id.'" class="delete mr-1 btn btn-danger"><i class="fas fa-trash"></i> </a>
    //             </div>';
    //     //  })->addColumn('cetak', function ($data) {
    //     //     return '<div class="justify-content-center d-flex">
    //     //        <a href="/admin/berita/berita/cetak/'.$data->id.'" class="mr-1 btn btn-primary"><i class="fas fa-print"></i> </a>
    //     //        </div>';
    //     // })->addColumn('view_file', function ($data) {
    //     //      if ($data->url_berita!=null) {
    //     //         return '<div class="justify-content-center d-flex">
    //     //         <a href="/data_file/'.$data->url_berita.'" class=" mr-1 btn btn-secondary"><i class="fas fa-search"></i> </a>
    //     //         </div>';
    //     //      }else{
    //     //          return "";
    //     //      }
    //     })->editColumn('status', function ($data) {
    //         if($data->status == 0){
    //             return '<div class="justify-content-center d-flex">
    //             <a href="#" style="cursor:default;" class="mr-1 btn btn-success"> Draft </a>
    //             </div>';
    //         }
    //         elseif($data->status == 1){
    //             return '<div class="justify-content-center d-flex">
    //             <a href="#" style="cursor:default;" class="mr-1 btn btn-success"> Tinjau </a>
    //             </div>';
    //         }
    //         elseif($data->status == 2){
    //             return '<div class="justify-content-center d-flex">
    //             <a href="#" style="cursor:default;" class="mr-1 btn btn-success"> Post </a>
    //             </div>';
    //         }   
    //     })->rawColumns(['edit','delete','status'])
    //         ->make(true);
    // }
    // end data table
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $sql = DB::table("m_guru")
            ->select('*')
            // ->having('feedback.created_at')
            ->get();
        // return view('product/detail', compact('data', 'image','feedback'));

        // dd($sql);
        // return view('pages/kas-masuk/spp', compact('sql'));
        return view('pages/data-master/guru/inputGuru', compact('sql'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $insert = DB::table('m_guru')->insert(
            [
                'nip' => $request->nip,
                'nama' => $request->nama,
                'jabatan' => $request->jabatan,
                'jk' => $request->jk,
                'alamat' => $request->alamat,
                'tgl_lahir' => $request->tgl,
                'created_by' => 'admin',
                'created_at' => Carbon::now()

            ]
        );

        return redirect('master/guru')->with('toast_success', 'Berhasil Menambahkan berita');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
