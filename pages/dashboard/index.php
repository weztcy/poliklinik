<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        body {
            margin: 0;
            padding: 0;
        }

        .container {
            padding: 0;
        }

        .title {
            font-size: 1rem;
            /* Responsive font size */
            color: #000;
            margin-bottom: 1.25rem;
            font-weight: bold;
            text-transform: uppercase;
            text-align: center;
            letter-spacing: 0.1rem;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
        }

        .banner-section {
            font-family: 'Sora', sans-serif;
            background-image: url('assets/images/home_pasien.jpg');
            background-position: center;
            background-size: cover;
            font-weight: 800;
            color: black;
            padding: 10% 0;
            /* Responsive padding */
            text-align: center;
            display: flex;
            /* Use flexbox to center content */
            flex-direction: column;
            /* Stack content vertically */
            align-items: center;
            /* Center content horizontally */
            justify-content: center;
            /* Center content vertically */
            height: 100vh;
            /* Set height to 100% of viewport height */
        }

        .floating-container {
            background-color: #F5F5F5;
            border-radius: 10px;
            padding: 1rem;
            box-shadow: 0 20px 10px rgba(0, 0, 0, 0.1);
            margin: -8% auto 0;
            /* Responsive margin */
            max-width: 75%;
            /* Responsive width */
        }

        .floating-container {
            background-color: #F5F5F5;
            /* Light grey background */
            border-radius: 10px;
            /* Rounded corners */
            box-shadow: 0 20px 10px rgba(0, 0, 0, 0.1);
            /* Box-shadow for depth */
            margin: -12% auto 0;
            /* Increased negative top margin for more overlap */
            padding: 2rem 1rem;
            /* Reduced padding for less height */
            text-align: center;
            /* Center text */
            display: flex;
            /* Use flexbox to center items */
            align-items: center;
            /* Center items vertically */
            justify-content: center;
            /* Center items horizontally */
            flex-direction: column;
            /* Stack items vertically */
            max-width: 80%;
            /* Maximum width */
        }

        .floating-word {
            display: flex;
            /* Use flexbox for the inner row */
            justify-content: center;
            /* Center content horizontally */
            align-items: center;
            /* Center content vertically */
            flex-wrap: wrap;
            /* Allow items to wrap on small screens */
            gap: 5rem;
            /* Space between items */
        }

        .floating-word>div {
            flex: 1;
            /* Flex-grow to fill space */
            max-width: 200px;
            /* Maximum width for each column */
            min-width: 150px;
            /* Minimum width for each column */
        }

        .floating-word img {
            max-height: 100px;
            /* Maximum height for images */
            width: auto;
            /* Maintain aspect ratio */
            margin-bottom: 1rem;
            /* Space between image and text */
        }


        .tagline p {
            font-size: 1.5rem;
            /* Responsive font size */
            color: #000;
        }

        .galeri-container {
            width: 100%;
            max-width: 18rem;
            margin: 1rem;
            display: inline-block;
            /* Changed to inline-block for better responsiveness */
        }

        .galeri-img-top {
            max-width: 100%;
            height: auto;
        }

        .info-section {
            padding: 20px;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
        }

        .info-block {
            background-color: #fff;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            overflow: hidden;
            display: flex;
            max-width: 80%;
            margin-bottom: 20px;
        }

        .info-block img {
            width: 50%;
            height: auto;
            object-fit: cover;
        }

        .text-content {
            padding: 20px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .text-content h4 {
            font-size: 1.5rem;
            color: #333;
            margin: 0;
        }

        .text-content p {
            font-size: 1rem;
            color: #666;
            line-height: 1.5;
        }


        @media (max-width: 768px) {
            .title {
                font-size: 1.5rem;
                /* Smaller font size for smaller screens */
            }

            .tagline p {
                font-size: 1.2rem;
                /* Smaller font size for smaller screens */
            }

            .floating-container {
                margin-top: -25%;
                /* Increased negative margin for better overlap */
            }
        }
    </style>
</head>

<body>
    <!-- Section 1: Banner -->
    <section class="banner-section">
        <div class="container text-right my-5 fade-in">
            <h1 style="text-align: center; font-size: 30px;"><b>Kesehatan Anda Prioritas Kami</b></h1>
            <p style="text-align: center; font-size: 20px;">Kami akan memberikan pelayanan terbaik kami hingga anda
                sembuh</p>
        </div>
    </section>

    <!-- Section 2: Floating Container -->
    <section class="floating-container">
        <div class="container mt-3 mb-2">
            <div class="row floating-word">
                <div class="col-md-4 col-lg-3">
                    <div class="text-center mt-3">
                        <img style="max-height: 100px" src="assets/images/icon3.png" alt="Logo">
                        <p class="mt-5">Kami akan memberikan fasilitas terbaik.</p>
                    </div>
                </div>
                <div class="col-md-4 col-lg-3">
                    <div class="text-center mt-3">
                        <img style="max-height: 100px" src="assets/images/icon2.png" alt="Logo">
                        <p class="mt-5">Kami akan memberikan Dokter terbaik.</p>
                    </div>
                </div>
                <div class="col-md-4 col-lg-3">
                    <div class="text-center mt-3 banner3">
                        <img style="max-height: 100px" src="assets/images/icon1.png" alt="Logo">
                        <p class="mt-5">Kami akan memberikan pelayanan terbaik.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="info-section">
        <div class="info-block">
            <img src="assets/images/interior.jpg" alt="Interior">
            <div class="text-content">
                <h4>Interior Nyaman</h4>
                <p>Interior yang selalu bersih dan nyaman bagi Pasien.</p>
            </div>
        </div>
        <div class="info-block">
            <img src="assets/images/team.jpg" alt="Tim Medis">
            <div class="text-content">
                <h4>Tim Medis Ahli</h4>
                <p>Team Dokter dan Perawat yang ahli.</p>
            </div>
        </div>
        <div class="info-block">
            <img src="assets/images/tech.jpg" alt="Teknologi">
            <div class="text-content">
                <h4>Teknologi Canggih</h4>
                <p>Teknologi lengkap dan modern untuk mendukung penyembuhan anda.</p>
            </div>
        </div>
    </section>



</body>

</html>