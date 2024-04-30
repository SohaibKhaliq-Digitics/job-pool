<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\company;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $companiesData = [
            [
                'name' => 'Example Company 2',
                'email' => 'info1@example.com',
                'logo' => 'company_logo1.png',
                'website' => 'https://www.example1.com',
            ],
            [
                'name' => 'Example Company 3',
                'email' => 'info2@example.com',
                'logo' => 'company_logo2.png',
                'website' => 'https://www.example2.com',
            ],
            [
                'name' => 'Example Company 4',
                'email' => 'info2@example.com',
                'logo' => 'company_logo2.png',
                'website' => 'https://www.example2.com',
            ],
            [
                'name' => 'Example Company 5',
                'email' => 'info2@example.com',
                'logo' => 'company_logo2.png',
                'website' => 'https://www.example2.com',
            ],
            [
                'name' => 'Example Company 6',
                'email' => 'info2@example.com',
                'logo' => 'company_logo2.png',
                'website' => 'https://www.example2.com',
            ],
            [
                'name' => 'Example Company 7',
                'email' => 'info2@example.com',
                'logo' => 'company_logo2.png',
                'website' => 'https://www.example2.com',
            ],
            [
                'name' => 'Example Company 8',
                'email' => 'info2@example.com',
                'logo' => 'company_logo2.png',
                'website' => 'https://www.example2.com',
            ],
            // Add more arrays for additional records as needed
        ];
    
        foreach ($companiesData as $data) {
            Company::create($data);
        }
    }
}
