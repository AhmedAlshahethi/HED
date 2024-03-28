<?php

namespace App\Enums;

enum Semester: string
{
  use EnumToArray;
  case First_Smester = 'الترم الأول';
  case Second_Semster = 'الترم الثاني';
}
