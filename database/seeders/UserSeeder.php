<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        User::create([
            'name'=> 'Sameera Dilshan',
            'email'=> 'sameera@email.com',
            'password'=> bcrypt(123456789),
            'avatar'=> 'me.jpg',
        ]);

        User::create([
            'name'=> 'Udayanga Sameera',
            'email'=> 'udayanga@email.com',
            'password'=> bcrypt(123456789),
            'avatar'=> 'me1.jpg',
        ]);

        foreach (range(1,15) as $i) {
            User::factory()->create();
        }
    }
}
