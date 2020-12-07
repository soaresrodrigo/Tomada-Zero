<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Employee;
use App\Models\Classification;
use App\Models\Actor;

class Movie extends Model
{
    use HasFactory;
    protected $fillable = [ 'name', 'description', 'classification_id', 'release', 'director_id' ];

    public function rules () {
        return [
            'name' => 'sometimes|required',
            'description' => 'sometimes|required',
            'classification_id' => 'sometimes|required',
            'release' => 'sometimes|date|required',
            'director_id' => 'sometimes|required'
        ];
    }

    public function director () {
        return $this->belongsTo(Employee::class, 'director_id', 'id');
    }

    public function classification () {
        return $this->belongsTo(Classification::class, 'classification_id', 'id');
    }

    public function actors () {
        return $this->hasMany(Actor::class, 'movie_id', 'id');
    }
}
