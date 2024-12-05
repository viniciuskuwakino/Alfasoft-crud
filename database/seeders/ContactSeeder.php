<?php

namespace Database\Seeders;

use App\Models\Contact;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        $contacts = [
            [
                'name' => 'Vinicius',
                'contact' => '996325684',
                'email' => 'vinicius@gmail.com'
            ],
            [
                'name' => 'Pedro',
                'contact' => '996325600',
                'email' => 'pedro@gmail.com'
            ],
            [
                'name' => 'Alex',
                'contact' => '996325622',
                'email' => 'alex@gmail.com'
            ]
        ];


        foreach ($contacts as $contact) {
            
            Contact::create($contact);

        }


    }
}
