<?php

if(!function_exists('imgUrl')){
    function imgUrl(?string $value){
           if (empty($value)) {
            return "https://placehold.co/230x300@3x?text=NOT+FOUND";
        }

        // Jika sudah berupa URL (misal hasil upload ke CDN)
        if (filter_var($value, FILTER_VALIDATE_URL)) {
            return $value;
        }

        // Cek apakah file ada di storage/public
        if (Storage::disk('public')->exists($value)) {
            return Storage::url($value);
        }

        return "https://placehold.co/230x300@3x?text=NOT+FOUND";
    }
}