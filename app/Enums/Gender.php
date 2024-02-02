<?php

namespace App\Enums;

enum Gender: string
{
  use EnumToArray;
  case MALE = 'male';
  case FEMALE = 'female';
}
