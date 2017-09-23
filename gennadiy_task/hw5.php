<?php
echo '<pre>';



// Task#1
// Дана строка. Найти количество слов, начинающихся с буквы b.
echo '<h3>Task#1 </h3>';
$num = 0;
$string = "srf  3 hg bdrtdr    brt W3EW BY 6666   @#$ %^%&kb^% b666^&$^&% hfh srs uy ";
$arr = explode(" ",$string);
for ($i=0; $i<count($arr);$i++){
    if (isset($arr[$i][0]) and ($arr[$i][0]=='b'))
        $num++;
    }
echo $num;

// Task#1(B)
echo '<h3>Task#1(B) </h3>';
$string = "srf  3 hg bdrtdr    brt W3EW BY 6666   @#$ %^%&kb^% b666^&$^&% hfh srs uy ";
echo $i= substr_count($string,' b');



// Task#2
// Дана строка. Подсчитать, сколько в ней букв r, k, t.
// Вывести результат в виде массива.
echo '<h3>Task#2 </h3>';
$string = "srf  3 hg bdrtdr    brt W3EW BY 6666   @#$ %^%&kb^% b666^&$^&% hfh srs uy ";
$arr2 = array('r'=> 0 , 'k'=> 0 , 't'=> 0);
for ($i=0;$i<mb_strlen($string);$i++){
    if ($string[$i] == 'r') $arr2['r']++;
    if ($string[$i] == 'k') $arr2['k']++;
    if ($string[$i] == 't') $arr2['t']++;
   }
print_r($arr2);

// Task#2(B)
echo '<h3>Task#2(B) </h3>';
$string = "srf  3 hg bdrtdr    brt W3EW BY 6666   @#$ %^%&kb^% b666^&$^&% hfh srs uy ";
print_r($arr2 = array(
    'r'=> substr_count($string,'r') ,
    'k'=> substr_count($string,'k') ,
    't'=> substr_count($string,'t')));



// Task#3
// Дана строка. Найти длину самого короткого слова и самого длинного слова.
echo '<h3>Task#3 </h3>';
$string = "srf  3 hg bdr b666^&$777 tdr  g  brt W3EW BY 6666   @#$ %^%&kb^% b666^&$^&% hfh srs uy ";
$arr3 = array_filter(explode(' ', $string));
$max_len = mb_strlen($arr[0]);
$min_len = mb_strlen($arr[0]);
$max_el = $arr[0];
$min_el = $arr[0];
foreach ($arr3 as $value) {
    if ($max_len < mb_strlen($value)) {
        $max_len = mb_strlen($value);
        $max_el = $value;
    }
    if ($min_len > mb_strlen($value)) {
        $min_len = mb_strlen($value);
        $max_el = $value;
    }
}
echo "Максимальное слово: $max_el, его длина $max_len \r\n 
Минимальное слово: $min_el, его длина $min_len";



// Task#4
// Дана строка символов, среди которых есть одно двоеточие :
// Определить, сколько символов ему предшествует.
$string4 = "#$ t687666^&:$^&% hfh sry 6";

echo '<h3>Task#4(A) </h3>';
for ($i=0;$i<mb_strlen($string4);$i++) {
    if ($string4[$i] ==':')  {echo $i; break;}
}

// Task#4(B)
echo '<h3>Task#4(B) </h3>';
echo $i = strpos ($string4, ':');



// Task#5
echo '<h3>Task#5 </h3>';
$string5 = "#abc t68abcabcabc7666^&:$^&abc% hfh sry 6";
echo $i= substr_count($string5,'abc');



// Task#6
// Дана строка. Подсчитать, сколько уникальных символов встречается в ней.
// Вывести их на экран в виде массива.
echo '<h3>Task#6 </h3>';
$string6 = "srf  3 hg bdrtdr    brt W3EW BY 16666   @#$ %^%&kb^% b666^&$^&% hfh srs uy ";
print_r($i = str_split(count_chars($string6,3)));



// Task#7
// Дана строка.
// Найти в ней те слова, которые начинаются и оканчиваются одной и той же буквой.
echo '<h3>Task#7 </h3>';
$string7 = "srf  3 hgh &bdrtdr1    brtb1 W3EW BY 16666   @#$ %^%&kb^% b666^&$^&% hfh srs uy ";
$arr7 = preg_replace('/[^A-Za-z\s]/','', $string7);
$arr7 = array_filter(explode(' ', $arr7));
sort ($arr7);
foreach ($arr7 as $key => $value){
    if ($arr7[$key][0] == $arr7[$key][mb_strlen($value)-1])
        echo $value.PHP_EOL;
}



// Task#8
// Дана строка. В строке заменить все двоеточия : точкой с запятой ;.
// Подсчитать количество замен.
echo '<h3>Task#8 </h3>';
$string8= ":srf  3 h:gh &bdr;t:dr1  :  b:rtb1 W3E:W BY 16666   @#$ %^%&kb^% b666^&$^&% hfh srs uy ";
$string8 = str_split ($string8);
$count = 0;
$string8 =  implode(str_replace(':', ';', $string8, $count));

echo " Выполнено $count замен ";




