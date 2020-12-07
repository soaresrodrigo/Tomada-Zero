<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Employee;
use App\Models\Movie;

class Actor extends Model
{
    use HasFactory;
    protected $fillable = [ 'employee_id', 'character', 'protagonist', 'movie_id' ];

    public function rules () {
        return [
            'character' => 'sometimes|required',
            'protagonist' => 'sometimes'
        ];
    }

    public function employee () {
        return $this->belongsTo(Employee::class, 'employee_id', 'id');
    }

    public function movie () {
        return $this->belongsToMany(Movie::class, 'movie_id', 'id');
    }
}
