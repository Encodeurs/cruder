<?php

namespace Encodeurs\Cruder\Utils\DB;


class DBBigIntegerField
{
    private static $template = '$table->bigInteger("½FIELD_NAME½")%NULLABLE%;';

    public static function create($fieldName)
    {
        return str_replace("½FIELD_NAME½", $fieldName, self::$template);
    }
}
