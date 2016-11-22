<?php

/**
 * Created by PhpStorm.
 * User: Josh Harington
 * Date: 11/22/2016
 * Time: 9:00 AM
 *
 * Description: A class with a few methods to help you with some operations.
 */
class Helper {

    /**
     * Create a slug from a string
     *
     * eg: This Web Page -> this-web-page
     *
     * @param $string
     * @return string
     */
    static function string_to_slug($string) {
        $string = str_replace(' ', '-', $string); // Replaces all spaces with hyphens.
        $string = preg_replace('/[^A-Za-z0-9\-]/', '', $string); // Removes special chars.
        return strtolower(preg_replace('/-+/', '-', $string)); // Replaces multiple hyphens with single one.
    }

}