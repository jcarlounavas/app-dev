<?php

namespace Database\Seeders;

use App\Models\ConfessModel;
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
        ConfessModel::create([
            'name' => 'John Doe',
            'confess' => 'I have a secret crush on my best friend.',
        ]);
        ConfessModel::create([
            'name' => 'Jane Smith',
            'confess' => 'I once stole a candy bar from the store.',
        ]);
        ConfessModel::create([
            'name' => 'Alice Johnson',
            'confess' => 'I regret not pursuing my passion for art.',
        ]);
        ConfessModel::create([
            'name' => 'Bob Brown',
            'confess' => 'I lied about my age to get into a concert.',
        ]);
        ConfessModel::create([
            'name' => 'Charlie White',
            'confess' => 'I once ghosted someone I really liked.',
        ]);
        ConfessModel::create([
            'name' => 'Diana Green',
            'confess' => 'I have a fear of public speaking.',
        ]);
        ConfessModel::create([
            'name' => 'Ethan Blue',
            'confess' => 'I wish I had traveled more when I was younger.',
        ]);
        ConfessModel::create([
            'name' => 'Fiona Black',
            'confess' => 'I once cheated on a test in school.',
        ]);
        ConfessModel::create([
            'name' => 'George Gray',
            'confess' => 'I have a habit of procrastinating important tasks.',
        ]);
        ConfessModel::create([
            'name' => 'Hannah Yellow',
            'confess' => 'I secretly enjoy watching reality TV shows.',
        ]);
        ConfessModel::create([
            'name' => 'Ian Purple',
            'confess' => 'I once had a crush on my teacher.',
        ]);
        ConfessModel::create([
            'name' => 'Julia Orange',
            'confess' => 'I regret not telling my parents I loved them more often.',
        ]);
        
    }
}
