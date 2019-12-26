<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use \Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role                       = new Role;
        $role->name                 = "admin";
        $role->slug                 = Str::slug("admin","-");
        $role->description          = "buat bikin admin";
        $role->save();
    }
}
