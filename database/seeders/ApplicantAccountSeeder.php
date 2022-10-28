<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ApplicantAccount;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ApplicantAccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ApplicantAccount::create([
            // 'first_name' => 'Bruce',
            // 'last_name'=> 'Banner',
            // 'email' => 'banner@gmail.com',
            // 'password' => Hash::make('12345678'),
        ]);
    }
}
