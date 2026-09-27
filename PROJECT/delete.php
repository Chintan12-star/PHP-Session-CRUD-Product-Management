<?php
include "db.php";
if ($_SERVER["REQUEST_METHOD"]=== "POST") {
    $producd_id=$_POST["p_id"];

    $mysql= $conn->prepare("delete from products where p_id=? ");
    $mysql->bind_param("i", $producd_id);
    if ($mysql->execute()) {
        header("Location:home.php");
}else{
    echo "error";
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
            <h2 class="text-center mt-5">DELETE PRODUCT</h2>
            <div
                class="container col-4"
            >
                <form action="" method="post">
                    <div class="mb-3 mt-5">
                        <label for="" class="form-label">Product_ID</label>
                        <input
                            type="text"
                            class="form-control"
                            name="p_id"
                            id=""
                            aria-describedby="helpId"
                            placeholder=""
                        />
                        
                    </div>
                    <div class="text-center mt-5">
                        <button
                            type="submit"
                            class="btn btn-danger"
                        >
                            Delete
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
