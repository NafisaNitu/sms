<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    protected $role;

    public function create()
    {
        return view('admin.role.create');
    }

    public function newRole(Request $request)
    {
        Role::createRole($request);
        return redirect()->back()->with('message', 'Role created successfully');
    }
    public function manageRole()
    {
        return view('admin.role.manage', [
            'roles' => Role::all(),
        ]);
    }

    public function deleteRole($id)
    {
        $this->role = Role::find($id);
        $this->role->delete();
        return redirect()->back()->with('message', 'Role Deleted Successfully');
    }
    public function editRole($id)
    {
        return view('admin.role.edit', [
            'role' => Role::find($id),
        ]);
    }

    public function updateRole(Request $request, $id)
    {
        Role::UpdateData($request, $id);
        return redirect('manage-role')->with('message', 'Role Updated Successfully');
    }

}
