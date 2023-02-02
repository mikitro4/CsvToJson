<!DOCTYPE html>
<html lang="it">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>CSV to Json</title>
    </head>
    <body>
        <?php
            $csvFile = file('file.csv');
            $data = array();
            foreach ($csvFile as $line)
                $data[] = str_getcsv($line);

            $jsonFile = fopen('file.json', 'w');
            fwrite($jsonFile, json_encode($data));
            fclose($jsonFile);

            echo 'Fatto!';
        ?>
    </body>
</html>