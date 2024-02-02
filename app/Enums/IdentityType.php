<?php

namespace App\Enums;

enum IdentityType: string
{
  use EnumToArray;
  case PASSPORT = 'passport';
  case PERSONAL_ID = 'personal_id';
}
