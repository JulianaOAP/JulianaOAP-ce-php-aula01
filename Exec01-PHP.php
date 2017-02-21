<!doctype html>
<html>
    <head>
        <meta charset='utf-8'>
        <title>
           <h1> Exercício 01 - PHP </h1>
        </title>
    </head>
    <body>
        <?php
        $a = 10;
        $b = 20;
        ?>
        <table border='1' align='center'>
            <caption>PHP - Atividade 01</caption>
                <tr>
                    <th>Operação</th>
                    <th>Resultado</th>
                </tr>
                <tr>
                    <td>A + B</td>
                    <td><?php echo $a + $b; ?></td>
                </tr>
                <tr>
                    <td>A - B</td>
                    <td><?php echo $a - $b; ?></td>
                </tr>
                <tr>
                    <td>A * B</td>
                    <td><?php echo $a * $b; ?></td>
                </tr>
                <tr>
                    <td>A / B</td>
                    <td><?php echo $a / $b; ?></td>
                </tr>
                <tr>
                    <td>B<sup>A</sup></td> 
                    <td><?php echo number_format(pow($b, $a), 3, '.', '.'); ?></td>
                </tr>
            </table>
      
    </body>
</html>
