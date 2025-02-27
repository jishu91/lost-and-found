<?php include '../config/config.php'; ?>
<?php include '../templates/header.php'; ?>

<style>
  

</style>
<link rel="stylesheet" href="style.css">
<div class="container mt-5">
    <!-- Header Section -->

    <!-- section -->
    <section class="hero">
        <div class="container">
            <div class="hero-content">
                <h1 class="display-3 fw-bold">Welcome to Lost and Found Portal</h1>
                <p class="lead mb-4">Easily find your lost items</p>
                <a href="#lostitems" class="btn btn-premium btn-lg">All items</a>
            </div>
        </div>
    </section>

<section id="lostitems">


<div class="row">
    <!-- Find Lost Items Section -->
    <div class="col-md-12">
        <div class="card shadow-lg border-0 rounded-4 lost-items-card">
            <div class="card-header text-center  p-4">
                <h3 class="fw-bold"> All Items</h3>
            </div>

            <div class="card-body">
                <p class="text-muted text-center mb-4">Browse found items and reclaim what's yours.</p>

                <?php
                $query = "SELECT * FROM lost_items ORDER BY created_at DESC LIMIT 5";
                $result = mysqli_query($conn, $query);
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo '
                        <div class="item-card card mb-3 p-2 shadow-sm">
                            <div class="row g-2">
                                <!-- Image Column -->
                                <div class="col-4">
                                    <img src="../assets/images/' . htmlspecialchars($row['image']) . '" class="img-fluid rounded image-hover" alt="' . htmlspecialchars($row['item_name']) . '">
                                </div>

                                <!-- Info Column -->
                                <div class="col-8 d-flex flex-column justify-content-center">
                                    <h5 class="card-title mb-2 text-primary fw-bold">' . htmlspecialchars($row['item_name']) . '</h5>
                                    <p class="card-text mb-2"><strong>📍 Found at:</strong> ' . htmlspecialchars($row['location']) . '</p>
                                    <a href="./view-item.php?id=' . $row['id'] . '" class="btn btn-gradient btn-sm w-50">👁️ View Details</a>
                                </div>
                            </div>
                        </div>';
                    }
                } else {
                    echo '<p class="text-center text-muted">No items found.</p>';
                }
                ?>
            </div>
        </div>
    </div>
</div>


    </section>

</div>



<?php include '../templates/footer.php'; ?>