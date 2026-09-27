<?php

include "db.php";
session_start();

$result = $conn->query("select * from products");
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
            <nav
                class="navbar navbar-expand-lg navbar-light bg-light"
            >
                <div class="container">
                    
                    <h2>hello,<?php echo $_SESSION['uname'];?></h2>
                    <button
                        class="navbar-toggler d-lg-none"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#collapsibleNavId"
                        aria-controls="collapsibleNavId"
                        aria-expanded="false"
                        aria-label="Toggle navigation"
                    >
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="collapsibleNavId">
                        <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" href="insert.php" aria-current="page"
                                    >Insert
                                    <span class="visually-hidden">(current)</span></a
                                >
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link active" href="update.php">Update</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="delete.php">Delete</a>
                            </li>
                        </ul>
                        <form action="logout.php" method="POST">
                            <button
                                type="submit"
                                class="btn btn-danger"
                                
                            >
                                Logout
                            </button>
                            
                        </form>
                        <form  action="csv.php" class="d-flex my-2 my-lg-0" method="POST" >
                           
                        
                            <button
                                class="btn btn-outline-success my-2 my-sm-0"
                                type="submit"
                                href="csv.php"
                            >
                                Download CSV
                            </button>
                        </form>
                    </div>
                </div>
            </nav>
            
        </header>
        <main>
            <div
                class="container col-8 mt-4"
            >
                <div
                class="table-responsive-md"
            >
                <table
                    class="table border table-striped align-middle mb-0"
                >
                    <thead class="table-dark">
                        <tr class="">
                            <th scope="col" class="px-4">Product_ID</th>
                            <th scope="col">Product_name</th>
                            <th scope="col">Category</th>
                            <th scope="col">Price</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Brand</th>
                            <th scope="col">Description</th>
                        </tr>
                    </thead>
                    <tbody>
                      <?php while ($row =$result->fetch_assoc()) {?>
                      <tr>
                        <td><?php echo $row['p_id']?></td>
                        <td><?php echo $row['p_name']?></td>
                        <td><?php echo $row['category']?></td>
                        <td><?php echo $row['price']?></td>
                        <td><?php echo $row['quantity']?></td>
                        <td><?php echo $row['brand']?></td>
                        <td><?php echo $row['description']?></td>
                      </tr>
                      <?php } ?>
                    </tbody>
                </table>
            </div>
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
