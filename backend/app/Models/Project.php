<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $table = 'projects';

    // protected $fillabe = [
    //     'name',
    //     'start_date',
    //     'end_date',
    //     'status',
    //     'creator_id'
    // ];
    protected $guarded = array();
    
    public function creator()
    {
        return $this->belongsTo(User::class, 'creator_id');
    }

}
