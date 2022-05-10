<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Admin extends Authenticatable
{
    use HasFactory, Notifiable, HasApiTokens;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'admin';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'id_admin';

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_merchant',
        'id_level',
        'id_satker',
        'username',
        'email',
        'nama_lengkap',
        'nohp',
        'pass',
        'avatar',
        'banned',
        'last_login',
        'last_activity',
        'date_created',
        'forgot_exp',
        'remember_time',
        'remember_exp',
        'verification_code',
        'top_secret',
        'ip_address',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'forgot_exp',
        'pass',
        'remember_time',
        'remember_exp',
        'verification_code',
        'top_secret',
        'ip_address',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id_admin' => 'integer',
        'id_merchant' => 'integer',
        'id_level' => 'integer',
        'id_satker' => 'integer',
        'username' => 'string',
        'email' => 'string',
        'nama_lengkap' => 'string',
        'nohp' => 'string',
        'avatar' => 'string',
        'banned' => 'boolean',
        'date_created' => 'datetime',
    ];
}
