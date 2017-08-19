<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Laracast\Flash\FlashServiceProvider;

class UsersController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $users = User::orderBy('id','ASC')->paginate(5);
        return view('admin.users.index')->with('users',$users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'password'=>'required',
            'email' => 'required|unique:users',
            'type' => 'required',
        ]);
        $user=new User($request->all());
        $user->password = bcrypt($request->password);
     //  dd($user);
       $user->save();
      // flash("Se ha registrado ".$user->name." de forma exitosa")->success();
       return redirect()->route('admin.users.index')->with('success','Se ha registrado '.$user->name.' de forma exitosa');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        return view('admin.users.edit')->with('user',$user);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //dd($request->all());
            $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'type' => 'required',
        ]);


        User::find($id)->update($request->all());

      //  flash('Item updated successfully')->success();
        return redirect()->route('admin.users.index')
        ->with('success','El usuario ' . $request->name . ' se ha actualizado de forma exitosa');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
       // dd($id);
        $user = User::find($id);
        $user->delete();

      //  flash('El usuario '.$user->name.' a sido borrado de forma exitosa')->error();
        return redirect()->route('admin.users.index')->with('success','El usuario a sido borrado de forma exitosa');
    }
}
