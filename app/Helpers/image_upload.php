<?php


use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

if(!function_exists("image_upload")){

    function image_upload($destination_image, $path,$old_file = null){
        if(!$destination_image ){
            return false ;
        }
        if( $old_file && storage::disk('upload')->exists($old_file)) {
            Storage::disk('upload')->delete($old_file);
        }
         $filename = Str::random(5).'.'.$destination_image->getClientOriginalExtension();
         return $destination_image->storeAs($path, $filename, 'destination');

    }
}
