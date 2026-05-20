<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\PostStatusEnum;
class Status extends Model
{
    protected $table = 'statuses';

    protected $primaryKey = 'id';
    protected $fillable = [
        'status',
        'changed_by',
    ];
    protected $casts = [
        'status' => PostStatusEnum::class,
    ];
    public function statusable()
    {
        return $this->morphTo();
    }

    public function changedBy()
    {
        return $this->belongsTo(User::class, 'changed_by');
    }
}
