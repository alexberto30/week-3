<?php 
	function hitung($string_data){
    // Kode kalian di sini
    $operator = ['*', '+', ':', '%', '-'];
    for ($i = 0; $i <= count($operator); $i++) {
        if (strchr($string_data, $operator[$i])) {
            $cal = explode($operator[$i], $string_data);
            if ($operator[$i] == '*') {
                return $cal[0] * $cal[1] . "<br>";
            }
            if ($operator[$i] == ':') {
                return $cal[0] / $cal[1] . "<br>";
            }
            if ($operator[$i] == '+') {
                return $cal[0] + $cal[1] . "<br>";
            }
            if ($operator[$i] == '-') {
                return $cal[0] - $cal[1] . "<br>";
            }
            if ($operator[$i] == '%') {
                return $cal[0] % $cal[1] . "<br>";
            }
	        }
	    }
	}

echo hitung("100*2");
echo hitung("2+3");
echo hitung("100:25");
echo hitung("10%2");
echo hitung("99-2");
?>