<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Submerchant;
use App\Antre;

class FrontController extends Controller
{
    public function index()
    {
        $submerchants = Submerchant::latest()->paginate(10);
        

        return view('index', compact('submerchants'));
    }

    public function show($id)
    {
        $submerchant = Submerchant::where('id', $id)->firstOrFail();
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
            'iduser'    => '1',
            'idantre'   => $request->idantre,
            'noantre'   => $no+1,
            'status'    => '0',
        );

        $antre = Antre::create($form_data);

        return redirect('/')->with('success', 'Data is successfully saved');
    }
}
