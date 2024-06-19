<?php

namespace Database\Seeders;
use App\Models\Message;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ChatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(){

        Message::create([
        'sender_id'     =>1,
        'receiver_id'   =>2,
        'message'       =>'hello',
        ]);

        Message::create([
        'sender_id'     =>2,
        'receiver_id'   =>1,
        'message'       =>'hello , How are you?',
        ]);

        Message::create([
        'sender_id'     =>1,
        'receiver_id'   =>2,
        'message'       =>'Im fine',
        ]);
}
}
