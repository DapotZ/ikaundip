<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Alumnus;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class LoginUserController extends Controller
{
    //
    public function register()
    {
        return view('user.register');
    }

    public function registermethod(Request $request)
    {
        $data = $request->except('_token');

        $request->validate([
            'name' => 'required|unique:users|exists:registeruser,name',
            'foto' => 'required|image|mimes:jpeg,jpg,png',
            'fakultas' => 'required|exists:registeruser,fakultas',
            'jurusan' => 'required|exists:registeruser,jurusan',
            'tahunlulus' => 'required|exists:registeruser,tahunlulus',
            'pekerjaan' => 'required|exists:registeruser,pekerjaan',
            'nim' => 'required|unique:alumnus,nim|exists:registeruser,nim',
        ]);

        $photoAlumnus = $request->foto;

        $originalPhotoAlumnusName = Str::random(10) . $photoAlumnus->getClientOriginalName();

        $photoAlumnus->storeAs('public/alumnus', $originalPhotoAlumnusName);

        $data['foto'] = $originalPhotoAlumnusName;

        Alumnus::create($data);

        return redirect()->route('user')->with('success', 'Data Alumnus Berhasil Dibuat');
    }

}
