<?php

/**
 * ##############
 * ### STRING ###
 * ##############
 */

/**
 * Summary of str_slug
 * @param string $string
 * @return string
 */

function str_slug(string $string): string
{
    // $string = filter_var(mb_strtolower($string), FILTER_SANITIZE_STRIPPED);
    $string = preg_replace('/[\x00-\x1F\x7F]/u', '', $string);
    $formats = 'ÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜüÝÞßàáâãäåæçèéêëìíîïðñòóôõöøùúûýýþÿRr"!@#$%&*()_-+={[}]/?;:.,\\\'<>°ºª';
    $replace = 'aaaaaaaceeeeiiiidnoooooouuuuuybsaaaaaaaceeeeiiiidnoooooouuuyybyRr                                 ';

    $slug = str_replace(
        ["-----", "----", "---", "--"],
        "-",
        str_replace(
            " ",
            "-",
            trim(strtr(mb_convert_encoding($string, 'ISO-8859-1', 'UTF-8'), mb_convert_encoding($formats, 'ISO-8859-1', 'UTF-8'), $replace))
        )
    );
    return $slug;
}

function str_studly_case(string $string): string
{
    $string = str_slug($string);
    $studlyCase = str_replace(" ", "", mb_convert_case(str_replace("-", " ", $string), MB_CASE_TITLE));
    return $studlyCase;
}

function str_camel_case(string $string): string
{
    return lcfirst(str_studly_case($string));
}