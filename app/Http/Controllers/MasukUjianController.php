<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

use Auth;

class MasukUjianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $sql = DB::table("t_mutasi_kas_detail")
        ->join('t_mutasi_kas', 't_mutasi_kas.id','t_mutasi_kas_detail.t_mutasi_kas_id')
        ->join("m_siswa", 'm_siswa.nisn', 't_mutasi_kas_detail.m_siswa_nisn')
        ->where("t_mutasi_kas_detail.deleted_at", 'NULL')
        ->where("t_mutasi_kas.jenis_kas", 'ujian')

        // ->where("t_mutasi_kas.tgl", $tglAwal)
        // ->where("t_mutasi_kas.tgl", $tglAkhir)
        // ->groupBy('feedback.id_feedback')
        ->select('t_mutasi_kas.tgl','t_mutasi_kas_detail.*','m_siswa.*')
        // ->having('feedback.created_at')
        ->get();
        // return view('product/detail', compact('data', 'image','feedback'));
        
        // dd($sql);
        return view('pages/kas-masuk/ujian/indexUjian', compact('sql'));
    }

    // data table
    public function getDataSpp(Request $request,DataTables $dataTables)
    {
        $user = auth()->user()->username;
        $tglAwal = Carbon::now()->startOfMonth()->toDateString();
        $tglAkhir = Carbon::now()->endOfMonth()->toDateString();

        if(!empty($request->from_date)){
            $tglAwal = $request->from_date;
        }
        if(!empty($request->to_date)){
            $tglAkhir = $request->to_date;
        }

        $sql = DB::table("t_mutasi_kas_detail")
        ->join('t_mutasi_kas', 't_mutasi_kas.id','t_mutasi_kas_detail.t_mutasi_kas_id')
        ->join("m_siswa", 'm_siswa.nisn', 't_mutasi_kas.m_siswa_nisn')
        ->where("t_mutasi_kas_detail.deleted_at", NULL)
        ->where("t_mutasi_kas.tgl", $tglAwal)
        ->where("t_mutasi_kas.tgl", $tglAkhir)
        // ->groupBy('feedback.id_feedback')
        ->select('t_mutasi_kas*','t_mutasi_kas_detail*','m_siswa*')
        // ->having('feedback.created_at')
        ->get();
        // return view('product/detail', compact('data', 'image','feedback'));
        
        dd($sql);
        $results = DB::select($sql);
        $result = collect($results);
        return DataTables::of($result->all())
        ->addColumn('edit', function ($data) {
            return '<div class="justify-content-center d-flex">
               <a href="/admin/berita/berita/edit/'.$data->id.'" class="edit mr-1 btn btn-warning"><i class="fas fa-edit"></i> </a>
               </div>';
            })
         ->addColumn('delete', function ($data) {
             return '<div class="justify-content-center d-flex">
                <a href="/admin/berita/berita/delete/'.$data->id.'" class="delete mr-1 btn btn-danger"><i class="fas fa-trash"></i> </a>
                </div>';
        //  })->addColumn('cetak', function ($data) {
        //     return '<div class="justify-content-center d-flex">
        //        <a href="/admin/berita/berita/cetak/'.$data->id.'" class="mr-1 btn btn-primary"><i class="fas fa-print"></i> </a>
        //        </div>';
        // })->addColumn('view_file', function ($data) {
        //      if ($data->url_berita!=null) {
        //         return '<div class="justify-content-center d-flex">
        //         <a href="/data_file/'.$data->url_berita.'" class=" mr-1 btn btn-secondary"><i class="fas fa-search"></i> </a>
        //         </div>';
        //      }else{
        //          return "";
        //      }
        })->editColumn('status', function ($data) {
            if($data->status == 0){
                return '<div class="justify-content-center d-flex">
                <a href="#" style="cursor:default;" class="mr-1 btn btn-success"> Draft </a>
                </div>';
            }
            elseif($data->status == 1){
                return '<div class="justify-content-center d-flex">
                <a href="#" style="cursor:default;" class="mr-1 btn btn-success"> Tinjau </a>
                </div>';
            }
            elseif($data->status == 2){
                return '<div class="justify-content-center d-flex">
                <a href="#" style="cursor:default;" class="mr-1 btn btn-success"> Post </a>
                </div>';
            }   
        })->rawColumns(['edit','delete','status'])
            ->make(true);
    }
    // end data table
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $sql = DB::table("m_siswa")
        ->select('*')
        // ->having('feedback.created_at')
        ->get();
        // return view('product/detail', compact('data', 'image','feedback'));
        
        // dd($sql);
        // return view('pages/kas-masuk/spp', compact('sql'));
        return view('pages/kas-masuk/spp/inputSpp', compact('sql'));
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
        $siswa = $request->nisn;
        $nominal = $request->nominal;
        $keterangan = $keterangan->keterangan;

        DB::table('t_mutasi_kas')->insert(
            [
              'jenis_kas'=>"SPP",
              'tgl'=>Carbon::now(),
              'keterangan'=>$keterngan,
              'created_by'=>'admin',
              'created_at' => Carbon::now()

            ]
          );   
        DB::table('t_mutasi_kas_detail')->insert(
            [
              'id_siswa_nisn'=>$siswa,
              'nominal'=>$nominal,
              'keterangan'=>$keterngan,
              'created_by'=>'admin',
              'created_at' => Carbon::now()

            ]
          );
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
