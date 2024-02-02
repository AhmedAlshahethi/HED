<?php

namespace App\Enums;

enum Gender: string
{
  use EnumToArray;
  case MALE = 'ذكر';
  case FEMALE = 'أنثى';
}
