<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    /*
https://www.google.com/search.php?q=kurta&sca_esv=592703979&sxsrf=AM9HkKn5_-2JVas6F7cll5Z0sdsqw2g_lQ%3A1703131054198&source=hp&ei=rreDZeDkCbjL1e8PkKOPgAs&iflsig=AO6bgOgAAAAAZYPFvkXeFHW2jL5-hYWyPQ5ax9pKlM4g&ved=0ahUKEwjg8_TL0Z-DAxW4ZfUHHZDRA7AQ4dUDCAo&uact=5&oq=kurta&gs_lp=Egdnd3Mtd2l6GgIYAiIFa3VydGEyDhAAGIAEGIoFGJECGLEDMgsQABiABBiKBRiRAjIFEAAYgAQyBRAAGIAEMgUQABiABDIFEAAYgAQyBRAAGIAEMgUQABiABDIFEAAYgAQyBRAAGIAESKokUOcYWLghcAF4AJABAJgB0wGgAdEHqgEFMC4zLjK4AQPIAQD4AQGoAgrCAgcQIxjqAhgnwgIKECMYgAQYigUYJ8ICChAuGIAEGIoFGCfCAgsQLhiABBiKBRiRAsICCxAAGIAEGLEDGIMBwgIOEAAYgAQYigUYsQMYgwHCAgQQIxgnwgIREAAYgAQYigUYkQIYsQMYgwHCAhEQLhiABBiKBRiRAhixAxiDAcICCxAuGIAEGLEDGIMBwgIREC4YgwEYkQIYsQMYgAQYigXCAhQQLhiABBixAxiDARiLAxioAxijA8ICCxAAGIAEGLEDGIsDwgIIEAAYgAQYiwPCAg4QABiABBixAxiDARiLA8ICBxAAGAMYiwPCAggQABiABBixA8ICCxAuGIAEGLEDGNQC&sclient=gws-wiz
    */
    for ($i=1; $i <= 100 ; $i++) { 
        echo "<a href='get-method-product.php?product={$i}'>Product {$i}</a> | \n";
    }
    ?>
</body>
</html>