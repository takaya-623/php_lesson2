<? 

// $i = 1;
// $x = "php";
// echo "第{$i}回{$x}入門講座";

// var_dump(6);
// var_dump('6');
// var_dump(1 == 1);
// var_dump(1 == 3);

// $score = 70;
// if($score >= 80) {
//   echo '合格';

// } else {
//   echo '不合格';
// }

// $arr = ['key1' => 'php', 'key2' => 'ruby', 'key3' => 'python'];
// // echo $arr['key1'];
// foreach ($arr as $lang) {
//   echo $lang;
// }

// function study($lang) {
//   echo "{$lang}入門";
//   echo "{$lang}講座";
// }
// study('php');
// study('ruby');

// function calcTax($i) {
//   if(is_int($i) === false) {
//     throw new Exception('数値を指定して下さい');
//   }
//   return $i * 1.1;
// }
// echo calcTax("あ");
// echo calcTax(1);

// $name = 'Apple';
// $score = 32.246;

// $info = "[$name][$score]";
// echo $info . PHP_EOL;

// $info = sprintf("[%15s][%10.2f]", $name, $score);
// echo $info . PHP_EOL;

// $info = sprintf("[%-15s][%010.2f]", $name, $score);
// echo $info . PHP_EOL;

// printf("[%-15s][%010.2f]" . PHP_EOL, $name, $score);

// $input = ' こんにちは  ';
// $input = trim($input);
// echo mb_strlen($input);
// echo mb_strpos($input, 'に');
// $input = str_replace('にち', 'ばん', $input);
// echo $input;

// $input = '20200320Item-A  1200';

// $date = substr($input, 0, 8);
// $product = substr($input, 8, 8);
// $amount = substr($input, 16);

// echo $date . PHP_EOL;
// echo $product . PHP_EOL;
// // echo $amount . PHP_EOL;
// echo number_format($amount);

// $input = 'Call us at 03-3001-1256 or 03-3015-3222';
// $pattern = '/\d{2}-\d{4}-\d{4}/';
// preg_match($pattern, $input, $matches);
// preg_match_all($pattern, $input, $matches);
// print_r($matches);

// $input = preg_replace($pattern, '**-****-****', $input);
// echo $input;

// $d = [2020, 11, 15];
// echo "$d[0]-$d[1]-$d[2]" . PHP_EOL;
// echo implode('-', $d);

// $t = '17:32:45';
// print_r(explode(':', $t));

// $n = 5.6283;
// echo ceil($n) . PHP_EOL;
// echo floor($n) . PHP_EOL;
// echo round($n) . PHP_EOL;
// echo round($n, 2) . PHP_EOL;

// echo mt_rand(1, 6);

// $scores = [30, 40, 50];

// array_unshift($scores, 10, 20);
// array_push($scores, 60, 70);
// $scores[] = 80;
// array_shift($scores);
// array_pop($scores);

// print_r($scores);

// $scores = [30, 40, 50, 60, 70, 80];
// $partial = array_slice($scores, -2);

// print_r($scores);
// print_r($partial);

// array_splice($scores, 2, 0, [100, 101]);

// print_r($scores);

// $scores = [40, 50, 20, 30];

// sort($scores);
// print_r($scores);

// shuffle($scores);
// print_r($scores);

// $picked = array_rand($scores, 2);
// echo $scores[$picked[0]];
// print_r($picked);

// $scores = array_fill(0, 5, 10);
// $scores = range(1, 10, 2);

// print_r($scores);

// $a = [3, 4, 8];
// $b = [4, 8, 12];

// $merged = array_merge($a, $b);
// // $merged = [...$a, ...$b];
// // print_r($merged);

// $uniques = array_unique($merged);
// print_r($uniques);

// $diff1 = array_diff($a, $b);
// print_r($diff1);

// $diff2 = array_diff($b, $a);
// print_r($diff2);

// $common = array_intersect($a, $b);
// print_r($common);

// $prices = [100, 200, 300];

// $nwePrices = array_map(
//   function ($n) { return $n * 1.1;}, $prices
// );

// print_r($nwePrices);

$scores = ['a' => 1, 'b' => 2, 'c' => 3];
// $keys = array_keys($scores);
// print_r($keys);
// $values = array_values($scores);
// print_r($values);

if (array_key_exists('a', $scores) == true) {
  echo 'キー(a)はあるよーー';
}

if (in_array(1, $scores) == true) {
  echo '値(80)はあるよーー';
}

?>