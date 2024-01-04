<?php

namespace App\Http\Controllers;

use App\Models\LPJ;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Proposal;
use Illuminate\Support\Facades\Redirect;

class LpjController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // mengambil data dari table user
        if(session('user_role') == 'Dosen'){
            $LPJ = DB::table('l_p_j_s')->get();

            $pendingCount = $this->getStatusCount('pending');
            $approvedCount = $this->getStatusCount('diterima');
            $rejectedCount = $this->getStatusCount('ditolak');

            // mengirim data pegawai ke view index
            return view('/lpj', ['lpj' => $LPJ, 'halaman' => 'LPJ'], compact('pendingCount', 'approvedCount', 'rejectedCount'));
        } else {
            $userId = session('user_nama'); // Ganti dengan key session yang sesuai dengan kebutuhan Anda

            // Mengambil data dari database yang sesuai dengan data dalam session
            $dataSesuaiSession = DB::table('l_p_j_s')
                ->where('user_up', $userId)
                ->get();

            return view('/lpj', ['lpj' => $dataSesuaiSession, 'halaman' => 'LPJ']);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'isi' => 'required',
            'deskripsi' => 'required',
        ]);

        $data['judul'] = $request->judul;
        $data['isi'] = $request->isi;
        $data['status'] = 'Pending';
        $data['user_up'] = session('user_nama');
        $data['user_id'] = session('user_id');
        $data['user_app'] = "null";

        $propo = LPJ::create($data);

        if (!$propo) {
            return redirect(route('kegiatan'))->with("error", "Detail registrasi tidak valid");
        }

        return redirect(route('/lpj'))->with("Success", "Registrasi akun berhasil");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
