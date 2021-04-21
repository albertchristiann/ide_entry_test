$start_date = date('2020-01-01');
$end_date = date('2020-01-30');

School::whereBetween(‘school', [$start_date, $end_date])->get();
