<?php

namespace Database\Seeders;

use App\Models\Client;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;


class ClientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $clients = [
            [
                'first_name' => 'Adebayo',
                'last_name' => 'Oladayo',
                'email' => 'adebayooladayo@gmail.com',
                'date_profiled' => Carbon::now(),
                'primary_legal_counsel' => 'Barrister Ayomikun',
                'date_of_birth' => Carbon::now(),
                'profile_image' => 'Empty',
                'case_details' => 'aiding and abetting of crime'
            ],
            [
                'first_name' => 'Joshua',
                'last_name' => 'Folawiyo',
                'email' => 'Jboy@gmail.com',
                'date_profiled' => Carbon::now(),
                'primary_legal_counsel' => 'Barrister Ola',
                'date_of_birth' => Carbon::now(),
                'profile_image' => 'Empty',
                'case_details' => 'fraud'
            ]
        ];

        foreach ($clients as $key => $value){
            Client::create($value);
        }
    }
}
