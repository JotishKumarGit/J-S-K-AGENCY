<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>J S K AGENCY - Premium Ice Cream Manufacturer</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="assets/style.css">

</head>

<body>

       <!-- header -->
    <?php include('header.php') ?>

    <!-- bread crumb -->
    <section class="py-5 text-white position-relative text-center"
        style="background: url('./assets/img/Mango_Magic.jpg') center/cover no-repeat;">

        <!-- Dark overlay -->
        <div class="position-absolute top-0 start-0 w-100 h-100" style="background: rgba(0,0,0,0.7);"></div>

        <div class="container position-relative py-5">
            <h2 class="mb-3">Mango Magic Ice Cream</h2>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item">
                        <a href="#" class="text-white text-decoration-none">Home</a>
                    </li>
                    <li class="breadcrumb-item active text-light" aria-current="page">
                        Mango Magic Ice Cream
                    </li>
                </ol>
            </nav>
        </div>
    </section>

    <!-- Products details -->
    <section class="py-5">
        <div class="container">
            <div class="row align-items-center g-4">
                <!-- Product Image -->
                <div class="col-md-6">
                    <img src="assets/img/Mango_Magic.jpg"
                        class="img-fluid rounded shadow animate__animated animate__fadeInLeft"
                        alt="Mango Magic Ice Cream">
                </div>

                <!-- Product Details -->
                <div class="col-md-6">
                    <div class="p-4 shadow rounded animate__animated animate__fadeInRight">
                        <h2 class="mb-3">Mango Magic Ice Cream</h2>
                        <p class="mb-2"><strong>Ingredients:</strong> Milk, Sugar, Alphonso Mango Pulp, Cream, Cardamom,
                            Natural Flavor</p>
                        <p class="mb-2"><strong>Features:</strong> Creamy, Fruity, Refreshing, Premium Mango Flavor,
                            Summer Special</p>
                        <p class="mb-2"><strong>Keywords:</strong> Mango Magic Ice Cream, Alphonso Mango Dessert, Indian
                            Ice Cream, Frozen Mango Treat, Creamy Mango, Tropical Ice Cream, Summer Delight</p>
                        <p class="mb-3">Experience the exotic taste of Alphonso mangoes in our Mango Magic Ice Cream.
                            Creamy, fruity, and refreshing, it’s a perfect indulgence for summer or any mango lover.</p>
                        <a href="#" class="btn btn-primary shadow-sm" data-bs-toggle="modal"
                            data-bs-target="#enquiryModal">
                            Enquiry Now
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

      <!-- footer -->
    <?php include('footer.php') ?>