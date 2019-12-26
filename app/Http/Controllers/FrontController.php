<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Submerchant;
use App\Antre;
use Auth;

class FrontController extends Controller
{
    public function index()
    {
        // $submerchants = Submerchant::orderBy('submerchants.idmerchant', 'DESC')
        //               ->join('merchants', 'submerchants.idmerchant', '=', 'merchants.id')
        //               ->select('merchants.nama as name', 'submerchants.nama as nama', 'submerchants.deskripsi', 'submerchants.gambar', 'submerchants.id')
        //               ->get();
        $submerchants = Submerchant::orderBy('submerchants.idmerchant', 'DESC')
                      ->leftJoin('merchants', 'submerchants.idmerchant', '=', 'merchants.id')
                      ->select('merchants.nama as name', 'submerchants.nama as nama', 'submerchants.deskripsi', 'submerchants.gambar', 'submerchants.id')
                      ->paginate(8);

        return view('index', compact('submerchants'));
        // var_dump($submerchants);
    }

    public function show($id)
    {
        $submerchant = Submerchant::where('submerchants.id', $id)
                     ->join('merchants', 'submerchants.idmerchant', '=', 'merchants.id')
                     ->select('merchants.nama as name', 'submerchants.nama as nama', 'submerchants.deskripsi', 'submerchants.gambar', 'submerchants.id')
                     ->firstOrFail();
        $countall = Submerchant::join('antres', 'submerchants.id', '=', 'antres.idantre')
                    ->where('idantre', $id)
                    ->count();
        $countactive = Submerchant::join('antres', 'submerchants.id', '=', 'antres.idantre')
                    ->where('idantre', $id)
                    ->where('status', 1)
                    ->count();

        return view('product-single', compact('submerchant', 'countall', 'countactive'));
    }

    public function store(Request $request)
    {
        $no = Antre::where('idantre', $request->idantre)->count();

        $form_data = array(
            'iduser'    => Auth::id(),
            'idantre'   => $request->idantre,
            'noantre'   => $no+1,
            'status'    => '0',
        );

        $antre = Antre::create($form_data);

        return redirect('/')->with('success', 'Data is successfully saved');
    }
}
