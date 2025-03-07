<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Image\Manipulations;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Setup extends Model implements HasMedia
{
    use HasFactory;
    protected $guarded=[];
    use InteractsWithMedia;
//    public function registerMediaConversions(Media $media = null): void
//    {
//        $this
//            ->addMediaConversion('preview')
//            ->fit(Manipulations::FIT_CROP, 300, 300)
//            ->nonQueued();
//    }
    public function registerMediaConversions(Media $media = null) : void
    {
        $this->addMediaCollection('default')->onlyKeepLatest(1);;
        $this->addMediaConversion('thumb')->performOnCollections('main_image', 'about_image')
            ->nonQueued();
    }

}
