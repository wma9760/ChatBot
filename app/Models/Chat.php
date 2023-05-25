<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Chat extends Model
{
    use HasFactory;
    protected $table = 'chat';

    protected $fillable = [
        'user_id',
        'context',
    ];
    protected $guarded=[];
    protected $casts=[
        'context'=>'array'
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    protected $dates = ['created_at', 'updated_at'];

    // ...

    public function getCreatedAtAttribute($value)
    {
        $carbonDate = Carbon::parse($value);
        $diff = $carbonDate->diffForHumans();

        

        return $diff;
    }

}
