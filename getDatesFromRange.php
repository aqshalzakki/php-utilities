// Function to get all the dates in given range
  function getDatesFromRange($start, $end = null, $format = 'd-m-Y'): array
  {
    $end ??= date($format);

    // Variable that store the date interval 
    // of period 1 day 
    $interval = new \DateInterval('P1D');

    $end = new \DateTime($end);
    $end->add($interval);

    $period = new \DatePeriod(new \DateTime($start), $interval, $end);

    $dates = [];
    foreach ($period as $date) {
      $dates[] = $date->format($format);
    }

    return $dates;
  }
