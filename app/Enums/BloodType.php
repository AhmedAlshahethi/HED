<?php

namespace App\Enums;

enum BloodType: string
{
  use EnumToArray;
  case A = 'master';
  case PHD = 'phd';
}
