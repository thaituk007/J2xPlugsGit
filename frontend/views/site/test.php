
$connection = Yii::$app->getDb();
$command = $connection->createCommand("
    SELECT SUM(bets.balance_return) AS total_win
     , bets.user_id
     , users.user_name
     , users.user_status
    FROM bets INNER JOIN users ON bets.user_id = users.id
    WHERE users.user_status = 'verified'
    AND bets.date_time > :start_date
    GROUP BY bets.user_id
    ORDER BY total_win DESC", [':start_date' => '1970-01-01']);

$result = $command->queryAll();
