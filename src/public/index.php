<?php 
$spendings = ["apple" => 100, "orange" => 150];
$incomes = ["okozukai" => 10000, "partTimeSalary" => 35000];
echo findTotalIncomes($incomes);

function findTotalIncomes($incomes)
{
    $totalIncomes = 0;
    foreach ($incomes as $income) {
        $totalIncomes += $income;
    }
    return $totalIncomes;
}
