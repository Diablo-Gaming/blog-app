<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\UserRole;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Role extends Model
{
    protected $table = 'roles';

    protected $primaryKey = 'id';

    protected $fillable = [
        'name'
    ];

    protected $casts = [
        'name' => UserRole::class,
        ];

    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    public function permissions(): BelongsToMany
    {
        return $this->belongsToMany(Permission::class);
    }
}
