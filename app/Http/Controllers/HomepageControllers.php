<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\BendaPusaka;
use App\Models\Event;

class HomepageControllers extends Controller
{
    public function koleksi(string $category = 'senjata')
    {
        $cats = BendaPusaka::CATEGORY;
        if (!in_array($category, $cats)) {
            return redirect()->route('koleksi', ['category' => $cats[0]]);
        }

        $bendaPusaka = BendaPusaka::query()->where('kategori', $category)
            ->latest()->get();

        return view('koleksi', compact('bendaPusaka', 'cats'));
    }

    public function dashboard()
    {
        $bendaPusaka = BendaPusaka::query()->latest()->get();
        $admins = Admin::query()->latest()->get();
        $events = Event::query()->latest()->get();
        return view('dashboard', compact('bendaPusaka', 'admins', 'events'));
    }

    public function beranda()
    {
        $bendaPusaka = BendaPusaka::query()->latest()->take(4)->get();
        $events = Event::query()->latest()->get();
        return view('beranda', compact('bendaPusaka', 'events'));
    }
}
