<?php

include "db.php";
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $producename = $_POST["pname"];
    $category= $_POST["category"];
    $price=$_POST["price"];
    $quantity=$_POST["quantity"];
    $brand=$_POST["brand"];
    $description=$_POST["description"];


    $sql = $conn ->prepare("insert into products(p_name,category,price,quantity,brand,description) values (?,?,?,?,?,?)");
    $sql->bind_param('ssiiss',$producename,$category,$price,$quantity,$brand,$description);
    if($sql->execute()){
        header('Location:home.php');
    }
}



?>
<!doctype html>
<html lang="en" data-bs-theme="light">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <!-- Bootstrap CSS v5.3.8 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
            crossorigin="anonymous"
        />
    </head>

    <body>
        <header>
            <!-- place navbar here -->
        </header>
        <main>
            <h2 class="text-center mt-5">INSERT PRODUCT</h2>

            <div
                class="container col-5"
            >
                <form action="" method="post">
                
                 <div class="mb-3">
                    <label for="" class="form-label">Product_name</label>
                    <input
                        type="text"
                        class="form-control"
                        name="pname"
                        id=""
                        aria-describedby="helpId"
                        placeholder=""
                    />
                    
                </div>
                 <div class="mb-3">
                    <label for="" class="form-label">category</label>
                    <input
                        type="text"
                        class="form-control"
                        name="category"
                        id=""
                        aria-describedby="helpId"
                        placeholder=""
                    />
                    
                </div>
                 <div class="mb-3">
                    <label for="" class="form-label">price</label>
                    <input
                        type="text"
                        class="form-control"
                        name="price"
                        id=""
                        aria-describedby="helpId"
                        placeholder=""
                    />
                    
                </div>
                 <div class="mb-3">
                    <label for="" class="form-label">Quantity</label>
                    <input
                        type="text"
                        class="form-control"
                        name="quantity"
                        id=""
                        aria-describedby="helpId"
                        placeholder=""
                    />
                    
                </div>
                 <div class="mb-3">
                    <label for="" class="form-label">brand</label>
                    <input
                        type="text"
                        class="form-control"
                        name="brand"
                        id=""
                        aria-describedby="helpId"
                        placeholder=""
                    />
                    
                </div>
                 <div class="mb-3">
                    <label for="" class="form-label">description</label>
                    <input
                        type="text"
                        class="form-control"
                        name="description"
                        id=""
                        aria-describedby="helpId"
                        placeholder=""
                    />
                    
                </div>
                <div class="text-center">
                    <button
                        type="submit"
                        class="btn btn-primary "
                    >
                        Insert
                    </button>

                    <form action="home.php" method="post">
                        <button
                        type="submit"
                        class="btn btn-primary "
                        
                    >
                        Back
                    </button>
                    </form>
                </div>
                

                </form>
            </div>
            

        </main>
        <footer>
            <!-- place footer here -->
        </footer>
        <!-- Bootstrap JavaScript Bundle (includes Popper) -->
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
