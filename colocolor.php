function getDiffColor($date_create){
	$date_cur = strtotime(date('d.m.Y'));
    $datediff = abs(floor(($date_create - $date_cur) / (60 * 60 * 24)));
    $daySec = 60 * 60 * 24;
    $sec = time() - $date_create;
    if ($datediff >= 5) {
        $color = '#d8d8d8';
    } elseif ($datediff == 4) {
        $color = '#ffa6ff';
    } elseif ($datediff == 3) {
        $color = '#faa3a3';
    } elseif ($datediff == 2) {
        $color = '#fed4b5';
    } elseif ($datediff == 1) {
        $color = '#ffee95';
    }else {
        $color = '#c6ffa0';
    }

	return $color;
}
