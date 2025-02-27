<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lost and Found</title>
    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- <link rel="stylesheet" href="../assets/styles.css"> -->
<style>
    .btn-warning:hover {
        background-color: DodgerBlue ;
        color: white ;
    }
</style>
</head>
<body>

<!-- <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
        <a class="navbar-brand" href="./index.php">Lost & Found</a>
    </div>
</nav> -->
<header>
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Lost&Found</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" 
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class=" me-2 btn btn-warning  " href="index.php">Home</a></li>
                    <li class="nav-item"><a class=" me-2 btn btn-warning  " href="./upload.php">Report found items</a></li>
                    <!-- <li class="nav-item"><a class="nav-link" href="#"></a></li>
                    <li class="nav-item"><a class="nav-link" href="#"></a></li> -->
                    <li class="nav-item">
            <form class="d-flex" action="./search.php" method="GET">
                <input class="form-control me-2" type="text" name="query" placeholder="Search items" required>
                <button class="btn btn-warning" type="submit">Search</button>
            </form>
        </li>
                    
                </ul>
            </div>
        </div>
    </nav>
</header>

