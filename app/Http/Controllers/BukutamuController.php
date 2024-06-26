<?php

namespace App\Http\Controllers;

use App\Models\BukutamuModel;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Dompdf\Dompdf;
use App\Charts\Bukutamu;
use ConsoleTVs\Charts\Classes\Chartjs\Chart;

class BukutamuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Halaman Admin
        $bukutamu = DB::table('buku_tamu')
            ->select('buku_tamu.nama','buku_tamu.no_hp', 'buku_tamu.email', 'buku_tamu.instansi','buku_tamu.jenis_layanan', 'buku_tamu.created_at', 'layanan.nama_layanan', 'jenis_layanan.jenis_layanan')
            ->join('layanan', 'buku_tamu.layanan', '=', 'layanan.id')
            ->join('jenis_layanan', 'buku_tamu.jenis_layanan', '=', 'jenis_layanan.id')
            ->orderBy('created_at', 'desc')
            ->get();
        return view('welcome',compact('bukutamu'))->with('i', (request()->input('page', 1) - 1) * 5);
    }
    public function ulp(){
        $bukutamu = DB::table('buku_tamu')
            ->select('buku_tamu.nama','buku_tamu.no_hp', 'buku_tamu.email', 'buku_tamu.instansi','buku_tamu.jenis_layanan', 'buku_tamu.created_at', 'layanan.nama_layanan', 'jenis_layanan.jenis_layanan')
            ->join('layanan', 'buku_tamu.layanan', '=', 'layanan.id')
            ->join('jenis_layanan', 'buku_tamu.jenis_layanan', '=', 'jenis_layanan.id')
            ->where('layanan', '=', 1)
            ->orderBy('created_at', 'desc')
            ->get();
        return view('welcome',compact('bukutamu'))->with('i', (request()->input('page', 1) - 1) * 5);
    }
    public function lpse(){
        $bukutamu = DB::table('buku_tamu')
            ->select('buku_tamu.nama','buku_tamu.no_hp', 'buku_tamu.email', 'buku_tamu.instansi','buku_tamu.jenis_layanan', 'buku_tamu.created_at', 'layanan.nama_layanan', 'jenis_layanan.jenis_layanan')
            ->join('layanan', 'buku_tamu.layanan', '=', 'layanan.id')
            ->join('jenis_layanan', 'buku_tamu.jenis_layanan', '=', 'jenis_layanan.id')
            ->where('layanan', '=', 2)
            ->orderBy('created_at', 'desc')
            ->get();
        return view('welcome',compact('bukutamu'))->with('i', (request()->input('page', 1) - 1) * 5);
    }
    public function advokasi(){
        $bukutamu = DB::table('buku_tamu')
            ->select('buku_tamu.nama','buku_tamu.no_hp', 'buku_tamu.email', 'buku_tamu.instansi','buku_tamu.jenis_layanan', 'buku_tamu.created_at', 'layanan.nama_layanan', 'jenis_layanan.jenis_layanan')
            ->join('layanan', 'buku_tamu.layanan', '=', 'layanan.id')
            ->join('jenis_layanan', 'buku_tamu.jenis_layanan', '=', 'jenis_layanan.id')
            ->where('layanan', '=', 3)
            ->orderBy('created_at', 'desc')
            ->get();
        return view('welcome',compact('bukutamu'))->with('i', (request()->input('page', 1) - 1) * 5);
    }
    
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('landing');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request -> validate([
            'nama' => 'required',
            'no_hp' => 'required|numeric',
            'email' => 'required',
            'instansi' => 'required',
            'layanan' => 'required',
            'jenis_layanan' => 'required'
        ]);
        BukutamuModel::create($request->all());
        return redirect()->route('bukutamu.create')->with('success','Terimakasih selamat berkunjung');
    }

    /**
     * Display the specified resource.
     */
    public function show(BukutamuModel $bukutamuModel)
    {
       //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(BukutamuModel $bukutamuModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, BukutamuModel $bukutamuModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BukutamuModel $bukutamuModel)
    {
        //
    }

    public function printPDF(BukutamuModel $bukutamuModel){
        $bukutamu = DB::table('buku_tamu')
            ->select('buku_tamu.nama','buku_tamu.no_hp', 'buku_tamu.email', 'buku_tamu.instansi','buku_tamu.jenis_layanan', 'buku_tamu.created_at', 'layanan.nama_layanan', 'jenis_layanan.jenis_layanan')
            ->join('layanan', 'buku_tamu.layanan', '=', 'layanan.id')
            ->join('jenis_layanan', 'buku_tamu.jenis_layanan', '=', 'jenis_layanan.id')
            ->orderBy('created_at', 'desc')
            ->get();
        
        $pdf = new Dompdf();
        $pdf->loadHtml(view('printPDF', ['bukutamu'=>$bukutamu]));
        $pdf->setPaper('A4', 'portrait');
        $pdf->render();
        return $pdf->stream('Buku Tamu.pdf', ['Attachment' => false]);
    }

    public function chart(){
        $chart = new Bukutamu;

        return view('chart', compact('chart'));
    }
}
