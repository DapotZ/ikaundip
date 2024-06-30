<?php

namespace App\Http\Controllers\admin;

use App\Models\DataUser;
use App\Models\Alumnus;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class DataUserController extends Controller
{
    public function index()
    {
        $datauser = DataUser::all();

        return view('admin.datauser', ['datauser' => $datauser]);
    }

    public function create()
    {
        return view('admin.datauser-create');
    }

    public function store(Request $request)
    {
        $data = $request->except('_token');

        $request->validate([
            'name' => 'required|string',
            'nim' => 'required|string',
            'fakultas' => 'required|string',
            'jurusan' => 'required|string',
            'tahunlulus' => 'required|string',
            'pekerjaan' => 'required|string',
        ]);

        DataUser::create($data);

        return redirect()
            ->route('admin.datauser')
            ->with('success', 'Data User Berhasil Dibuat');
    }

    public function edit($id)
    {
        $datauser = DataUser::find($id);
        return view('admin.datauser-edit', ['datauser'=> $datauser]);
    }

    public function update(Request $request, $id)
    {
        $data = $request->except('_token');

        $request->validate([
            'name' => 'required|string',
            'nim' => 'required|string',
            'fakultas' => 'required|string',
            'jurusan' => 'required|string',
            'tahunlulus' => 'required|string',
            'pekerjaan' => 'required|string',
        ]);

        $datauser = DataUser::findOrFail($id);

        $originalNim = $datauser->nim;

        $datauser->update($data);

        $alumnus = Alumnus::where('nim', $originalNim)->first();

        if ($alumnus) {
            $alumnus->update($data);
        }

        return redirect()
            ->route('admin.datauser')
            ->with('success', 'Data User Berhasil Diperbarui');
    }

    public function destroy($id)
    {
        $news = DataUser::findOrFail($id);

        $news->delete();

        return redirect()
            ->route('admin.datauser')
            ->with('success', 'Data User Berhasil Dihapus');
    }
}
