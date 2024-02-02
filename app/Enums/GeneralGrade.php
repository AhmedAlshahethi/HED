<?php

namespace App\Enums;

enum GeneralGrade: string
{
  case EXCELLENT = 'ممتاز';
  case VERY_GOOD = 'جيد جدا';
  case GOOD = 'جيد';
  case ACCEPTABLE = 'مقبول';
  case WEAK = 'ضعيف';
  case ABSENT = 'غائب';
  case ABSENT_WITH_EXCUSE = 'غائب بعذر مقبول';
  case DEPRIVED = 'محروم';
}
