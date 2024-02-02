<?php

namespace App\Enums;

enum AcademicLevel: string
{
  use EnumToArray;
  case MASTER = 'master';
  case PHD = 'phd';
}
