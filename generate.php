<?php
// класс генерации HTML страницы
class signGenerate {
    
    
    public function genHTML($a1, $b2, $c3, $d4, $e5,$f6)
    {
        
        return '<!DOCTYPE html>
<html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Подписи Red and Green</title>
        </head>
        <body>'.
             '<div style="color:'.$f6.';">
            —-<br>
            С уважением,<br>
            '. $a1 .'<br>
            Тел:<br>
            <a href="tel":' . $b2 . '">'.$b2.'</a><br>
            <a href="tel":' . $c3 . '">'.$c3.'</a><br>
            E-Mail:<br>
            <a href="mailto":' . $d4 . '">'.$d4.'</a><br>
            <a href="mailto":' . $e5 . '">'.$e5.'</a><br>
            </div> <br>'.'
            </body>
</html>'
            ;
    }
}

