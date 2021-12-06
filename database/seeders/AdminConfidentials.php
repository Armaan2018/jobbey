<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin;

class AdminConfidentials extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          Admin::truncate(); 
           $admins = [ 
            [ 
              'name' => 'Super Admin',
              'email' => 'admin@gmail.com',
              'password' => '123456',
            ]
          ];

          foreach($admins as $admin)
          {
              Admin::create([
               'name' => $admin['name'],
               'email' => $admin['email'],
               'password' => Hash::make($admin['password'])
             ]);
           }
    }
}
