<?php

namespace App\Http\Controllers;

use App\Merchant;
use App\SubMerchant;
use App\User;
use App\Role;
use Auth;
use Illuminate\Http\Request;

class MerchantController extends Controller
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
            $submerchants = Submerchant::where('idmerchant', auth::id())->orderBy('id', 'DESC')->get();

            return view('admin.index', compact('submerchants'));
        }
        else if ($idrole->role == 3) {
            return redirect('/submerchant');
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
         // Tambah User
         $pengguna = array(
            'name' => $request->username,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        );

        $user = User::create($pengguna);

        $iduser = User::latest()->first();

        // Tambah Merchant
        $request->validate([
            'nama'      => 'required',
            'deskripsi' => 'required',
            'gambar'    => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $image = $request->file('gambar');
         $new_name = rand() . '.' . $image->getClientOriginalExtension();
         $image->move('images/submerchant', $new_name);
       

        $form_data = [
            'idmerchant' => Auth::id(),
            'nama'       => $request->nama,
            'deskripsi'  => $request->deskripsi,
            'gambar'     => $new_name,
            'user'       => $iduser->id,
        ];

        
        // // Tambah Role
        $role = [
            'iduser'   => $iduser->id,
            'role'     => '3',
        ];

        
        $merchant = Submerchant::create($form_data);
        $roles = Role::create($role);
        
        return redirect('/adminmerchant')->with('success', 'Blog is successfully saved');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Merchant  $merchant
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $submerchants = Submerchant::where('idantre', $id)
                     ->join('antres', 'submerchants.id', '=', 'antres.idantre')
                     ->join('users', 'antres.iduser', '=', 'users.id')
                     ->select('antres.iduser', 'antres.noantre', 'antres.status', 'users.name')
                     ->get();

        return view('admin.antrian', compact('submerchants'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Merchant  $merchant
     * @return \Illuminate\Http\Response
     */
    public function edit(Merchant $merchant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Merchant  $merchant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Merchant $merchant)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Merchant  $merchant
     * @return \Illuminate\Http\Response
     */
    public function destroy(Merchant $merchant)
    {
        //
    }
}
