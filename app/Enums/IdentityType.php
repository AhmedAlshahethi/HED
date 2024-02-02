<?php

namespace App\Enums;

enum IdentityType: string
{
  use EnumToArray;
  case PASSPORT = 'جواز سفر';
  case PERSONAL_ID = 'بطاقة الشخصية';
}
