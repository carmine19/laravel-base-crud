<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $all_users = User::all();

        $data = [
            'users' => $all_users,
        ];

        return view('users.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        // qui prendiamo i dati passati da create
        $data = $request->all();

        //li salviamo in un nuovo oggetto
        $new_user = new User();

        //ora useremo un altro metodo per salvare i dati, consiste nel salvare la variabile data con un fill
        //qui e poi andare nel model per passare li i vari paramentri
        $new_user->fill($data);

        //come per gli altri model salviamo i dati
        $new_user->save();

        //e ci ricordiamo di fare il redirect
        return redirect()->route('users.index');


    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        $users = User::find($id);

        $data = [
            'users' => $users,
        ];

        return view('users.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        $all_users = User::find($id);
        $data = [
            'users' => $all_users,
        ];

        return view('users.edit', $data);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $all_users = User::find($id);
        $data = $request->all();
        $all_users->update($data);

        return redirect()->route('users.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        $users = User::find($id);
        $users->delete();

        return redirect()->route('users.index');
    }
}
