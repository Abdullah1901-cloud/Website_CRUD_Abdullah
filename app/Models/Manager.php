<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class manager extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nama_user',
        'username',
        'password',
        'level',
    ];
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
    ];
    protected function casts(): array
{
    return [
        'password' => 'hashed',
    ];
}
}
