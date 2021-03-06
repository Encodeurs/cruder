<?php

namespace Encodeurs\Cruder\Utils\Factory;


class FactoryDateTimeField
{
    private static $template = '"½FIELD_NAME½" => "2020-12-01 00:00:00",';

    public static function create($fieldName)
    {
        return str_replace("½FIELD_NAME½", $fieldName, self::$template);
    }
}
