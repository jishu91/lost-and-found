<?php
// Include database connection
include '../config/config.php';

// Get search query
$query = $_GET['query'] ?? '';

if ($query) {
    // Prepare and execute search query
    $search = "%$query%";
    $stmt = $conn->prepare("SELECT * FROM lost_items WHERE item_name LIKE ? OR location LIKE ?");
    $stmt->bind_param("ss", $search, $search);
    $stmt->execute();
    $result = $stmt->get_result();
} else {
    $result = [];
}
?>

<?php include '../templates/header.php'; ?>


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
    <!-- Header Section -->
    <h3 class="mb-4 text-center " style="margin-top: 110px;">🔍 Search Results </h3>

    <?php if ($result && $result->num_rows > 0): ?>
        <div class="row">
            <?php while ($row = $result->fetch_assoc()): ?>
                <div class="col-md-4 mb-4">
                    <div class="card border-0 shadow-lg rounded-4">
                        <img src="../assets/images/<?php echo htmlspecialchars($row['image']); ?>" class="card-img-top img-fluid rounded-top" alt="Item Image" style="height: 220px; object-fit: cover;">
                        <div class="card-body text-center">
                            <h5 class="card-title text-primary fw-bold"><?php echo htmlspecialchars($row['item_name']); ?></h5>
                            <p class="card-text text-muted"><strong>📍 Location:</strong> <?php echo htmlspecialchars($row['location']); ?></p>
                            <a href="view-item.php?id=<?php echo $row['id']; ?>" class="btn btn-gradient px-4">View Details</a>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    <?php else: ?>
        <div class="text-center">
            <!-- <img src="../assets/images/no-results.png" alt="No Results" class="img-fluid mb-3" style="width: 150px;"> -->
            <p class="text-muted fs-5">Sorry, no results found for "<strong><?php echo htmlspecialchars($query); ?></strong>".</p>
        </div>
    <?php endif; ?>

    <div class="text-center mt-4">
        <a href="index.php" class="btn btn-outline-dark px-5 py-2 rounded-pill">⬅️ Back to Home</a>
    </div>
</div>