<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Registrar;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;


class RegistrarController extends Controller
{
    public function register(){
        return view('pendaftaran');
    }

    public function index()
    {
        $registrars = Registrar::orderBy('created_at', 'DESC');
        $registrars = $registrars->simplePaginate(99)->toArray()['data'];
        foreach ($registrars as $key => $val) {
            $registrars[$key]['created_at'] = Carbon::create($registrars[$key]['created_at'])->toDateTimeString();
        }

        return view('dashboard', compact('registrars'));
    }

    public function create(Request $request)
    {
        $registrar = new Registrar;

        $registrar->full_name = $request->full_name;
        $registrar->gender = $request->gender;
        $registrar->address = $request->address;
        $registrar->religion = $request->religion;
        $registrar->asal_smp = $request->asal_smp;
        $registrar->major = $request->major;

        $request->validate([
            'full_name' => 'required|string',
            'gender' => ['required', Rule::in(config('constant.registrar.gender'))],
            'address' => 'required|string',
            'religion' => ['required', Rule::in(config('constant.registrar.religion'))],
            'asal_smp' => 'required|string',
            'major' => ['required', Rule::in(config('constant.registrar.major'))],
        ]);

        $registrar->save();

        return redirect('/pendaftaran')->with('success', 'Berhasil mendaftar');
    }

    public function detail($id)
    {
        $registrar = Registrar::findOrFail($id);

        return view('edit', compact('registrar'));
    }

    public function update(Request $request, $id)
    {
        $registrar = Registrar::findOrFail($id);

        $registrar->full_name = $request->full_name;
        $registrar->gender = $request->gender;
        $registrar->address = $request->address;
        $registrar->religion = $request->religion;
        $registrar->asal_smp = $request->asal_smp;
        $registrar->major = $request->major;

        $request->validate([
            'full_name' => 'required|string',
            'gender' => ['required', Rule::in(config('constant.registrar.gender'))],
            'address' => 'required|string',
            'religion' => ['required', Rule::in(config('constant.registrar.religion'))],
            'asal_smp' => 'required|string',
            'major' => ['required', Rule::in(config('constant.registrar.major'))],
        ]);

        $registrar->save();

        return redirect()->back()->with('success', 'Berhasil memperbarui data');
    }

    public function delete($id)
    {
        $registrar = Registrar::findOrFail($id);
        $registrar->delete();

        return redirect()->back()->with('success', 'Berhasil menghapus data');
    }

    public function print($id)
    {
        $registrar = Registrar::findOrFail($id);

        return view('print', compact('registrar'));
    }
}
