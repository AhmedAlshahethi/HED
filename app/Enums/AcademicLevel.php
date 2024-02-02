<?php

namespace App\Enums;

enum AcademicLevel: string
{
  use EnumToArray;
  case MASTER = 'ماجستير';
  case PHD = 'دكتوراه';
}
