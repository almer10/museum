<?php

namespace App\Http\Controllers;

use App\Http\Requests\AdminRequest;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

class AdminControllers extends Controller
{
    public function store(AdminRequest $request, Admin $admin)
    {
        if ($request->filled('password')) {
            $admin->password = Hash::make($request->password);
        }

        $request->request->remove('password');
        $admin->fill($request->only($admin->offsetGet('fillable')))
            ->save();

        return redirect()->route('dashboard');
    }

    public function edit(Admin $admin)
    {
        return view('edit-admin', compact('admin'));
    }

    public function update(AdminRequest $request, Admin $admin)
    {
        if ($request->filled('password')) {
            $admin->password = Hash::make($request->password);
        }

        $request->request->remove('password');
        $admin->fill($request->only($admin->offsetGet('fillable')));

        if ($admin->isDirty()) {
            $admin->save();
        }

        return redirect()->route('dashboard');
    }

    public function delete(Admin $admin)
    {
        $admin->delete();
        return redirect()->route('dashboard');
    }
}
