<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',

    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function blog()
    {
        return $this->HasMany(Blog::class);
    }

    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }

    public function hasAnyRole(string $role)
    {
        return $this->roles()->where('role', $role);
    }

    public function hasAnyRoles(array $role)
    {
        return $this->roles()->whereIn('role', $role)->first();
    }

    public function getRole()
    {
        return $this->roles()->get()->first()->role;
    }



    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
