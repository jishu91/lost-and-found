<?php
include '../config/config.php'; // Ensure correct file path
include '../templates/header.php';

if (isset($_GET['id'])) {
    $id = intval($_GET['id']); // Security improvement: Convert to integer to prevent SQL injection
    $sql = "SELECT * FROM lost_items WHERE id = $id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
    } else {
        echo "<div class='container mt-5'><div class='alert alert-danger'>Item not found!</div></div>";
        include '../templates/footer.php';
        exit();
    }
} else {
    echo "<div class='container mt-5'><div class='alert alert-warning'>Invalid request.</div></div>";
    include '../templates/footer.php';
    exit();
}
?>




<link rel="stylesheet" href="style.css">
<style>
    .card {
        transition: transform 0.4s ease, box-shadow 0.4s ease;
    }

    .card:hover {
        transform: translateY(-10px);
        box-shadow: 0 20px 30px rgba(0, 0, 0, 0.2);
    }

    .card-body h5 {
        color: #333;
        font-size: 1.3rem;
    }

    .card-text {
        font-size: 1.1rem;
    }
</style>
<div class="container mt-5">
    <!-- Item Details Section -->
    <div class="card shadow-lg border-0 rounded-4 premium-card mx-auto" style="max-width: 500px; margin-top: 110px;">
        <div class="card-header text-center p-4">
            <h2 class="fw-bold"><?php echo htmlspecialchars($row['item_name']); ?></h2>
        </div>

        <div class="card-body text-center">
            <img src="../assets/images/<?php echo htmlspecialchars($row['image']); ?>"
                class="img-fluid rounded-circle shadow-lg mb-4"
                alt="Item Image"
                style="width: 220px; height: 220px; object-fit: cover; border: 5px solid #fff;">

            <div class="item-info text-start px-3">
                <p><strong>📝 Description:</strong> <?php echo htmlspecialchars($row['description']); ?></p>
                <p><strong>📍 Location Found:</strong> <?php echo htmlspecialchars($row['location']); ?></p>
                <p><strong>📞 Contact:</strong> <?php echo htmlspecialchars($row['contact']); ?></p>
            </div>
        </div>

        <div class="card-footer text-center bg-light border-top-0 p-3">
            <a href="./index.php" class="btn btn-gradient px-5 py-2">⬅️ Back to Home</a>
        </div>
    </div>
</div>


<?php include '../templates/footer.php'; ?>