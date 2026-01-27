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

    <!-- Banner Section -->
    <section id="home" class="banner-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 banner-content">
                    <h1 class="banner-title">Living Ice Cream</h1>
                    <p class="banner-subtitle">Indulgent taste meets healthy ingredients – never choose between flavour
                        and wellness</p>
                    <button class="btn btn-enquiry btn-lg" data-bs-toggle="modal" data-bs-target="#enquiryModal">
                        <i class="fas fa-ice-cream"></i> Explore Our Flavours
                    </button>
                </div>
                <div class="col-lg-6 text-center">
                    <!-- <i class="fas fa-ice-cream" style="font-size: 300px; color: rgba(255,255,255,0.2);"></i> -->
                    <img src="assets/img/Chocolate_Fudge.jpg" style="border-radius: 30px;" alt="">
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="about-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 text-center">
                    <h2 class="section-title">About Us</h2>
                </div>
            </div>
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-6">
                    <div class="about-card">
                        <h3 class="mb-4">Welcome to J S K AGENCY</h3>
                        <p class="lead">Since 2007, we have been crafting premium ice cream that brings joy to every
                            scoop. Under the leadership of our Director, Jayakannan Santhanakrishnan, with 19 years of
                            industry experience, we have established ourselves as a trusted name in ice cream
                            manufacturing.</p>
                        <p>Located in Singanallur, Coimbatore, Tamil Nadu, our state-of-the-art facility spans 4,500
                            square feet and houses 16 advanced machines capable of producing 6 metric tons per day. Our
                            commitment to quality is reflected in our FSSAI certification and recognition in Vikadan
                            Paper Articles.</p>
                        <p>With a dedicated team of 11 professionals and an annual turnover of 2 CR, we pride ourselves
                            on delivering ice cream that never compromises between indulgent taste and healthy
                            ingredients.</p>

                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="stats-box">
                        <div class="stats-number">2007</div>
                        <div>Established</div>
                    </div>
                    <div class="stats-box">
                        <div class="stats-number">19+</div>
                        <div>Years Experience</div>
                    </div>
                    <div class="stats-box">
                        <div class="stats-number">6</div>
                        <div>Metric Tons/Day</div>
                    </div>
                    <div class="stats-box">
                        <div class="stats-number">11</div>
                        <div>Team Members</div>
                    </div>
                </div>
                <!-- <div class="col-md-6">
                    <h2 class="mb-3 section-title">Our Menus</h2>
                    <img src="./assets/img/all-img.jpeg" height="auto" width="100%" alt="">
                </div> -->
            </div>
        </div>
    </section>

    <!-- Menu Section -->
    <section id="menu" class="menu-section py-5" style="background-color: #e7f1ef;">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title">Our Menu</h2>
                <p style="color: #555; font-size: 1.1rem; max-width: 700px; margin: 0 auto;">
                    Click on the menu items to view full screen.
                </p>
            </div>

            <div class="row g-4 justify-content-center align-items-center">
                <!-- Menu Item 1 -->
                <div class="col-sm-6 col-md-5">
                    <img src="./assets/img/all-img.jpeg" alt="Chocolate Delight" height="500px" width="100%"
                        class="menu-img" style="cursor:pointer; border-radius:12px;" onclick="openFullScreen(this.src)">
                </div>

                <!-- Menu Item 2 -->
                <div class="col-sm-6 col-md-5">
                    <img src="./assets/img/g-1.jpeg " height="500px" width="100%" alt="Strawberry Heaven"
                        class=" menu-img" style="cursor:pointer; border-radius:12px;"
                        onclick="openFullScreen(this.src)">
                </div>
            </div>
        </div>
    </section>
    <!-- Fullscreen Overlay -->
    <div id="fullscreen-view" onclick="closeFullScreen()" style="display:none; position:fixed; top:0; left:0; width:100%; height:100%; 
           display:flex; justify-content:center; align-items:center; z-index:9999;">
        <img id="fullscreen-img" src="" style="max-width:100%; max-height:100%; border-radius:12px;">
    </div>
    <script>
        function openFullScreen(src) {
            document.getElementById('fullscreen-img').src = src;
            document.getElementById('fullscreen-view').style.display = 'flex';
        }

        function closeFullScreen() {
            document.getElementById('fullscreen-view').style.display = 'none';
        }
    </script>

    <!-- Products Section -->
    <section id="products" class="products-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 text-center">
                    <h2 class="section-title">Our Products</h2>
                    <p class="lead mb-5">Discover our wide range of delicious ice cream flavours</p>
                </div>
            </div>

            <div class="row justify-content-center align-items-center">

                <!-- Mango Kulfi -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="product-card">
                        <div class="product-image">
                            <img src="assets/img/Mango-Kulfi.jpg" height="280" width="100%" alt="Mango Kulfi">
                        </div>
                        <div class="product-body text-center">
                            <h4>Mango Kulfi</h4>
                            <p>Real Alphonso mango pulp se bani hui creamy aur refreshing kulfi.</p>
                            <a href="Mango-Kulfi.php" class="btn-enquiry text-decoration-none mt-2">View Details</a>
                        </div>
                    </div>
                </div>

                <!-- Malai Kulfi -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="product-card">
                        <div class="product-image">
                            <img src="assets/img/Malai-Kulfi.jpg" height="280" width="100%" alt="Malai Kulfi">
                        </div>
                        <div class="product-body text-center">
                            <h4>Malai Kulfi</h4>
                            <p>Pure milk aur fresh cream se bani rich aur smooth malai kulfi.</p>
                            <a href="Malai-Kulfi.php" class="btn-enquiry text-decoration-none mt-2">View Details</a>
                        </div>
                    </div>
                </div>

                <!-- Kesar Pista Kulfi -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="product-card">
                        <div class="product-image">
                            <img src="assets/img/Kesar-Pista-Kulfi.jpg" height="280" width="100%"
                                alt="Kesar Pista Kulfi">
                        </div>
                        <div class="product-body text-center">
                            <h4>Kesar Pista Kulfi</h4>
                            <p>Premium kesar aur pista ke rich flavours ke saath royal kulfi.</p>
                            <a href="Kesar-Pista-Kulfi.php" class="btn-enquiry text-decoration-none mt-2">View
                                Details</a>
                        </div>
                    </div>
                </div>

                <!-- Badam Kulfi -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="product-card">
                        <div class="product-image">
                            <img src="assets/img/Badam-Kulfi.webp" height="280" width="100%" alt="Badam Kulfi">
                        </div>
                        <div class="product-body text-center">
                            <h4>Badam Kulfi</h4>
                            <p>Crunchy badam pieces ke saath creamy aur nutritious kulfi.</p>
                            <a href="Badam-Kulfi.php" class="btn-enquiry text-decoration-none mt-2">View Details</a>
                        </div>
                    </div>
                </div>

                <!-- Alphonso Mango Ice Cream -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="product-card">
                        <div class="product-image">
                            <img src="assets/img/Alphonso_Mango.png" height="280" width="100%" alt="Alphonso Mango">
                        </div>
                        <div class="product-body text-center">
                            <h4>Alphonso Mango Ice Cream</h4>
                            <p>Premium Alphonso mangoes se bana rich aur royal ice cream.</p>
                            <a href="Alphonso-Mango-Ice-Cream.php" class="btn-enquiry text-decoration-none mt-2">View
                                Details</a>
                        </div>
                    </div>
                </div>

                <!-- Chocolate Classic -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="product-card">
                        <div class="product-image">
                            <img src="assets/img/Chocolate_Classic_Ice_Cream.jpg" height="280" width="100%"
                                alt="Chocolate Classic">
                        </div>
                        <div class="product-body text-center">
                            <h4>Chocolate Classic Ice Cream</h4>
                            <p>Fine cocoa se bana smooth aur creamy classic chocolate flavour.</p>
                            <a href="Chocolate-Classic-Ice-Cream.php"
                                class="btn-enquiry text-decoration-none mt-2">View Details</a>
                        </div>
                    </div>
                </div>

                <!-- Chocolate Fudge -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="product-card">
                        <div class="product-image">
                            <img src="assets/img/Chocolate_Fudge_Ice_Cream.jpg" height="280" width="100%"
                                alt="Chocolate Fudge">
                        </div>
                        <div class="product-body text-center">
                            <h4>Chocolate Fudge Ice Cream</h4>
                            <p>Rich chocolate ice cream loaded with thick gooey fudge.</p>
                            <a href="Chocolate-Fudge-Ice-Cream.php" class="btn-enquiry text-decoration-none mt-2">View
                                Details</a>
                        </div>
                    </div>
                </div>

                <!-- Dark Chocolate -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="product-card">
                        <div class="product-image">
                            <img src="assets/img/dark_c_ice.jpg" height="280" width="100%" alt="Dark Chocolate">
                        </div>
                        <div class="product-body text-center">
                            <h4>Dark Chocolate Ice Cream</h4>
                            <p>True chocolate lovers ke liye intense dark chocolate flavour.</p>
                            <a href="Dark-Chocolate-Ice-Cream.php" class="btn-enquiry text-decoration-none mt-2">View
                                Details</a>
                        </div>
                    </div>
                </div>

                <!-- Fresh Strawberry -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="product-card">
                        <div class="product-image">
                            <img src="assets/img/Fresh_Strawberry.jpg" height="280" width="100%" alt="Fresh Strawberry">
                        </div>
                        <div class="product-body text-center">
                            <h4>Fresh Strawberry Ice Cream</h4>
                            <p>Real strawberries se bana fresh aur fruity taste.</p>
                            <a href="Fresh-Strawberry-Ice-Cream.php" class="btn-enquiry text-decoration-none mt-2">View
                                Details</a>
                        </div>
                    </div>
                </div>

                <!-- Mango Ice Cream -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="product-card">
                        <div class="product-image">
                            <img src="assets/img/Mango_Cream.jpg" height="280" width="100%" alt="Mango Ice Cream">
                        </div>
                        <div class="product-body text-center">
                            <h4>Mango Ice Cream</h4>
                            <p>Creamy mango ice cream with smooth tropical flavour.</p>
                            <a href="Mango-Ice-Cream.php" class="btn-enquiry text-decoration-none mt-2">View
                                Details</a>
                        </div>
                    </div>
                </div>

                <!-- Mango Magic -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="product-card">
                        <div class="product-image">
                            <img src="assets/img/Mango_Magic.jpg" height="280" width="100%" alt="Mango Magic">
                        </div>
                        <div class="product-body text-center">
                            <h4>Mango Magic Ice Cream</h4>
                            <p>Magical mango flavour jo mouth mein melt ho jaaye.</p>
                            <a href="Mango-Magic-Ice-Cream.php" class="btn-enquiry text-decoration-none mt-2">View
                                Details</a>
                        </div>
                    </div>
                </div>

                <!-- Strawberry Delight -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="product-card">
                        <div class="product-image">
                            <img src="assets/img/Strawberry_Delight.webp" height="280" width="100%"
                                alt="Strawberry Delight">
                        </div>
                        <div class="product-body text-center">
                            <h4>Strawberry Delight Ice Cream</h4>
                            <p>Sweet, creamy aur delightful strawberry taste.</p>
                            <a href="Strawberry-Delight-Ice-Cream.php"
                                class="btn-enquiry text-decoration-none mt-2">View Details</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Why Choose Us Section -->
    <section id="why-choose" class="why-choose-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 text-center">
                    <h2 class="section-title">Why Choose Us</h2>
                    <p class="lead mb-5">What makes us the perfect choice for your ice cream needs</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 mb-3">
                    <div class="feature-box">
                        <div class="feature-icon">
                            <i class="fas fa-certificate"></i>
                        </div>
                        <h4>FSSAI Certified</h4>
                        <p>Quality assured with proper food safety standards</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-3">
                    <div class="feature-box">
                        <div class="feature-icon">
                            <i class="fas fa-leaf"></i>
                        </div>
                        <h4>Healthy Ingredients</h4>
                        <p>Made with natural, wholesome ingredients</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-3">
                    <div class="feature-box">
                        <div class="feature-icon">
                            <i class="fas fa-industry"></i>
                        </div>
                        <h4>Advanced Facility</h4>
                        <p>16 modern machines with 6 tons daily capacity</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-3">
                    <div class="feature-box">
                        <div class="feature-icon">
                            <i class="fas fa-flask"></i>
                        </div>
                        <h4>R&D Excellence</h4>
                        <p>Continuous innovation with testing facilities</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-3">
                    <div class="feature-box">
                        <div class="feature-icon">
                            <i class="fas fa-award"></i>
                        </div>
                        <h4>19 Years Legacy</h4>
                        <p>Trusted experience since 2007</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-3">
                    <div class="feature-box">
                        <div class="feature-icon">
                            <i class="fas fa-cogs"></i>
                        </div>
                        <h4>Customization</h4>
                        <p>Customized production facility available</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-3">
                    <div class="feature-box">
                        <div class="feature-icon">
                            <i class="fas fa-globe"></i>
                        </div>
                        <h4>Export Ready</h4>
                        <p>International quality standards</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-3">
                    <div class="feature-box">
                        <div class="feature-icon">
                            <i class="fas fa-heart"></i>
                        </div>
                        <h4>Taste & Wellness</h4>
                        <p>Never compromise between flavour and health</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Gallery Section -->
    <section id="gallery" class="gallery-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 text-center">
                    <h2 class="section-title">Gallery</h2>
                    <p class="lead mb-5">Visual journey through our delicious creations</p>
                </div>
            </div>
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-4 col-md-6">
                    <div class="gallery-item">
                        <div class="gallery-placeholder">
                            <img src="assets/img/Badam-Kulfi.webp" height="auto" width="100%" alt="">
                        </div>
                        <div class="gallery-overlay">
                            <img src="assets/img/Kesar-Pista-Kulfi.jpg" height="auto" width="100%" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="gallery-item">
                        <div class="gallery-placeholder">
                            <img src="assets/img/Kesar-Pista-Kulfi.jpg" height="auto" width="100%" alt="">
                        </div>
                        <div class="gallery-overlay">
                            <img src="assets/img/Badam-Kulfi.webp" height="auto" width="100%" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="gallery-item">
                        <div class="gallery-placeholder">
                            <img src="assets/img/Malai-Kulfi.jpg" height="auto" width="100%" alt="">
                        </div>
                        <div class="gallery-overlay">
                            <img src="assets/img/Mango-Kulfi.jpg" height="auto" width="100%" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="gallery-item">
                        <div class="gallery-placeholder">
                            <img src="assets/img/Mango-Kulfi.jpg" height="auto" width="100%" alt="">
                        </div>
                        <div class="gallery-overlay">
                            <img src="assets/img/Malai-Kulfi.jpg" height="auto" width="100%" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="gallery-item">
                        <div class="gallery-placeholder">
                            <img src="assets/img/Alphonso_Mango.png" height="auto" width="100%" alt="">
                        </div>
                        <div class="gallery-overlay">
                            <img src="assets/img/Chocolate_Classic_Ice_Cream.jpg" height="auto" width="100%" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="gallery-item">
                        <div class="gallery-placeholder" style="background: linear-gradient(135deg, #ff6b9d, #ffa07a);">
                            <img src="assets/img/Chocolate_Classic_Ice_Cream.jpg" height="auto" width="100%" alt="">
                        </div>
                        <div class="gallery-overlay">
                            <img src="assets/img/Alphonso_Mango.png" height="auto" width="100%" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="gallery-item">
                        <div class="gallery-placeholder" style="background: linear-gradient(135deg, #4ecdc4, #44a08d);">
                            <img src="assets/img/Chocolate_Fudge_Ice_Cream.jpg" height="auto" width="100%" alt="">
                        </div>
                        <div class="gallery-overlay">
                            <img src="assets/img/Dark_Chocolate.webp" height="auto" width="100%" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="gallery-item">
                        <div class="gallery-placeholder" style="background: linear-gradient(135deg, #dda0dd, #ba55d3);">
                            <img src="assets/img/Fresh_Strawberry.jpg" height="auto" width="100%" alt="">
                        </div>
                        <div class="gallery-overlay">
                            <img src="assets/img/Mango_Cream.jpg" height="auto" width="100%" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="gallery-item">
                        <div class="gallery-placeholder" style="background: linear-gradient(135deg, #ff6b9d, #667eea);">
                            <img src="assets/img/Mango_Cream.jpg" height="auto" width="100%" alt="">
                        </div>
                        <div class="gallery-overlay">
                            <img src="assets/img/Fresh_Strawberry.jpg" height="auto" width="100%" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="gallery-item">
                        <div class="gallery-placeholder" style="background: linear-gradient(135deg, #ff6b9d, #667eea);">
                            <img src="assets/img/Strawberry_Delight.webp" height="auto" width="100%" alt="">
                        </div>
                        <div class="gallery-overlay">
                            <img src="assets/img/Strawberry_Delight.webp" height="auto" width="100%" alt="">
                        </div>
                    </div>
                </div>
                <!--  -->
                <div class="col-lg-4 col-md-6">
                    <div class="gallery-item">
                        <div class="gallery-placeholder" style="background: linear-gradient(135deg, #f3e5ab, #ffd700);">
                            <img src="assets/img/g-2.jpeg" height="auto" width="100%" alt="">
                        </div>
                        <div class="gallery-overlay">
                            <img src="assets/img/g-3.jpeg" height="auto" width="100%" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="gallery-item">
                        <div class="gallery-placeholder" style="background: linear-gradient(135deg, #dda0dd, #ba55d3);">
                            <img src="assets/img/g-3.jpeg" height="auto" width="100%" alt="">
                        </div>
                        <div class="gallery-overlay">
                            <img src="assets/img/g-2.jpeg" height="auto" width="100%" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="gallery-item">
                        <div class="gallery-placeholder" style="background: linear-gradient(135deg, #ff6b9d, #667eea);">
                            <img src="assets/img/g-4.jpeg" height="auto" width="100%" alt="">
                        </div>
                        <div class="gallery-overlay">
                            <img src="assets/img/g-5.jpeg" height="auto" width="100%" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="gallery-item">
                        <div class="gallery-placeholder" style="background: linear-gradient(135deg, #ff6b9d, #667eea);">
                            <img src="assets/img/g-5.jpeg" height="auto" width="100%" alt="">
                        </div>
                        <div class="gallery-overlay">
                            <img src="assets/img/g-4.jpeg" height="auto" width="100%" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="gallery-item">
                        <div class="gallery-placeholder" style="background: linear-gradient(135deg, #ff6b9d, #667eea);">
                            <img src="assets/img/g-6.jpeg" height="auto" width="100%" alt="">
                        </div>
                        <div class="gallery-overlay">
                            <img src="assets/img/g-8.jpeg" height="auto" width="100%" alt="">
                        </div>
                    </div>
                </div>
                <!--  -->
                <div class="col-lg-4 col-md-6">
                    <div class="gallery-item">
                        <div class="gallery-placeholder" style="background: linear-gradient(135deg, #ff6b9d, #667eea);">
                            <img src="assets/img/g-9.jpeg" height="auto" width="100%" alt="">
                        </div>
                        <div class="gallery-overlay">
                            <img src="assets/img/g-10.jpeg" height="auto" width="100%" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="gallery-item">
                        <div class="gallery-placeholder" style="background: linear-gradient(135deg, #ff6b9d, #667eea);">
                            <img src="assets/img/g-10.jpeg" height="auto" width="100%" alt="">
                        </div>
                        <div class="gallery-overlay">
                            <img src="assets/img/g-9.jpeg" height="auto" width="100%" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="gallery-item">
                        <div class="gallery-placeholder" style="background: linear-gradient(135deg, #ff6b9d, #667eea);">
                            <img src="assets/img/g-11.jpeg" height="auto" width="100%" alt="">
                        </div>
                        <div class="gallery-overlay">
                            <img src="assets/img/g-9.jpeg" height="auto" width="100%" alt="">
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Blog Section -->
    <section id="blog" class="blog-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 text-center">
                    <h2 class="section-title">Latest Blog & News</h2>
                    <p class="lead mb-5">Stay updated with our latest stories and ice cream innovations</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="blog-card">
                        <div class="blog-image">
                            <img src="assets/img/Strawberry_Delight.webp" height="245px" width="100%" alt="">
                        </div>
                        <div class="blog-content">
                            <p class="blog-date"><i class="far fa-calendar"></i> December 15, 2024</p>
                            <h4>The Secret Behind Our Healthy Ice Cream</h4>
                            <p>Discover how we create ice cream that's both delicious and nutritious. Our unique process
                                ensures you get the best of both worlds.</p>
                            <a href="#" class="btn btn-sm"
                                style="background: linear-gradient(135deg, var(--primary-pink), var(--primary-blue)); color: white; border-radius: 20px; padding: 8px 20px;">Read
                                More <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="blog-card">
                        <div class="blog-image" style="background: linear-gradient(135deg, #4ecdc4, #44a08d);">
                            <img src="assets/img/Chocolate_Fudge_Ice_Cream.jpg" height="245px" width="100%" alt="">
                        </div>
                        <div class="blog-content">
                            <p class="blog-date"><i class="far fa-calendar"></i> December 10, 2024</p>
                            <h4>Seasonal Flavours Coming This Winter</h4>
                            <p>Get excited for our new winter collection featuring exotic flavours that will warm your
                                heart while cooling your taste buds.</p>
                            <a href="#" class="btn btn-sm"
                                style="background: linear-gradient(135deg, var(--primary-pink), var(--primary-blue)); color: white; border-radius: 20px; padding: 8px 20px;">Read
                                More <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="blog-card">
                        <div class="blog-image" style="background: linear-gradient(135deg, #ffd700, #ffa500);">
                            <img src="assets/img/Fresh_Strawberry.jpg" height="245px" width="100%" alt="">
                        </div>
                        <div class="blog-content">
                            <p class="blog-date"><i class="far fa-calendar"></i> December 5, 2024</p>
                            <h4>Featured in Vikadan Magazine</h4>
                            <p>We're proud to be recognized by Vikadan for our commitment to quality and innovation in
                                the ice cream industry.</p>
                            <a href="#" class="btn btn-sm"
                                style="background: linear-gradient(135deg, var(--primary-pink), var(--primary-blue)); color: white; border-radius: 20px; padding: 8px 20px;">Read
                                More <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="contact-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 text-center">
                    <h2 class="section-title">Contact Us</h2>
                    <p class="lead mb-5">Get in touch with us for orders, queries, or partnerships</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="contact-info">
                        <h3 class="mb-4">Get In Touch</h3>
                        <div class="contact-item">
                            <i class="fas fa-map-marker-alt"></i>
                            <div>
                                <strong>Address</strong>
                                <p>No. 500/2A. Muniyappan kovil st.<br>Vellore Road, Singanallur<br>Coimbatore, Tamil
                                    Nadu - 641005<br>India</p>
                            </div>
                        </div>
                        <div class="contact-item">
                            <i class="fas fa-phone"></i>
                            <div>
                                <strong>Phone</strong>
                                <p>7200672341<br>9751031652</p>
                            </div>
                        </div>
                        <div class="contact-item">
                            <i class="fas fa-envelope"></i>
                            <div>
                                <strong>Email</strong>
                                <p>info@jskagency.com<br>sales@jskagency.com</p>
                            </div>
                        </div>
                        <div class="contact-item">
                            <i class="fas fa-clock"></i>
                            <div>
                                <strong>Business Hours</strong>
                                <p>Monday - Saturday: 9:00 AM - 6:00 PM<br>Sunday: Closed</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="contact-form">
                        <h3 class="mb-4">Send Us a Message</h3>
                        <form id="whatsappForm">
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="text" id="name" class="form-control" placeholder="Your Name *"
                                        required>
                                </div>
                                <div class="col-md-6">
                                    <input type="email" id="email" class="form-control" placeholder="Your Email *"
                                        required>
                                </div>
                                <div class="col-md-6">
                                    <input type="tel" id="phone" class="form-control" placeholder="Phone Number *"
                                        required>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" id="subject" class="form-control" placeholder="Subject *"
                                        required>
                                </div>
                                <div class="col-md-12">
                                    <textarea id="message" class="form-control" rows="5" placeholder="Your Message *"
                                        required></textarea>
                                </div>
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-enquiry btn-lg w-100">
                                        <i class="fas fa-paper-plane"></i> Send Message
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="py-3">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d15666.49568479523!2d77.02216709826733!3d10.9917331908913!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sNo.%20500%2F2A.%20Muniyappan%20kovil%20st.%20Vellore%20Road%2C%20Singanallur%20Coimbatore%2C%20Tamil%20Nadu%20-%20641005%20India!5e0!3m2!1sen!2sin!4v1767076134477!5m2!1sen!2sin"
                    width="100%" height="250" style="border:0; border-radius: 30px;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

        </div>
    </section>

    <!-- Newsletter Section -->
    <section class="newsletter-section"
        style="background: linear-gradient(135deg, var(--primary-pink), var(--primary-blue)); padding: 60px 0; color: white;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <h2 class="mb-3"><i class="fas fa-envelope-open-text"></i> Subscribe to Our Newsletter</h2>
                    <p class="lead">Get the latest updates on new flavours, special offers, and ice cream news directly
                        in your inbox!</p>
                </div>
                <div class="col-lg-6">
                    <form class="newsletter-form">
                        <div class="input-group" style="box-shadow: 0 5px 20px rgba(0,0,0,0.2);">
                            <input type="email" class="form-control" placeholder="Enter your email address"
                                style="padding: 15px; border: none; font-size: 16px;">
                            <button class="btn" type="submit"
                                style="background: white; color: var(--primary-pink); font-weight: 600; padding: 15px 30px; border: none;">
                                Subscribe <i class="fas fa-arrow-right"></i>
                            </button>
                        </div>
                    </form>
                    <p class="mt-3" style="font-size: 14px; opacity: 0.9;"><i class="fas fa-lock"></i> We respect your
                        privacy. Unsubscribe anytime.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- footer -->
    <?php include('footer.php') ?>