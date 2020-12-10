<?php

use Illuminate\Database\Seeder;
use App\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = [
            [
                'level' => 'Manager',
                'description' => 'Admin For App'
            ],
            [
                'level' => 'Customer',
                'description' => 'Customer Account'
            ],
        ];

        foreach($role as $r){
            Role::create($r);
        }
    }
}
