<?php

namespace App\Http\Controllers;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{

    public function index()
    {
        $contact = Contact::all();

        return view('admin.contact', ['contact' => $contact]);
    }

    public function destroy($id)
    {
        $contact = Contact::findOrFail($id);

        $contact->delete();

        return redirect()
            ->route('admin.contact')
            ->with('success', 'Data Contact Berhasil Dihapus');
    }

    public function searchcontact(Request $request) {
        if ($request->has('search')) {
            $contact = Contact::where('name','LIKE','%'.$request->search.'%')->get();
        }
        else {
            $contact = Contact::all();
        }

        return view('admin.contact', ['contact' => $contact]);
    }
}
