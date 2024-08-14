<?php

namespace Centrobill\Sdk\Utils;

use stdClass;

final class Utils
{
    /**
     * @param  stdClass $data
     * @return array
     */
    public static function convertObjectToArray(stdClass $data): array
    {
        $array = [];

        foreach ($data as $key => $value) {
            if (is_object($value)) {
                $array[$key] = self::convertObjectToArray($value);
            } else {
                $array[$key] = $value;
            }
        }

        return $array;
    }
}
