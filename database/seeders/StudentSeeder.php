<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('students')->insert([
            'nim'=>'2031710081',
            'name'=>'Rafika Nurhayati',
            'class'=>'MI-2F',
            'department'=>'JTI',
            'phone_number'=>'081998440034',
        ]);
        DB::table('students')->insert([
            'nim'=>'2031710042',
            'name'=>'Sarindah Karina BR Sitepu',
            'class'=>'MI-2F',
            'department'=>'JTI',
            'phone_number'=>'082267550842',
        ]);
        DB::table('students')->insert([
            'nim'=>'2031710160',
            'name'=>'Achmad Nova Ardiansyah',
            'class'=>'MI-2F',
            'department'=>'JTI',
            'phone_number'=>'081997122673',
        ]);
    }
}
