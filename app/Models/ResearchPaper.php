<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResearchPaper extends Model
{
    use HasFactory;

    protected $fillable = [
        'section_approvement_date',
        'section_approvement_number',
        'college_approvement_date',
        'college_approvement_number',
        'score',
        'file_path',
        'notes',
        'seminar_id',
    ];

    public function seminar()
    {
        return $this->belongsTo(Seminar::class, 'seminar_id');
    }
}
