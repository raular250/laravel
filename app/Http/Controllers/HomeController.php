<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Auth;

class HomeController extends Controller
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
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // $role = Role::create(['name' => 'writer']);
        // $permission = Permission::create(['name' => 'edit articles']);

        // $role->givePermissionTo($permission);

        // $user=Auth::User();
        // $roles = $user->getRoleNames(); // Returns a collection
        // dump($roles);
        // $permissionNames = $user->getPermissionNames(); // collection of name strings
        // dump( $permissionNames);
        // $permissions = $user->getPermissionsViaRoles();
        // dump($permissions);

        // $user->assignRole('writer');
        // $roles = $user->getRoleNames(); // Returns a collection
        // dump($roles);
        // $permissionNames = $user->getPermissionNames(); // collection of name strings
        // dump( $permissionNames);
        // $permissions = $user->getPermissionsViaRoles();
        // dump($permissions);

        // $user=Auth::User();
        // $user->removeRole('writer');
        // $role=Role::findByName('writer');
        // $role->revokePermissionTo('edit articles');
        // $permission=Permission::findByName('edit articles');
        // $permission->delete();
        // $role->delete();

        // dd('stop');
        return view('home');
    }
}
