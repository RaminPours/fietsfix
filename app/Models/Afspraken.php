<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Afspraken extends Model
{
    protected $table = 'afspraken';
    protected $fillable = [
        'naam',
        'user_id',
        'email',
        'telefoonnummer',
        'fietstype',
        'fietsmerk',
        'probleem',
        'datum',
        'tijd',
    ];
}
