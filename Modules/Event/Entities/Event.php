<?php

namespace Modules\Event\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [];
    protected $guarded = [];
    
    protected static function newFactory()
    {
        return \Modules\Event\Database\factories\EventFactory::new();
    }
}
