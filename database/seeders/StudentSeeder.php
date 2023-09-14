<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Student::create(["name" => "Ali","phone" => "01001234567","email" => "ali@gmail.com","address" => "El-Maadi","city_id" => 1 ]);
        // Student::create(["name" => "Hany","phone" => "01001234567","email" => "ali@gmail.com","address" => "El-Maadi","city_id" => 1 ]);
        // Student::create(["name" => "Shady","phone" => "01001234567","email" => "ali@gmail.com","address" => "El-Maadi","city_id" => 1 ]);
        // Student::create(["name" => "Wael","phone" => "01001234567","email" => "ali@gmail.com","address" => "El-Maadi","city_id" => 1 ]);
        // Student::create(["name" => "Yasser","phone" => "01001234567","email" => "ali@gmail.com","address" => "El-Maadi","city_id" => 1 ]);
        // Student::create(["name" => "Mazen","phone" => "01001234567","email" => "ali@gmail.com","address" => "El-Maadi","city_id" => 1 ]);
        // Student::create(["name" => "Nader","phone" => "01001234567","email" => "ali@gmail.com","address" => "El-Maadi","city_id" => 1 ]);
        // Student::create(["name" => "Waleed","phone" => "01001234567","email" => "ali@gmail.com","address" => "El-Maadi","city_id" => 1 ]);

        Student::factory(50000)->create();
    }
}
