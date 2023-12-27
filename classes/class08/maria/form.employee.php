    <?php
    class employee
    {
        public $n;
        function __construct($num)
        {
            $this->n = $num;
        }
        function sq()
        {
            return $this->n * $this->n;
        }
        function cube()
        {
            return $this->sq() * $this->n;
        }
        function squareroot(){
            return sqrt($this->n);
        }
    }
    //$getval= !empty($_GET["fval"]) ? $_GET["fval"] : 5;
    $getval =  $_GET["fval"] ?? null;
    if ($getval) {
        $no = new employee($getval);
        $square = $no->sq();
        $cube = $no->cube();
        $sroot = $no->squareroot();
    }
    ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>

    <body>
        <form action="#" method="get">
            <input type="text" name="fval" id="inval">
            <input type="submit" value="Click" id="">
        </form>
        <?php
        if (isset($square)) {
            echo "<div>Result : {$square}</div>";
        }
        if (isset($cube)) {
            echo "<div>Result : {$cube}</div>";
        }
        if (isset($sroot)) {
            echo "<div>Result : {$sroot}</div>";
        }
        ?>

    </body>

    </html>