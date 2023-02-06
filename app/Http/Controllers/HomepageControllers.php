<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Event;
use PDF;
use DB;
use App\Models\BendaPusaka;
use App\Models\PenanggungJawab;
use Illuminate\Support\Facades\Auth;

class HomepageControllers extends Controller
{
    public function koleksi(string $category = 'senjata')
    {
        $cats = BendaPusaka::CATEGORY;
        $bendaPusaka = BendaPusaka::query()->where('kategori', $category)
            ->latest()->get();
        if (!in_array($category, $cats)) {
            return redirect()->route('koleksi', ['category' => $cats[0]]);
        } 
        elseif ($category == 'all') {
                $bendaPusaka = BendaPusaka::query()->latest()->get();
        }
        return view('koleksi', compact('bendaPusaka', 'cats'));
    }

    public function dashboard(string $category = 'senjata')
    {
        $cats = BendaPusaka::CATEGORY;
        $bendaPusaka = BendaPusaka::query()->where('kategori', $category)->latest()->get();
        if (!in_array($category, $cats)) {
            return redirect()->route('dashboard', ['category' => $cats[0]]);
        } 
        elseif ($category == 'all') {
            $bendaPusaka = BendaPusaka::query()->latest()->get();
        }
        
        $admins = DB::table('admins')->get();
        $events = Event::query()->latest()->get();

        $userid = Auth::guard('web')->user()->id;
        $role = Admin::query()->where('id', $userid)
        ->latest()->get()[0]->pekerjaan;

        return view('dashboard', compact('bendaPusaka', 'cats', 'admins', 'events','role'));
    }
    
    public function view_pdf()
    {
        $bendaPusaka =  BendaPusaka::query()->latest()->get();

    	$pdf = PDF::loadView('cetak_benda_pusaka',['bendaPusaka'=>$bendaPusaka]);
    	return $pdf->stream('benda_pusaka.pdf');   
    }

    public function beranda()
    {
        $bendaPusaka = BendaPusaka::query()->latest()->take(4)->get();
        $events = Event::query()->latest()->get();
        return view('beranda', compact('bendaPusaka', 'events'));
    }
}
