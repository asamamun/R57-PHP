<?php
require "database.php";
$searchStr = false;
$searchString = false;
if(isset($_GET['psearch'])){
    $searchString = $conn->real_escape_string($_GET['psearch']);
    // if($_GET['field']=='name'){
    // $field = 'name';
    // }
    // if($_GET['field']=='sku'){
    // $field = 'sku';
    // }
    // $searchStr = " where ".$field." like '%$searchString%' ";
    
    $searchStr = " where sku like '%$searchString%' or name like '%$searchString%' ";
}

$page = isset($_GET['page'])?$_GET['page']:1;
$pageSize = 10;
$offset = ($page-1)*$pageSize;
//total record start

//for search result
if (isset($_GET['psearch'])) {
    $totalRecordQuery = "select count(*) as total from products".$searchStr;
}
//for search result end
else{
    $totalRecordQuery = "select count(*) as total from products";
}

$totalRecordQueryResult = $conn->query($totalRecordQuery);
$row = $totalRecordQueryResult->fetch_assoc();
$totalRecord = $row['total'];
//total record end
$totalPages = ceil($totalRecord/$pageSize);


if (isset($_GET['psearch'])) {
    $selectQuery = "select * from products ".$searchStr." limit $offset,$pageSize";
}
else{
    $selectQuery = "select * from products limit $offset,$pageSize";
}

$selectQueryResult = $conn->query($selectQuery);
//echo $selectQueryResult->num_rows;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
<link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
    <div class="text-right">
        <form action="" method="get">
            <input  type="search" name="psearch" id="">
            <input class="btn btn-info" type="submit" value="Search" name="searchBtn">
            <input class="btn btn-info" type="button" value="Clear" name="clearBtn" onclick="refreshpage()">
            <a href="insert.php" class="btn btn-primary">Add</a>
        </form>
        
    </div>
       
        <table class="table table-bordered table-striped">        
            <caption>Total Products: <?php echo $row['total']; ?></caption>
            <thead>
            <tr>
                <th>Product ID</th>
                <th>SKU</th>
                <th>NAME</th>
                <th>Price</th>
                <th>Action</th>
            </tr>
            </thead>
            <?php

if($selectQueryResult->num_rows > 0){
    while($row = $selectQueryResult->fetch_assoc()){
        echo "<tbody><tr>
        <td>".$row['id']."</td>
        <td>".$row['sku']."</td>
        <td>".$row['name']."</td>
        <td>".$row['price']."</td>
        <td>
        <a href='editproduct.php?id=".$row['id']."'><img src='images/edit16x16.png'/></a>
        <a onclick='return confirm(\"Are you sure?\")' href='deleteproduct.php?id=".$row['id']."'><img src='images/delete16x16.png'/></a>
        </td>
    </tr></tbody>";
        // echo "<h3>Product : ".$row['name']."</h3>";
        // echo "<h4>sku : ".$row['sku']."</h4>";
        // echo "<strong>Price: ".$row['price']."</strong>";
        // echo "<hr>";

    }
}

$selectQueryResult->free();

    
            ?>
            
            
        </table>
        <hr>
        <nav aria-label="Page navigation example">
  <ul class="pagination">
    <?php
    
    $p = (($page-1)>0)?($page-1):1;
    $prev_disabled = ($page==1)?"disabled":"";
    echo '<li class="page-item '.$prev_disabled.'"><a class="page-link" href="?page=1'.'&psearch='.($searchString?$searchString:'').'">First</a></li>';
    echo '<li class="page-item '.$prev_disabled.'"><a class="page-link" href="?page='.$p.'&psearch='.($searchString?$searchString:'').'">Previous</a></li>';
    //echo $active.'<a class="page-link" href="?page='.($page-1).'">Previous</a>';
    for ($i=1; $i <=$totalPages ; $i++) {
        $active = ($page==$i)?"active":'';
        
        
        if (abs($page-$i) < 6) {
            
            // echo '<li class="page-item '.$active.'"><a class="page-link" href="?page='.$page-1.'"> 'Previous'</a></li>';
            echo '<li class="page-item '.$active.'"><a class="page-link" href="?page='.$i.'&psearch='.($searchString?$searchString:'').'">'.$i.'</a></li>';
        }
        
        // echo '<li class="page-item '.$active.'"><a class="page-link" href="?page='.$page+1 .'">'."Next" .'</a></li>';
    }
    $n = (($page+1)<$totalPages)?($page+1):$totalPages;
    $next_disabled = ($page==$totalPages)?"disabled":"";
    echo '<li class="page-item '.$next_disabled.'"><a class="page-link" href="?page='.$n.'&psearch='.($searchString?$searchString:'').'">Next</a></li>';
    echo '<li class="page-item '.$next_disabled.'"><a class="page-link" href="?page='.$totalPages.'&psearch='.($searchString?$searchString:'').'">Last</a></li>';
   
    ?>
  </ul>
</nav>
    </div>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script>
function refreshpage(){
    window.location.href = "select.php";
}
</script>
</body>
</html>