<?php
//определение ассоциативного массива транзакций
$transactions = [
    [
        "transaction_id" => 1, // id
        "transaction_date" => "2019-01-01", // дата
        "transaction_amount" => 100.00, // сумма транзакции
        "transaction_description" => "Payment for groceries", // описание
        "merchant_name" => "SuperMart", // название организации
    ],
    [
        "transaction_id" => 2,
        "transaction_date" => "2020-02-15",
        "transaction_amount" => 75.50,
        "transaction_description" => "Dinner with friends",
        "merchant_name" => "Local Restaurant",
    ],
    [
        "transaction_id" => 3,
        "transaction_date" => "2021-02-15",
        "transaction_amount" => 500.00,
        "transaction_description" => "New mobile phone",
        "merchant_name" => "Online electronics store",
    ],
    [
        "transaction_id" => 4,
        "transaction_date" => "2022-02-20",
        "transaction_amount" => 25.00,
        "transaction_description" => "Birthday gift",
        "merchant_name" => "Gift Shop",
    ],
    [
        "transaction_id" => 5,
        "transaction_date" => "2023-02-25",
        "transaction_amount" => 50.00,
        "transaction_description" => "Payment for utilities",
        "merchant_name" => "Utility Company",
    ],
];
?>
<table border="1">
    <tr style="background-color: #a6a6a6; color: #252525">
        <th colspan="5">Оценки студентов</th>
    </tr>
    <tr style="background-color: #a6a6a6; color: #252525">
        <th>ID</th>
        <th>Дата</th>
        <th>Сумма транзакции</th>
        <th>Описание транзакции</th>
        <th>Название организации</th>
    </tr>
    <?php
    foreach ($transactions as $transaction) { ?>
        <tr>
            <!-- Выведите на экран данные о транзакциях -->
            <td><?php echo $transaction['transaction_id']; ?></td>
            <td><?php echo $transaction['transaction_date']; ?></td>
            <td><?php echo $transaction['transaction_amount']; ?></td>
            <td><?php echo $transaction['transaction_description']; ?></td>
            <td><?php echo $transaction['merchant_name']; ?></td>
        </tr>
    <?php }
    function calculateTotalAmount($transactions)
    {
        $totalAmount = 0;
        foreach ($transactions as $transaction) {
            $totalAmount += $transaction['transaction_amount'];
        }
        return $totalAmount;
    }
    function calculateAverage($transactions)
    {
        $average = 0;
        $totalAmount = calculateTotalAmount($transactions);
        $average = $totalAmount / count($transactions);
        return $average;
    }
    function mapTranscationDescription($transactions)
    {
        return array_column($transactions, 'transaction_description');
    }
    ?>
</table>
<?php
echo "<br /> Общая сумма всех
транзакций:" . calculateTotalAmount($transactions);
echo "<br /> Средняя сумма транзакции: " . calculateAverage($transactions);
echo "<br /> Описание транзакций: ";
foreach (mapTranscationDescription($transactions) as $description) {
    echo "<br />" . $description;
}
