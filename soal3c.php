<!DOCTYPE html>
<html>
<head>
    <title>Algoritma Dasar</title>
</head>
<body>
    <?php
    function count_and_sort_letters($input) {
        $letters = array();
        // menghitung jumlah setiap huruf
        for ($i = 0; $i < strlen($input); $i++) {
            $letter = strtolower($input[$i]);
            if (array_key_exists($letter, $letters)) {
                $letters[$letter]++;
            } else {
                $letters[$letter] = 1;
            }
        }
        // mengurutkan huruf berdasarkan abjad
        ksort($letters);
        return $letters;
    }
    $input = "Masyallah";
    print_r(count_and_sort_letters($input));
?>
</body>
</html>