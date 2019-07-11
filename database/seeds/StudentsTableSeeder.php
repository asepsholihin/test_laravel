<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \DB::table('students')->insert(
            [
                [
                    'name' => 'Asep Sholihin',
                    'email' => 'asep.sholihin11@gmail.com',
                    'gender' => 'L',
                    'level' => 'VII',
                    'class' => 'Cendrawasih A',
                    'created_at' => date('Y-m-d H:i:s')
                ],
                [
                    'name' => 'Risma Nuraeni',
                    'email' => 'risma.nuraeni36@gmail.com',
                    'gender' => 'P',
                    'level' => 'VII',
                    'class' => 'Cendrawasih B',
                    'created_at' => date('Y-m-d H:i:s')
                ],
                [
                    'name' => 'Fazrin Defillaleti',
                    'email' => 'fazrin.defillaleti@gmail.com',
                    'gender' => 'P',
                    'level' => 'VII',
                    'class' => 'Cendrawasih A',
                    'created_at' => date('Y-m-d H:i:s')
                ],
                [
                    'name' => 'Afdal Budiman',
                    'email' => 'afdalbudiman@gmail.com',
                    'gender' => 'L',
                    'level' => 'VII',
                    'class' => 'Cendrawasih B',
                    'created_at' => date('Y-m-d H:i:s')
                ],
                [
                    'name' => 'Iqbal Juliansyah',
                    'email' => 'iqbaljuliansyah@gmail.com',
                    'gender' => 'L',
                    'level' => 'VII',
                    'class' => 'Cendrawasih B',
                    'created_at' => date('Y-m-d H:i:s')
                ],
                [
                    'name' => 'Dwiki Nurislami',
                    'email' => 'dwikinur@gmail.com',
                    'gender' => 'L',
                    'level' => 'VII',
                    'class' => 'Cendrawasih A',
                    'created_at' => date('Y-m-d H:i:s')
                ]
            ]
        );
    }
}
