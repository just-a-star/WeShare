<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    use HasFactory, HasUuids;
    protected $primaryKey = 'id';
    protected $keyType = 'string';
    protected $fillable = [
        'title',
        'content',
        'is_public',
        'is_published',
        'send_date',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
