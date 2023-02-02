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
            $csvFile = 'doc.csv';

            $csv = array_map('str_getcsv', file($csvFile));

            array_shift($csv);

            $json = json_encode($csv);

            $jsonFile = fopen('file.json', 'w');
            fwrite($jsonFile, $json);
            fclose($jsonFile);

            echo 'fatto!';
    ?>


    </body>
</html>