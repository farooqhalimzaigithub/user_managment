<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    public function attachUsers($users)
    {
        return $this->users()->attach($users);
    }

    public function detachUsers($users)
    {
        return $this->users()->detach($users);
    }

    public function syncUsers($users)
    {
        return $this->users()->sync($users);
    }
}
