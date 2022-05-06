
<?php include 'function.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
</head>
<body>
    <form method="post" action="play_game.php">
        <h1>Play Game</h1>
        <table class="tic-tac-toe" cellpadding="0" ceilspacing="0">
            <tbody>
                <?php
                $lastrow = 0;
                for ($i = 1; $i <= 9; $i++) {
                    $row = ceil($i / 3); //The ceil() function rounds a number UP to the nearest integer, if necessary.
                    if ($row !== $lastrow) {
                        $lastrow = $row;
                        if ($i > 1) {
                            echo "</tr>";
                        }
                        echo "<tr class='row-{$row}'>";
                    }
                    $additionalClass = '';
                    if ($i == 2 || $i == 8) {
                        $additionalClass = 'vertical-border';
                    } elseif ($i == 4 || $i == 6) {
                        $additionalClass = 'horizontal-border';
                    } elseif ($i == 5) {
                        $additionalClass = 'center-border';
                    }
                
                ?>
                <td class="cell-<?= $i ?><?= $additionalClass ?>">
                    <?php if (getCell($i) === 'X') : ?>
                        X
                    <?php elseif (getCell($i) === 'O') : ?>
                        O
                    <?php else : ?>
                        <input type="radio" name="cell"  value="<?= $i ?>" onclick="enableButton()" />
                    <?php endif; ?>
                </td>     
                <?php } ?>  
                    </tr>        
            </tbody>
        </table>
        <button type="submit" disabled id="playbtn">Play</button>
    </form>
    </body>
</html>