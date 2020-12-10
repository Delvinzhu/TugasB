<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'role_id' => 1,
                'name' => 'Manager 1',
                'email' => 'manager@app.com',
                'password' => bcrypt('secretsecret'),
                'gender' => 'Male',
                'address' => '4523  Grant View Drive, New Berlin, Wisconsin',
                'birth' => '1999-11-10',
            ],
            [
                'role_id' => 2,
                'name' => 'Customer 1',
                'email' => 'customer@app.com',
                'password' => bcrypt('secretsecret'),
                'gender' => 'Female',
                'address' => '4417  Pearcy Avenue, Orland, Indiana',
                'birth' => '1999-11-10',
            ],
        ];

        foreach($user as $u){
            User::create($u);
        }
    }
}
