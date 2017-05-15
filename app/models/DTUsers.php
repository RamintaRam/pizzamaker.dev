<?php

namespace App\models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

/**
 * Class DTUsers
 * @package App\models
 */
class DTUsers extends Authenticatable
{
    use Notifiable;

    /**
     * @var table name
     */
    protected $table = 'dt_users';

    /**
     * @var tables fillables
     */
    protected $fillable = ['name', 'email', 'password'];
    /**
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];
}
