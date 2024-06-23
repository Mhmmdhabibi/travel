<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Grid</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .image-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            gap: 10px;
            padding: 10px;
        }

        .image-item {
            overflow: hidden;
            border: 2px solid #ccc;
            border-radius: 10px;
        }

        .image-item img {
            width: 100%;
            height: auto;
            display: block;
            transition: transform 0.3s ease;
        }

        .image-item img:hover {
            transform: scale(1.1);
        }
    </style>
</head>

<body>
    <div class="image-grid" style="display: flex; justify: center;" id="imageGrid">
        <!-- Images will be added dynamically here -->
    </div>

    <script>
        // Array of image paths
        const imagePaths = [
            "/syaratdanketentuan/syarat1.jpg",
            "/syaratdanketentuan/syarat2.jpg",
            "/syaratdanketentuan/syarat3.jpg",

            // Add more images as needed
        ];

        // Get the image grid container
        const imageGrid = document.getElementById('imageGrid');

        // Loop through the imagePaths array and create image items
        imagePaths.forEach((imagePath, index) => {
            const imageItem = document.createElement('div');
            imageItem.classList.add('image-item');

            const image = document.createElement('img');
            image.src = imagePath;
            image.alt = `Image ${index + 1}`;

            imageItem.appendChild(image);
            imageGrid.appendChild(imageItem);
        });
    </script>
</body>

</html>
