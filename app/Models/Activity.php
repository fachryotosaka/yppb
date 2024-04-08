<?php

namespace App\Models;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;

use App\Models\Tag;
use App\Models\Category;
use App\Models\PaymentM;
use App\Models\Publisher;
use Spatie\MediaLibrary\HasMedia;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Activity extends Model implements HasMedia
{
    use HasFactory, SoftDeletes, Sluggable, InteractsWithMedia;

    protected $guarded = ['id', 'created_at', 'updated_at'];

    protected $append = ['gallery'];

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name',
                'onUpdate' => true,
            ]
        ];
    }

    public function Category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    public function getGalleryAttribute()
    {
        return $this->getMedia('images');
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'activity_tag');
    }

    public function Publisher()
    {
        return $this->belongsTo(Publisher::class);
    }
    public function payment()
    {
        return $this->belongsTo(PaymentM::class, 'payment_m_s_id', 'id');
    }
}
