<?php

namespace App\Http\Controllers\admin;

use Dompdf\Dompdf;
use App\Models\Alumnus;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Exports\ExportAlumnus;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Storage;
use Barryvdh\DomPDF\Facade\Pdf;

class AlumnusController extends Controller
{
    public function index()
    {
        $alumnus = Alumnus::all();

        return view('admin.alumnus', ['alumnus' => $alumnus]);
    }

    public function edit($id)
    {
        $alumnus = Alumnus::find($id);
        return view('admin.alumnus-edit', ['alumnus'=> $alumnus]);
    }

    public function update(Request $request, $id)
    {
        $data = $request->except('_token');

        $request->validate([
            'name' => 'required|unique:users|exists:registeruser,name',
            'foto' => 'image|mimes:jpeg,jpg,png',
            'fakultas' => 'required|exists:registeruser,fakultas',
            'jurusan' => 'required|exists:registeruser,jurusan',
            'tahunlulus' => 'required|exists:registeruser,tahunlulus',
            'pekerjaan' => 'required|exists:registeruser,pekerjaan',
            'nim' => 'required|exists:registeruser,nim',
        ]);

        $alumnus = Alumnus::findOrFail($id);

        if ($request->hasFile('foto')) {
            $request->validate([
                'foto' => 'image|mimes:jpeg,jpg,png',
            ]);

            $photoAlumnus = $request->foto;

            $originalPhotoAlumnusName = Str::random(10) . $photoAlumnus->getClientOriginalName();

            $photoAlumnus->storeAs(
                'public/alumnus',
                $originalPhotoAlumnusName
            );

            // Delete foto lama
            Storage::delete('public/alumnus/' . $alumnus->foto);

            $data['foto'] = $originalPhotoAlumnusName;
        }

        $alumnus->update($data);

        return redirect()
            ->route('admin.alumnus')
            ->with('success', 'Data Alumnus Berhasil Diperbarui');
    }

    public function destroy($id)
    {
        $alumni = Alumnus::findOrFail($id);

        // Delete file foto
        Storage::delete('public/alumnus/' . $alumni->photo);

        $alumni->delete();

        return redirect()
            ->route('admin.alumnus')
            ->with('success', 'Data Alumnus Berhasil Dihapus');
    }

    public function searchalumni(Request $request) {
        if ($request->has('search')) {
            $searchTerm = $request->search;
            $alumnus = Alumnus::where('name', 'LIKE', '%' . $searchTerm . '%')
            ->orWhere('nim', 'LIKE', '%' . $searchTerm . '%')
            ->orWhere('jurusan', 'LIKE', '%' . $searchTerm . '%')
            ->get();
            $searchTerm = $request->search;

            if ($alumnus->isEmpty()) {
                return view('admin.alumnus',['alumnus'=>$alumnus])->with('message', 'Data tidak ditemukan')->with('searchTerm', $searchTerm);
            } else {
                return view('admin.alumnus',['alumnus'=>$alumnus]);
            }
        }
        else {
            $alumnus = Alumnus::all();
            return view('admin.alumnus',['alumnus'=>$alumnus]);
        }
    }

    public function exportExcel()
    {
        return Excel::download(new ExportAlumnus(), 'alumni.xlsx');
    }

    public function exportpdf()
    {
        $alumnus = Alumnus::get();

        $data = [
            'title' => 'Data Alumni',
            'date' => date('m/d/Y'),
            'alumnus' => $alumnus
        ];

        $pdf = PDF::loadView('admin.alumniPdf', $data);
        return $pdf->download('DataAlumni-lists.pdf');
    }
}
