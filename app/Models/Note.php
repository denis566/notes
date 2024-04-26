<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    use HasFactory;

    protected $table = 'notes';
    protected $fillable = [
        'title' => 'required|string',
        'content' => 'required|string',
        'category_id' => 'required|integer|exists:categories,id',
        'tag_ids' => 'nullable|array',
        'tag_ids.*' => 'nullable|integer|exists:tags,id',
    ];
    protected $quarded = false;

    public function tags()
    {
        return $this->belongsToMany( Tag::class, 'note_tags', 'note_id', 'tag_id');
    }
}
