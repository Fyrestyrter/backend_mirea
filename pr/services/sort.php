<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Сортировка выбором</title>
</head>
<body>
<?php

class SelectionSortExample {

public function selectionSort(&$arr) {

// Get the length of an array
$length = sizeof($arr);

// Loop all the element in an array except the last element
for($i = 0; $i < $length - 1; $i++) {
$minIndex = $i;

// Find an index of a lowest element in the right-hand side
// corresponding to the element arr[i].
for($j = $i + 1; $j < $length; $j++) {
if($arr[$minIndex] > $arr[$j]) {
$minIndex = $j;
}
}

// Swap the lowest element with the current element (i.e. arr[i] <=> arr[minIndex])
$temp = $arr[$minIndex];
$arr[$minIndex] = $arr[$i];
$arr[$i] = $temp;
}
}

public function printArray(&$arr) {

// Loop the item and print each item in the console with white space seperated
for($i = 0; $i < sizeof($arr); $i++) {
echo($arr[$i] . " ");
}

echo("\n");
}
}

$obj = new SelectionSortExample();

$arr = explode(",", $_GET['array']);

if (count($arr) == 0) {
    // Выводим сообщение о том, что массив пуст
    print('Массив пуст');
}

echo("До сортировки: ");
$obj->printArray($arr);

$obj->selectionSort($arr, 0, sizeof($arr) - 1);
echo("После сортировки: ");
$obj->printArray($arr);
?>
</body>
</html>