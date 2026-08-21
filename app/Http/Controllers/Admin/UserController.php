<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | DAFTAR USER
    |--------------------------------------------------------------------------
    */

    public function index()
    {
        $users = User::latest()->paginate(10);

        return view('admin.users.index', compact('users'));
    }


    /*
    |--------------------------------------------------------------------------
    | FORM TAMBAH USER
    |--------------------------------------------------------------------------
    */

    public function create()
    {
        return view('admin.users.create');
    }


    /*
    |--------------------------------------------------------------------------
    | SIMPAN USER BARU
    |--------------------------------------------------------------------------
    */

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => [
                'required',
                'string',
                'max:255',
            ],

            'email' => [
                'required',
                'email',
                'max:255',
                'unique:users,email',
            ],

            'password' => [
                'required',
                'string',
                'min:8',
                'confirmed',
            ],

            'role' => [
                'required',
                'in:user,admin',
            ],
        ]);


        User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => $validated['password'],
            'role' => $validated['role'],
        ]);


        return redirect()
            ->route('admin.users.index')
            ->with('success', 'User berhasil ditambahkan.');
    }


    /*
    |--------------------------------------------------------------------------
    | FORM EDIT USER
    |--------------------------------------------------------------------------
    */

    public function edit(User $user)
    {
        return view('admin.users.edit', compact('user'));
    }


    /*
    |--------------------------------------------------------------------------
    | UPDATE USER
    |--------------------------------------------------------------------------
    */

    public function update(Request $request, User $user)
    {
        $validated = $request->validate([
            'name' => [
                'required',
                'string',
                'max:255',
            ],

            'email' => [
                'required',
                'email',
                'max:255',
                'unique:users,email,' . $user->id,
            ],

            'role' => [
                'required',
                'in:user,admin',
            ],
        ]);


        $user->update([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'role' => $validated['role'],
        ]);


        return redirect()
            ->route('admin.users.index')
            ->with('success', 'Data user berhasil diperbarui.');
    }


    /*
    |--------------------------------------------------------------------------
    | HAPUS USER
    |--------------------------------------------------------------------------
    */

    public function destroy(User $user)
    {
        if ($user->id === auth()->id()) {

            return redirect()
                ->route('admin.users.index')
                ->with('error', 'Akun admin yang sedang digunakan tidak dapat dihapus.');
        }


        $user->delete();


        return redirect()
            ->route('admin.users.index')
            ->with('success', 'User berhasil dihapus.');
    }
}