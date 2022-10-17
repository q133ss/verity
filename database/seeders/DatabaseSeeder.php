<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Volunteer;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $admin = new User();
        $admin->name = 'admin';
        $admin->email = 'admin@email.net';
        $admin->password = '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi';
        $admin->is_admin = true;
        $admin->save();

        $socials = [
            'whatsapp' => 'google.com',
            'telegram' => 'google.com',
            'email' => 'email@email.com'
        ];

        $volunteers = [
            [
                'photo' => '',
                'name' => 'Иван',
                'lastname' => 'Иванов',
                'patronymic' => 'Иванович',
                'city' => 'Московская обл. г.Москва',
                'socials' => json_encode($socials)
            ],
            [
                'photo' => '',
                'name' => 'Алексей',
                'lastname' => 'Алексеев',
                'patronymic' => 'Алексеевич',
                'city' => 'Воронежская обл. г.Воронеж',
                'socials' => json_encode($socials)
            ]
        ];

        foreach ($volunteers as $volunteer){
            Volunteer::create($volunteer);
        }
    }
}
