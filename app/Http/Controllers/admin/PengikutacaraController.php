<?php

namespace App\Http\Controllers\admin;

use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\daftaracara;
use Illuminate\Http\Request;
use App\Exports\ExportPengikutacara;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;

class PengikutacaraController extends Controller
{
    public function index()
    {
        $pengikutacara = Daftaracara::with('alumnus')->get();
        return view('admin.pengikutacara', ['pengikutacara' => $pengikutacara]);
    }

    public function destroy($id)
    {
        $pengikutacara = Daftaracara::findOrFail($id);

        $pengikutacara->delete();

        return redirect()
            ->route('admin.pengikutacara')
            ->with('success', 'Data Pengikut Acara Berhasil Dihapus');
    }

    public function searchpengikutacara(Request $request)
    {

        if ($request->has('search')) {
            $searchTerm = $request->search;
            $pengikutacara = daftaracara::where('nim', 'LIKE', '%' . $searchTerm . '%')
                ->orWhereHas('alumnus', function ($query) use ($searchTerm) {
                    $query->where('name', 'LIKE', '%' . $searchTerm . '%');
                })->get();

            if ($pengikutacara->isEmpty()) {
                return view('admin.pengikutacara', ['pengikutacara' => $pengikutacara])->with('message', 'Data tidak ditemukan')->with('searchTerm', $searchTerm);
            } else {
                return view('admin.pengikutacara', ['pengikutacara' => $pengikutacara]);
            }
        } else {
            $pengikutacara = daftaracara::all();
            return view('admin.pengikutacara', ['pengikutacara' => $pengikutacara]);
        }
    }

    public function exportExcel()
    {
        return Excel::download(new ExportPengikutacara(), 'PengikutAcara.xlsx');
    }

    public function exportpdf()
    {
        $pengikutacara = daftaracara::with('alumnus')->get();

        $data = [
            'title' => 'Data Pengikut Acara',
            'date' => date('m/d/Y'),
            'pengikutacara' => $pengikutacara
        ];

        $pdf = PDF::loadView('admin.pengikutacaraPdf', $data);
        return $pdf->download('DataPengikutAcara-lists.pdf');
    }
}
