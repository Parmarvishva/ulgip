<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CyberAlert extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'description', 'severity', 'category',
        'source', 'reference_id', 'is_active', 'alert_date',
    ];

    protected $casts = [
        'alert_date' => 'date',
        'is_active'  => 'boolean',
    ];

    public function getSeverityColorAttribute()
    {
        return match($this->severity) {
            'critical' => 'red',
            'high'     => 'orange',
            'medium'   => 'yellow',
            'low'      => 'green',
            default    => 'slate',
        };
    }

    public function getSeverityBgAttribute()
    {
        return match($this->severity) {
            'critical' => 'bg-red-100 text-red-700 border-red-200',
            'high'     => 'bg-orange-100 text-orange-700 border-orange-200',
            'medium'   => 'bg-yellow-100 text-yellow-700 border-yellow-200',
            'low'      => 'bg-green-100 text-green-700 border-green-200',
            default    => 'bg-slate-100 text-slate-700 border-slate-200',
        };
    }

    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    public function scopeSeverity($query, $severity)
    {
        return $query->where('severity', $severity);
    }
}
