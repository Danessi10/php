<?php

function is_palindrome($str): bool
{
    $signs = array( ' ', ',', '?', '.', '\'', '"', '`' );
    $str = str_replace( $signs, "", mb_strtolower($str) ) ;
    $str_length = mb_strlen( $str, "UTF-8" );

    for ($i = 0, $j = -1; $i != intdiv( $str_length, 2 ); $i++, $j--) {
        if ( strcmp($str[$i], $str[$j]) )
            return false;
    }

    return true;
}