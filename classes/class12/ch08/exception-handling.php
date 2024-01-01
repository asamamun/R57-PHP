    <?php
    ini_set("display_errors", 1);
    function sq(int $num){
        return $num*$num;
    }
    function hello(string $text){
        return "<h1>{$text}</h1>";
    }

    //try catch
    //try e kono error hoile sei error throw kora hoy automatically. catch block sei error dhorte pare.
    try {
        // throw new Exception("An error occurred in 2024");
       echo sq("A") . "<br>";
        echo hello("Happy New Year 2024") . "<br>";   
    } catch (\Throwable $th) {
        echo $th->getMessage();
        // echo $th->getLine();
        // echo $th->getFile();
    }

    echo "<hr>";
    
    ?>
