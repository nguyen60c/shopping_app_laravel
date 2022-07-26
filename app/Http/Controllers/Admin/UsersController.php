<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\PermissionsTrait;
use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    use PermissionsTrait;

    public function index()
    {
        $this->deny('user_access');

        $user = User::with(['roles'])->get();

        return view('admin.users.index', compact('users'));
    }
}
