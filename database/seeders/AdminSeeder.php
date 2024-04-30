<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    public function run()
    {
        Admin::create([
            'name' => 'Tayyab',
            'email' => 'tayyab@example.com',
            'phone' => '03127294145',
            'password' => '12345678',
        ]);
    }
}
