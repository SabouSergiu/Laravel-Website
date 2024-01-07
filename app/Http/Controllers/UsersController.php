<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;

class UsersController extends Controller
{
    /** 
    *afisati toti users
    *
    * @return \Illuminate\Http\Response
    */
    public function index()
    {
        $users = User::latest()->paginate(10);
        return view('users.index',compact('users'));
    }
    /**
    * Afisare form pt creare user
    *
     * @return \Illuminate\Http\Response
    */
    public function create()
    {
        return view('users.create');
    }
    /**
     * Memorare un user creat acum
     *
     * @param User $user
     * @param StoreUserRequest $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(User $user, StoreUserRequest $request)
    {
        //Numai în scopuri demonstrative. La crearea unui utilizator sau la invitarea unui utilizator
        // ar trebui să creați o parolă aleatorie generată și să o trimiteți prin e-mail utilizatorului
        $user->create(array_merge($request->validated(),['password'=>'test']));
        return redirect()->route('users.index')->withSuccess(__('User created successfully.'));
    }
    /**
     * Afisare date user
     *
     * @param User $user
     *
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('users.show', [
            'user' => $user
            ]);
    }
    /**
     * Creare date user
     *
     * @param User $user
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('users.edit', [
            'user' => $user
            ]);           
    }
     /**
     * Update date user
     *
     * @param User $user
     * @param UpdateUserRequest $request
     *
     * @return \Illuminate\Http\Response
     */
    public function update(User $user,UpdateUserRequest $request)
    {
        $user->update($request->validated());
        return redirect()->route('users.index')->withSuccess(__('User updated successfully.'));
    }
    /**
     * Stergere date user
     *
     * @param User $user
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('users.index')->withSuccess(__('User deleted successfully.'));
    }
}
