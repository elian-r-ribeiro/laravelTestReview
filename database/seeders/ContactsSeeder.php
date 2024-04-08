<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactsSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('contacts') -> insert ([
            'name' => 'Elian Rodrigues Ribeiro',
            'email' => 'elianrodriguesribeiro@gmail.com',
            'phoneNumber' => '(41) 9 9998-4544',
            'birthDate' => '2004-05-29'
        ]);
    }
}