// Task#9
// Дана строка, содержащая буквы, целые неотрицательные числа и иные символы.
// Требуется все числа, которые встречаются в строке,
// поместить в отдельный целочисленный массив.
// Например, если дана строка bear 48 tail9 read13 bl0b,
// то в массиве должны оказаться числа 48, 9, 13 и 0.
echo '<h3>Task#9 </h3>';
$string9 = "df(f5  -gjg3 654 f5 r^f   10 5 f5 fdd5  dd03wsdtc45rf #Wr%0888$%$ E%$";
$arr9 = explode(' ', preg_replace('/[^0-9\s]/',' ', $string9));
foreach ($arr9 as $key => $value){
    if ($value == '') unset($arr9[$key]);
}
print_r($arr9);



// Task#10
// Дана строка. Определите, каких букв (строчных или прописных) в ней больше,
// и преобразуйте следующим образом: если больше прописных(больших) букв,
// чем строчных(маленьких), то все буквы преобразуются в прописные;
// если больше строчных, то все буквы преобразуются в строчные;
// если поровну и тех и других — текст остается без изменения.
echo '<h3>Task#10 </h3>';
$string10 = "dIIf(f5 YKKFUFGFHGFGFTY -gjhHg3 654 f5 r^f 5 f5DGF fdd5  Hdd3wsYdtc45rf #Wr%888$%$ E%$";
$bigLetters = mb_strlen(preg_replace('/[^A-Z]/','', $string10));
$littleLetters = mb_strlen(preg_replace('/[^a-z]/','', $string10));
if ($bigLetters > $littleLetters){$string10 = strtoupper($string10).PHP_EOL;}
elseif ($bigLetters < $littleLetters){$string10 = strtolower($string10).PHP_EOL;}

echo $string10.PHP_EOL;



// Task#11
// Строка содержит одно слово.
// Проверить, будет ли оно читаться одинаково справа налево и слева направо
// (т.е. является ли оно палиндромом).
echo '<h3>Task#11 </h3>';
$string11 = "srf qwerTyuytrewq 3 hg abrarba h &bdrtdr1    brtb1 W3EW BY 16666   @#$ %^%&kb^% b666^&$^&% hfh srs uy ";
$arr11 = array_filter(explode(' ', preg_replace('/[^A-Za-z\s]/','', $string11)));
sort ($arr11);
foreach ($arr11 as $value){
    if (strtolower($value) == strrev(strtolower($value)))
        echo $value.PHP_EOL;
   }



// Task#12
// Дана строка, в которой слова зашифрованы — каждое из них записано наоборот.
// Расшифровать строку и вывести на экран.
echo '<h3>Task#12 </h3>';
$string12 = 'steL vertts ruo txet';
$arr12 = array_filter(explode(' ', $string12));
foreach ($arr12 as &$value){
    $value = strrev($value);
}
$string12= implode($arr12, ' ');
print_r($string12);



// Task#13
// Дана строка, определить, каких букв в ней больше - гласных или согласных.
echo '<h3>Task#13 </h3>';
$string13 = ":srf  3 h:geeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeh &bdr;t:dr1  :  b:rtb1 W3EW BY 16666   @#$ %^%&kb^% b666^&$^&% hfh srs uy ";
$glassn = strlen(preg_replace('/[^a, i, u, e, o, y]/i','',$string13));
$so_glassn = strlen(preg_replace('/[^q, w, r, t, p, s, d, f, g, h, j, k, l, z, x, c, v, b, n, m]/i','',$string13));
if (($glassn) < $so_glassn) {echo "Согласных больше".PHP_EOL;}
elseif ($glassn > $so_glassn) {echo "Гласных больше".PHP_EOL;}



// Task#14
// Дан массив строк, в котором хранятся фамилии и инициалы учеников класса (формат: Иванов И.И.).
// Требуется вывести массив в котором для каждого ученика указано количества его однофамильцев.
echo '<h3>Task#14 </h3>';
$FIO = array (
    0 => 'Колесникова А.Ю.',
    1 => 'Колесников И.И.',
    2 => 'Соколовский А.Н.',
    3 => 'Клименко Т.Д.',
    4 => 'Ивахненко М.В.',
    5 => 'Ильницкая О.О',
    6 => 'Ильницкий Р.Р',
    7 => 'Сокол В.А.',
    8 => 'Капустянка О.О.',
    9 => 'Булочкин Л.Д.',
    10 => 'Плюшкина П.П.',
    11 => 'Плюшкина Л.П.',
    12 => 'Плюшкина В.П.',
    13 => 'Плюшкина А.П.',

);
$lastNames = $FIO;
print_r($lastNames);
foreach ($lastNames as &$lastName ){
    $lastName = strstr($lastName, ' ', true);
    $lastName = preg_replace('[((?<=ов)а)|((?<=цк)ая)|((?<=цк)ий)|((?<=ск)ий)|((?<=ск)ая)|((?<=ин)а)]','', $lastName);
}

echo "lastNames";
print_r($lastNames);

$new = array_count_values ( $lastNames );
foreach ($new as  &$value){$value -= 1;}
print_r($new);


//ниже считает неправильно
/*$numb = $lastNames;
foreach ($numb as $key => $value){$numb[$key] = 0;};
print_r($numb);

foreach ($lastNames as $key => $value) {
    for ($i = 0; $i < (count($lastNames)); $i++ ) {
        if ( $lastNames[$i] === $lastNames[$key] ) {
            $numb[$i]++;
        }
    }
}
print_r($numb);*/




