<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Proposal;
use Illuminate\Support\Facades\Redirect;

class ProposalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // mengambil data dari table user
        if(session('user_role') == 'Dosen'){
            $proposal = DB::table('Proposals')->get();

            $pendingCount = $this->getStatusCount('pending');
            $approvedCount = $this->getStatusCount('diterima');
            $rejectedCount = $this->getStatusCount('ditolak');

            // mengirim data pegawai ke view index
            return view('user/kegiatan', ['proposal' => $proposal, 'halaman' => 'Kegiatan'], compact('pendingCount', 'approvedCount', 'rejectedCount'));
        } else {
            $userId = session('user_nama'); // Ganti dengan key session yang sesuai dengan kebutuhan Anda

            // Mengambil data dari database yang sesuai dengan data dalam session
            $dataSesuaiSession = DB::table('Proposals')
                ->where('user_up', $userId)
                ->get();

            return view('user/kegiatan', ['proposal' => $dataSesuaiSession, 'halaman' => 'Kegiatan']);
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
        $data['deskripsi'] = $request->deskripsi;
        $data['user_up'] = session('user_nama');
        $data['user_id'] = session('user_id');
        $data['user_app'] = "null";
        $data['status'] = 'Pending';

        $propo = Proposal::create($data);

        if (!$propo) {
            return redirect(route('kegiatan'))->with("error", "Detail registrasi tidak valid");
        }

        return redirect(route('addUser'))->with("Success", "Registrasi akun berhasil");
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

    private function getStatusCount($status)
    {
        return Proposal::where('status', $status)->count();
    }

    public function countByStatus()
    {
        $pendingCount = $this->getStatusCount('pending');
        $approvedCount = $this->getStatusCount('diterima');
        $rejectedCount = $this->getStatusCount('ditolak');

        return view('user/dashboard', ['halaman' => "Dashboard"], compact('pendingCount', 'approvedCount', 'rejectedCount'));
    }

    public function terima(string $id, string $user)
    {
        $proposal = Proposal::find($id);

        // update status proposal menjadi terima
        $proposal->status = 'Diterima';
        $proposal->user_app = $user;
        $proposal->save();

        return Redirect::back();

    }

    public function tolak(string $id)
    {
        $proposal = Proposal::find($id);

        // update status user menjadi tolak
        $proposal->status = 'Ditolak';
        $proposal->save();

        return Redirect::back();

    }
}
