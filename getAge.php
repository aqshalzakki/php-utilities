function getAge($date, $dateComparedTo = null, $format = 'Y-m-d')
  {
    if ($dateComparedTo) {
      // Given Date Compared To
      $dateComparedTo = date($format, strtotime($dateComparedTo));
    }else {
      // Today
      $dateComparedTo = date($format);
    }

    $bday = new \DateTime($date);
    $today = new \Datetime($dateComparedTo);
    $diff = $today->diff($bday);

    $y = $diff->y != 0 ? "$diff->y Tahun " : '';
    $m = $diff->m != 0 ? "$diff->m Bulan " : '';
    $d = $diff->d != 0 ? "$diff->d Hari " : '';
    
    return "$y$m$d";
  }
