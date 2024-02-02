<?php

namespace App\Enums;

enum ScoreStatus: string
{
  use EnumToArray;
  case PASSED = 'ناجح';
  case FAILED = 'راسب';
}
