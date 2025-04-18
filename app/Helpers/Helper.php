<?php


function uploadImage($file, $folder): string
{
    if ($file  && $file != null) {

        $path = 'assets/uploads/' . $folder . '/';
        $extension = $file->getClientOriginalExtension();
        $image_name = time() . rand(0, 99) . '.' . $extension;
        $file->move($path, $image_name);
        return $image_name;
    } else {
        $image_name = 'no-image.png';
    }
    return $image_name;
}
