<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;

    protected $fillable = [
        'userID',
        'name',
        'certification',
        'identityProof',
        'picture',
        'yearsOfExperience',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'userID');
        
    }
}
