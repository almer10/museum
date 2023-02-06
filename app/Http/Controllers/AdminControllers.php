<?php

namespace App\Http\Controllers;

use App\Http\Requests\AdminRequest;
use PDF;
use DB;
use App\Models\Admin;
use App\Models\BendaPusaka;
use Illuminate\Support\Facades\Hash;

class AdminControllers extends Controller
{
    public function store(AdminRequest $request, Admin $admin)  //fungsi tambah
    {
        if ($request->filled('password')) {
            $admin->password = Hash::make($request->password);
        }
        $request->request->remove('password');
        $admin->fill($request->only($admin->offsetGet('fillable')))->save();

        return redirect()->route('dashboard');
    }

    public function edit(Admin $admin)  //fungsi edit
    {

        return view('edit-admin', compact('admin'));
    }

    public function update(AdminRequest $request, Admin $admin) //fungsi untuk mengubah isi tabel
    {
        if ($request->filled('password')) {
            $admin->password = Hash::make($request->password);
        }

        $request->request->remove('password');  
        $admin->fill($request->only($admin->offsetGet('fillable')));

        if ($request->aktif == 0) {
            $admin->keterangan_non_aktif = null;
        }

        if ($admin->isDirty()) {    //kondisi save data
            $admin->save();
        }

        return redirect()->route('dashboard');
    }

    public function delete(Admin $admin)    //fungsi untuk menghapus data
    {
        $admin->delete();
        return redirect()->route('dashboard');
    }

    public function view_pdf()
    {
        $admins =  Admin::query()->latest()->get();
    	$pdf = PDF::loadView('cetak_penanggung_jawab',['admins'=>$admins]);
    	return $pdf->stream('penanggung-jawab.pdf');   
    }   
}
