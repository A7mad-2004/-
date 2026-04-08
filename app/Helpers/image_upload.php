<?php


use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

if(!function_exists("image_upload")){

    function image_upload($destination_image, $path,$old_file = null){
        if(!$destination_image ){
            return false ;
        }
        if( $old_file && Storage::disk('destination')->exists($old_file)) {
            Storage::disk('destination')->delete($old_file);
        }
         $filename = Str::random(5).'.'.$destination_image->getClientOriginalExtension();
        return $destination_image->storeAs($path, $filename, 'destination');

    }
}
if(!function_exists("image_upload_trip")){

    function image_upload_trip($trip_image, $path,$old_file = null){
        if(!$trip_image ){
            return false ;
        }
        if( $old_file && Storage::disk('trip')->exists($old_file)) {
            Storage::disk('trip')->delete($old_file);
        }
         $filename = Str::random(5).'.'.$trip_image->getClientOriginalExtension();
        return $trip_image->storeAs($path, $filename, 'trip');

    }
}
