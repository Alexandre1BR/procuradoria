<?php

namespace App\Data\Models;

use App\Data\Repositories\TiposUsuarios;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Venturecraft\Revisionable\RevisionableTrait;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Authenticatable
{
    use Notifiable;
    use RevisionableTrait;
    //use SoftDeletes;

    protected $with = ['userType'];
    //protected $dates = ['deleted_at'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'username', 'user_type_id', 'disabled_by_id', 'disabled_at'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function userType()
    {
        return $this->belongsTo(TipoUsuario::class, 'user_type_id');
    }

    public function scopeType($query, $type)
    {
        return $query->where(
            'user_type_id',
            app(TiposUsuarios::class)->findByName($type)->id
        );
    }
}
