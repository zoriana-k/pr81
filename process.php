<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <title>Суперглобальні змінні PHP - Результати</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Суперглобальні змінні PHP - Результати</h1>
    <table>
        <thead>
            <tr>
                <th>Позначення змінної</th>
                <th>Характеристика</th>
                <th>Отримане значення</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $superglobals = [
                '$GLOBALS' => [
                    'characteristic' => 'Містить посилання на всі змінні, доступні у глобальній області видимості.',
                    'value' => print_r($GLOBALS, true)
                ],
                '$_SERVER' => [
                    'characteristic' => 'Містить інформацію про сервер і середовище виконання.',
                    'value' => isset($_SERVER['SERVER_PROTOCOL']) ? $_SERVER['SERVER_PROTOCOL'] : ''
                ],
                '$_GET' => [
                    'characteristic' => 'Містить змінні HTTP GET.',
                    'value' => print_r($_GET, true)
                ],
                '$_POST' => [
                    'characteristic' => 'Містить змінні HTTP POST.',
                    'value' => print_r($_POST, true)
                ],
                '$_FILES' => [
                    'characteristic' => 'Містить змінні завантажених файлів.',
                    'value' => print_r($_FILES, true)
                ],
                '$_COOKIE' => [
                    'characteristic' => 'Містить змінні HTTP Cookies.',
                    'value' => print_r($_COOKIE, true)
                ],
                '$_SESSION' => [
                    'characteristic' => 'Містить змінні сесій користувача.',
                    'value' => isset($_SESSION) ? print_r($_SESSION, true) : 'Сесія не запущена'
                ],
                '$_REQUEST' => [
                    'characteristic' => 'Містить змінні HTTP GET, POST і Cookie.',
                    'value' => print_r($_REQUEST, true)
                ],
                '$_ENV' => [
                    'characteristic' => 'Містить змінні середовища.',
                    'value' => print_r($_ENV, true)
                ],
            ];

            foreach ($superglobals as $variable => $info) {
                echo "<tr>";
                echo "<td>{$variable}</td>";
                echo "<td>{$info['characteristic']}</td>";
                echo "<td><pre>{$info['value']}</pre></td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>
