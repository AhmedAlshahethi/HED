<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PublishedResearchPaper extends Model
{
    use HasFactory;

    protected $fillable = ['journal_name', 'link', 'notes', 'research_paper_id'];
}
