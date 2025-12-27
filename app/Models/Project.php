<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'subtitle',
        'project_type',
        'status',
        'description',
        'primary_image',
        'live_link',
        'github_link',
        'video_link',
        'technologies',
        'order',
        'is_published'
    ];

    protected $casts = [
        'is_published' => 'boolean',
        'order' => 'integer'
    ];

    public function images()
    {
        return $this->hasMany(ProjectImage::class)->orderBy('order');
    }

    public function getTechnologiesArrayAttribute()
    {
        return $this->technologies ? explode(',', $this->technologies) : [];
    }

    public function scopePublished($query)
    {
        return $query->where('is_published', true);
    }

    public function scopeByType($query, $type)
    {
        return $query->where('project_type', $type);
    }

    public function scopeByStatus($query, $status)
    {
        return $query->where('status', $status);
    }

    public function scopeOrdered($query)
    {
        return $query->orderBy('order', 'asc')->orderBy('created_at', 'desc');
    }
}
