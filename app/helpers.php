<?php

// if(!function_exists('upload_file')){
//     function upload_file($file = null, $destination_path = null, $old_image = null)
//     {
//         if(isset($old_image) && !empty($old_image)){
//             if(file_exists($destination_path.'/'.$old_image)){
//                 unlink($destination_path.'/'.$old_image);
//             }
//         }
//         if(isset($file) && !empty($file)){
//             if(!Illuminate\Support\Facades\File::isDirectory($destination_path)){
//                 Illuminate\Support\Facades\File::makeDirectory($destination_path, 0777, true, true);
//             }
//             $file_name = date('d_m_Y').'_'.time().'.'.$file->getClientOriginalExtension();
//             $file->move($destination_path,$file_name);
//             return $file_name;
//         }
//     }
// }

if (! function_exists('upload_file')) {

    function upload_file($file = null, $destination_path = null, $old_image = null)
    {
        if (isset($old_image) && ! empty($old_image)) {
            if (file_exists($destination_path.'/'.$old_image)) {
                unlink($destination_path.'/'.$old_image);
            }
        }

        if ($file instanceof \Illuminate\Http\UploadedFile && $file->isValid()) {
            if (! \Illuminate\Support\Facades\File::isDirectory($destination_path)) {
                \Illuminate\Support\Facades\File::makeDirectory($destination_path, 0777, true, true);
            }

            // $file_name = date('d_m_Y').'_'.time().'.'.$file->getClientOriginalExtension();
            $originalName = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
            $file_name = date('d_m_Y_h_i_sa').'_'.$originalName.'_'.time().'_'.bin2hex(random_bytes(4)).'.'.$file->getClientOriginalExtension();
            $file->move($destination_path, $file_name);

            return $file_name;
        }

        // return null; // or handle invalid file case
    }
}
