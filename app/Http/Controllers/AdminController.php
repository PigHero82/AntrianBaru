<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Merchant;
use App\SubMerchant;
use App\User;
use App\Role;
use Auth;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $idrole = Role::where('iduser', auth::id())->first();
        // if ($idrole->role == 1) {
            $merchants = Merchant::get();
            $merchantcount = Merchant::count();
            $merchantlast = Merchant::latest()->first();
            $user = User::where('isd', auth::id())->first();
            return view('admin.admin', compact('merchants', 'merchantcount', 'merchantlast', 'user'));
        // }
        // else if ($idrole->role == 2) {
        //     return redirect('/merchant');
        // }
        // else if ($idrole->role == 3) {
        //     return redirect('/submerchant');
        // }
        // else {
        //     return redirect('/');
        // }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.merchantcreate');
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
            'alamat'    => 'required',
            'deskripsi' => 'required',
            'gambar'    => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $image = $request->file('gambar');
        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move('images/merchant', $new_name);

        $form_data = array(
            'nama'       => $request->nama,
            'alamat'     => $request->alamat,
            'deskripsi'  => $request->deskripsi,
            'gambar'     => $new_name,
            'iduser'     => $iduser->id,
        );

        // Tambah Role
        $role = [
            'iduser'   => $iduser->id,
            'role'     => '2',
        ];
        
        $merchant = Merchant::create($form_data);
        $roles = Role::create($role);

        return redirect('/administrator')->with('success', 'Blog is successfully saved');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
