<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row" id="productContainer"></div>
    </div>
    <script>
        function show(d) {
            //console.log(d);
            let html = "";
            d.forEach(e => {
               html += `<div class="card col-md-3">
               <a href="product.php?id=${e.id}&name=${e.title}" style="text-decoration:none">
                <img src="${e.thumbnail}" class="card-img-top" alt="${e.title}">
                <div class="card-body">
                    <h5 class="card-title">${e.title}</h5>
                    <p class="card-text">${e.description}</p>
                </div>
                <div class="card-footer">
                    <small class="text-body-secondary">Price: ${e.price}</small>
                </div>
                </a>
            </div>`;
            });
            document.getElementById("productContainer").innerHTML = html;
        }

        function load() {
            fetch('https://dummyjson.com/products')
                .then(res => res.json())
                .then(d => {
                    show(d.products)
                });
        }

        load();
    </script>
</body>

</html>