<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Submerchant;
use App\Antre;
use App\User;
use App\Role;
use Auth;

class SubmerchantController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $idrole = Role::where('iduser', auth::id())->first();
        if ($idrole->role == 1) {
            return redirect('/administrator');
        }
        else if ($idrole->role == 2) {
            return redirect('/adminmerchant');
        }
        else if ($idrole->role == 3) {
            $submerchants = Submerchant::where('user', Auth::id())
                     ->join('antres', 'submerchants.id', '=', 'antres.idantre')
                     ->join('users', 'antres.iduser', '=', 'users.id')
                     ->select('antres.iduser', 'antres.noantre', 'antres.status', 'users.name')
                     ->get();

            return view('admin.antrian', compact('submerchants'));
            // var_dump(Auth::id());
        }
        else {
            return redirect('/');
        }
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
