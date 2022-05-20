<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected static $role;

    public static function createRole($request)
    {
        Role::create($request->except('_token'));
    }
    public static function UpdateData($request, $id)
    {
        self::$role = Role::find($id);
        self::$role->display_name = $request->display_name;
        self::$role->name = $request->name;
        self::$role->save();

    }
}
