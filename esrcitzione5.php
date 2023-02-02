<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <?php
        $filename = 'doc.csv';
        $docs =  [
            ['Mario', 'Rossi', 18],
            ['Franco', 'Verdi', 15],
            ['Matteo', 'Bianchi', 30],
            ['Daje', 'Roma', 5],
        ];
        $fp = fopen($filename, 'w');

        if (!$fp) die("error...");

        foreach($docs as $vettDoc){
            fputcsv($fp, $vettDoc, ';');
        }
        fclose($fp);
        ?>
    </body>
</html>
