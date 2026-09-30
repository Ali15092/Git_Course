<?php 
function dd($thing){
    echo "<pre>";
    var_dump($thing);
    echo "</pre>";

    die();
}

function urlis($value){
    return $_SERVER['REQUEST_URI'] === $value;
}

function authorize($condition,$status=response::FORBIDDEN){
    if (! $condition)
        abort ($status);

}