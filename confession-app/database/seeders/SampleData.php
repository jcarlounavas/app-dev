<?php

namespace Database\Seeders;

use App\Models\ConfessModel;
use App\Models\UserConfession;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SampleData extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        /*ConfessModel::create([
            'name' => 'John Doe',
            'confess' => 'I have a secret crush on my best friend.',
        ]);
       */

       UserConfession::create([
            'name' => 'Admin',
            'username' => 'admin',
            'password' => bcrypt('admin123'),
        ]);

    }
}
