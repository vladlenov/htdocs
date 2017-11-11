<?php

namespace app\components;

class LanguagesEnum
{
    const RUSSIAN = 'rus';
    const ENGLISH = 'en';

    /**
     * @return array
     */
    public static function getAllLanguages()
    {
        return [self::ENGLISH => 'English', self::RUSSIAN => 'Русский'];
    }
}