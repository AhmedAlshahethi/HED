<?php

namespace App\Enums;

enum EventType: string
{
  use EnumToArray;
  case EDIT = 'تعديل';
  case CREATE = 'أنشاء';
  case DELETE = 'حذف';
}
