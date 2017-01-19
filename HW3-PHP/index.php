<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset="utf-8"">
        <title>Домашка 3</title>
        <link rel="stylesheet" type="text/css" href="main.css"/>
    </head>
    <body>
        <?php
        
        $name = "Иннокентий";
        $age  = "24";
        
        echo "3. Меня зовут: ".$name.".</br></br>\n";
        
        echo "4. Мне ".$age." лет.</br></br>\n";
        
        if ( $age > 18  and $age < 59) 
            { 
                echo "5-8. Вам еще работать и работать.</br></br>\n"; 
            }   elseif ($age > 59) 
                { 
                    echo "5-8. Вам пора на пенсию.</br></br>\n";  
                
                } elseif ($age < 18 and $age>0) 
                    { 
                        echo "5-8. Вам еще рано работать.</br></br>\n";  
                    
                    }  else {
                        echo "5-8. Неизвестный возраст.</br></br>\n";
                            }
                    
        $day  = "1";
        
        switch ($day) {
            /*case 0:
                echo "Неизвестный день.</br>\n";
                break;*/
            case 1:
            case 2:
            case 3:
            case 4:
            case 5:  echo "9-12. Это рабочий день.</br></br>\n"; break;
            case 6:
            case 7:  echo "9-12. Это выходной день.</br></br>\n"; break;
            default: echo "9-12. Неизвестный день.</br></br>\n"; break;
        }
        
                
        $s  = "750";
        $t  = "7";
        echo "13. Если автомобиль проехал $s км за $t часов, тогда cкорость его равна :".round($s/$t, 2)." км/ч или ".round(($s*1000)/($t*3600), 2)." м/c.</br></br>\n";
        
        $foo = "bar";
        $foo = 10;
        echo "14. Переменная foo равна $foo </br></br>\n";
        
        $a = 5;
        $b = 7;
        $operator = "/";
        
            if ($operator == "+")
                {  echo "15.$a + $b ="; echo $a+$b. "</br></br>\n";}
            elseif ($operator == "-")
                {  echo "15. $a - $b ="; echo $a-$b. "</br></br>\n";}
            elseif ($operator == "*")
                {  echo "15. $a * $b ="; echo $a*$b. "</br></br>\n";}
            elseif ($operator == "/" and $b==0)
                {  echo "15. Ошибка. Делить на ноль нельзя!</br></br>\n";}
            elseif ($operator == "/")
                {  echo "15. $a / $b ="; echo round($a/$b,2)."</br></br>\n";}
            else {  echo "Неизвестная ошибка! Проверьте правильность вводимых даных !</br></br>\n";}
        
        $aa = 56;
        $bb = 77;
            
        if ( $aa >= $bb )
        {  echo "16. Большее число $aa </br></br>\n";}
        else {  echo "16. Большее число $bb </br></br>\n";}
        
        $aaa = "78";
        $bbb = 78;

        if ( $aaa == $bbb )
        {  echo "17. Равны </br></br>\n";}
        else {  echo "17. Не равны </br></br>\n";}
        
        if ( $aaa === $bbb )
        {  echo "18. Эквивалентны </br></br>\n";}
        else {  echo "18. Не эквивалентны </br></br>\n";}
        
        
        echo "19. var_dump($aaa) это - "; var_dump($aaa); echo "</br>\n";
        
        echo "19. var_dump($bbb) это  - "; var_dump($bbb); echo "</br>\n";
        
        echo "19. var_dump($aaa == $bbb) это - "; var_dump($aaa == $bbb); echo "</br></br>\n";
    
        $t1 = (bool) 20 ;
        
        echo "20. (boolean) 20 это: ". $t1; echo " </br></br>\n";
        

        $t2 = (bool) 0 ;

        echo "21. (boolean) 0 это: "; var_dump($t2); echo " </br></br>\n";
        

        $t3 = (bool) -20 ;

        echo "22. (boolean) -20 это: ". $t3; echo " </br></br>\n";
        
        
        
        ?>
        
    </body>
</html>