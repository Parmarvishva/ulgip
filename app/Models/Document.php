<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Document extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'category', 'sub_category', 'description',
        'file_path', 'file_size', 'file_type', 'issued_by',
        'published_date', 'reference_number', 'is_featured',
        'download_count', 'tags',
    ];

    protected $casts = [
        'tags' => 'array',
        'published_date' => 'date',
        'is_featured' => 'boolean',
    ];

    public function scopeCategory($query, $category)
    {
        return $query->where('category', $category);
    }

    public function scopeSearch($query, $term)
    {
        return $query->where(function ($q) use ($term) {
            $q->where('title', 'like', "%{$term}%")
              ->orWhere('description', 'like', "%{$term}%")
              ->orWhere('reference_number', 'like', "%{$term}%")
              ->orWhere('issued_by', 'like', "%{$term}%");
        });
    }

    public function getCategoryBadgeColorAttribute()
    {
        return match($this->category) {
            'legal'    => 'blue',
            'circular' => 'red',
            'sop'      => 'purple',
            'act'      => 'green',
            'rule'     => 'orange',
            default    => 'slate',
        };
    }
}
