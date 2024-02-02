<?php

namespace App\Enums;

enum HighSchoolType: string
{
  use EnumToArray;
  case SCIENCE = 'علمي';
  case LITRITURE = 'أدبي';
}
