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
        style="background: url('./assets/img/Badam-Kulfi.webp') center/cover no-repeat;">

        <!-- Dark overlay -->
        <div class="position-absolute top-0 start-0 w-100 h-100" style="background: rgba(0,0,0,0.7);"></div>

        <div class="container position-relative py-5">
            <h2 class="mb-3">Contact Us</h2>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item">
                        <a href="#" class="text-white text-decoration-none">Home</a>
                    </li>
                    <li class="breadcrumb-item active text-light" aria-current="page">
                        Contact Us
                    </li>
                </ol>
            </nav>
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

    <!-- footer -->
    <?php include('footer.php') ?>