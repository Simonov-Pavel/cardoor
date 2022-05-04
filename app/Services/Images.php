<?php

namespace App\Services;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic as Image;
use Carbon\Carbon;

class Images
{
    public static function updateImages($request, $model, $folder, $width=null, $height=null, $width_prewiew=null, $height_prewiew=null){
        
            $image = $request->file('image');
            $ext_image = $image->getClientOriginalExtension();
            $img = Image::make($image);
            $img_webp = Image::make($image)->encode('webp', 90);
            $name = md5(Carbon::now());
            $imageName = $name.'.'.$ext_image;
            $nameWebp = $name . '.webp';
            Images::deleteImages($model,$folder);
        
            $imagePath = storage_path('app/public/'.$folder.'/'. $imageName);
            $img -> resize($width, function($constraint){
            $constraint->aspectRatio();
            })->save($imagePath);
        
            $imagePathWebp = storage_path('app/public/'.$folder.'/'.$nameWebp);
            $img_webp -> resize($width, function($constraint){
            $constraint->aspectRatio();
            })->save($imagePathWebp);
        
            if(isset($width_prewiew) || isset($height_prewiew)){
                $name_preview = 'prev_'.$name;
                $name_preview_webp = 'prev_'.$nameWebp;
    
                $PrevImagePath = storage_path('app/public/'.$filder .'/'.$name_preview);
                $image -> resize($width_prewiew, $height_prewiew, function($constraint){
                    $constraint->aspectRatio();
                })->save($PrevImagePath);
                
    
                $PrevImagePathWebp = storage_path('app/public/'.$filder .'/'.$name_preview_webp);
                $webp_image -> resize($width_prewiew, $height_prewiew, function($constraint){
                    $constraint->aspectRatio();
                })->save($PrevImagePathWebp);
    
                $request['img_preview'] = $name_preview;
                $request['img_preview_webp'] = $name_preview_webp;
            }
            $request['img'] = $imageName;
            $request['img_webp'] = $nameWebp;
        return $request;
    }

    public static function deleteImages($model,$folder){
        if( $model->img != 'default.jpg'){
            Storage::delete('public/'.$folder.'/'.$model->img);
            Storage::delete('public/'.$folder.'/'.$model->img_webp);
            if($model->img_preview){
                Storage::delete('public/'.$folder.'/'.$model->img_preview);
                Storage::delete('public/'.$folder.'/'.$model->img_preview_webp);
            }
        }
    }
}