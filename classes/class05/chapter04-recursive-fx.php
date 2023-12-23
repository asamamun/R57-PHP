<h1>Recursive function can call itself</h1>
<?php
function numbers($n){
    if($n==0){ return null; }
    return $n . numbers($n-1);
}

echo numbers(10);
?>
<table border="1" width="100%">
    <tr>
        <th>step</th>
        <th>$n</th>
        <th>numbers($n-1)</th>
        <th>return</th>
    </tr>
    <tr>
        <td>1</td>
        <td>10</td>
        <td>numbers(9)</td>
        <td>10  . numbers(9)</td>
    </tr>
    <tr>
        <td>2</td>
        <td>9</td>
        <td>numbers(8)</td>
        <td>10  . 9. numbers(8)</td>
    </tr>
    <tr>
        <td>3</td>
        <td>8</td>
        <td>numbers(7)</td>
        <td>10  . 9. 8. numbers(7)</td>
    </tr>
    <tr>
        <td>9</td>
        <td>1</td>
        <td>numbers(0)</td>
        <td>10  . 9. 8. 7.6.5.4.3.2.1.numbers(0)</td>
    </tr>
    <tr>
        <td>10</td>
        <td>0</td>
        <td>numbers(-1)</td>
        <td>10  . 9. 8. 7.6.5.4.3.2.1.null</td>
    </tr>
</table>