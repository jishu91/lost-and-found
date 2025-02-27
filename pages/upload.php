<?php include '../templates/header.php'; ?>



<link rel="stylesheet" href="style.css">


<div class="container mt-5">
    
    <div class="row justify-content-center" style="margin-top: 110px;">
        <div class="col-md-6">
            <!-- Upload Form Card -->
            <div class="card shadow-lg border-0 rounded-4 premium-card">
                <div class="card-header text-center  p-4">
                    <h2 class="fw-bold">🛠️ Upload Found Item</h2>
                </div>

                <div class="card-body">
                    <p class="text-muted text-center mb-4">Help others by reporting found items with details and an image.</p>

                    <!-- Upload Form -->
                    <form action="../actions/process-upload.php" method="post" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="item_name" class="form-label">📦 Item Name</label>
                            <input type="text" class="form-control custom-input" id="item_name" name="item_name" placeholder="Enter item name" required>
                        </div>

                        <div class="mb-3">
                            <label for="description" class="form-label">📝 Description</label>
                            <textarea class="form-control custom-input" id="description" name="description" rows="3" placeholder="Provide a brief description" required></textarea>
                        </div>

                        <div class="mb-3">
                            <label for="location" class="form-label">📍 Location Found</label>
                            <input type="text" class="form-control custom-input" id="location" name="location" placeholder="Where did you find this item?" required>
                        </div>

                        <div class="mb-3">
                            <label for="contact" class="form-label">📞 Your Contact Info</label>
                            <input type="text" class="form-control custom-input" id="contact" name="contact" placeholder="Your email or phone" required>
                        </div>

                        <div class="mb-4">
                            <label for="image" class="form-label">🖼️ Upload Image</label>
                            <input class="form-control custom-input" type="file" id="image" name="image" accept="image/*" required>
                        </div>

                        <!-- Submit Button -->
                        <div class="text-center">
                            <button type="submit" class="btn btn-gradient w-100 py-2">🚀 Submit</button>
                        </div>
                    </form>
                </div>

                <!-- Back to Home -->
                <div class="card-footer text-center bg-light border-top-0 p-3">
                    <a href="./index.php" class="btn btn-outline-gradient px-4">⬅️ Back to Home</a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include '../templates/footer.php'; ?>