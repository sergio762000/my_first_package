<?php

declare(strict_types=1);

namespace SergeyGolovanov\MyFirstPackage;

class StringConverter
{
    public function toUpperFirstLetter(string $source_string): string
    {
        return mb_convert_case($source_string, MB_CASE_TITLE);
    }
}
