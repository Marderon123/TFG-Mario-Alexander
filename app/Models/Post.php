<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'body',
    ];

    protected static function boot()
    {
        parent::boot();
        self::creating(function($table){
            if(!app()->runningInConsole()){
                $table->user_id = auth()->id();
            }
        });
    }

    //relation Post and User
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
