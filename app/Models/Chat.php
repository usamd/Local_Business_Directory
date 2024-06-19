<?php

namespace App\Models;
namespace Database\Seeders;

use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    protected $fillable = [
        'sender_id',
        'receiver_id',
        'message',
        'is_read',
        'is_edited',
        'is_deleted',
        'deleted_from_sender',
        'deleted_from_receiver',
    ];
}
