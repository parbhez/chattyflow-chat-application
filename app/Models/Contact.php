<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'number',
        'activity',
        'action',
        'chatting_with',
        'ip',
        'country',
        'states',
        'city',
        'came_from',
        'device',
        'operating_system',
        'browser',
        'last_seen',
        'sent_greetings',
        'accepted_greetings',
        'ignored_greetings',
        'group',
        'last_greetings',
        'customer_id',
        'user_contact_id',
        'user_id',
    ];
}
