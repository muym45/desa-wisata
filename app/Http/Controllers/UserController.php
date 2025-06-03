<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
public function index()
{
$users = User::all();
return view('users.index', compact('users'));
}

public function create()
{
return view('users.create');
}

public function store(Request $request)
{
$request->validate([
'email' => 'required|email|unique:users',
'password' => 'required|min:6',
'level' => 'required|in:admin,bendahara,pelanggan,pemilik',
]);

User::create([
'email' => $request->email,
'password' => Hash::make($request->password),
'level' => $request->level,
'aktif' => $request->has('aktif')
]);

return redirect()->route('users.index')->with('success', 'User berhasil ditambahkan.');
}

public function edit(User $user)
{
return view('users.edit', compact('user'));
}

public function update(Request $request, User $user)
{
$request->validate([
'email' => 'required|email|unique:users,email,' . $user->id,
'level' => 'required|in:admin,bendahara,pelanggan,pemilik',
]);

$user->update([
'email' => $request->email,
'level' => $request->level,
'aktif' => $request->has('aktif')
]);

return redirect()->route('users.index')->with('success', 'User berhasil diupdate.');
}

public function destroy(User $user)
{
$user->delete();
return redirect()->route('users.index')->with('success', 'User berhasil dihapus.');
}
}
