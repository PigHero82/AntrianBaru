<?php

namespace App\Http\Controllers;

use App\Submerchant;
use App\Antre;
use Illuminate\Http\Request;

class SubmerchantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $submerchants = Submerchant::orderBy('id', 'DESC')->get();

        return view('admin.index', compact('submerchants'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.submerchantcreate');        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama'      => 'required',
            'deskripsi' => 'required',
            'gambar'    => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $image = $request->file('gambar');
        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move('images/submerchant', $new_name);

        $form_data = array(
            'idmerchant' => '1',
            'nama'       => $request->nama,
            'deskripsi'  => $request->deskripsi,
            'gambar'     => $new_name,
        );

        $submerchant = Submerchant::create($form_data);
   
        return redirect('/administrator')->with('success', 'Blog is successfully saved');
        // echo $form_data;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Submerchant  $submerchant
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $submerchants = Submerchant::where('idantre', $id)
                     ->join('antres', 'submerchants.id', '=', 'antres.idantre')
                     ->select('antres.iduser', 'antres.noantre', 'antres.status')
                     ->get();

        return view('admin.antrian', compact('submerchants'));
        // echo $submerchants;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Submerchant  $submerchant
     * @return \Illuminate\Http\Response
     */
    public function edit(Submerchant $submerchant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Submerchant  $submerchant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Submerchant $submerchant)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Submerchant  $submerchant
     * @return \Illuminate\Http\Response
     */
    public function destroy(Submerchant $submerchant)
    {
        //
    }
}
