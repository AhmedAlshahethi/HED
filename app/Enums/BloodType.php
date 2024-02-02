<?php

namespace App\Enums;

enum BloodType: string
{
  use EnumToArray;
  case A_PLUS = 'a+';
  case A_MINUS = 'a-';
  case B_PLUS = 'b+';
  case B_MINUS = 'b-';
  case O_PLUS = 'o+';
  case O_MINUS = 'o-';
  case AB_PLUS = 'ab+';
  case AB_MINUS = 'ab-';
}
