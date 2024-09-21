<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Icesteroid Studio - Automation Redefined</title>

    <!-- Google Fonts (Poppins for modern look) -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            background: radial-gradient(circle at top left, #000428, #004e92);
            overflow-x: hidden;
        }

        .hero-section {
            height: 100vh;
            text-align: center;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            position: relative;
        }

        .hero-section img {
            width: 200px;
            margin-bottom: 20px;
            /* background: linear-gradient(to right, #a1c4fd, #c2e9fb); */
        }

        .hero-section h1 {
            font-size: 4rem;
            font-weight: 700;
            color: #ffffff;
            margin-bottom: 20px;
            background: linear-gradient(to right, #a1c4fd, #c2e9fb);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .hero-section p {
            font-size: 1.25rem;
            margin-bottom: 30px;
            color: #c0c9d6;
        }

        .btn-primary {
            background-color: #06b6d4;
            border: none;
            padding: 12px 40px;
            font-size: 1.1rem;
            font-weight: 500;
            border-radius: 50px;
            transition: all 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #0ea5e9;
        }

        /* Fullscreen 3D object area */
        #3d-canvas {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 100vw;
            height: 100vh;
            z-index: 0;
        }

        .form-section {
            background-color:  radial-gradient(circle at top left, #000428, #004e92);
            padding: 100px 20px;
            margin-top: -20px;
            text-align: center;
        }

        .form-section h2 {
            color: #ffffff;
            font-size: 2.5rem;
            font-weight: 600;
            margin-bottom: 40px;
        }

        .footer {
            background-color: #0b1126;
            color: #b5bfcf;
            padding: 30px 0;
            text-align: center;
        }

        .footer p {
            margin: 0;
        }

        .content-section h2 {
            font-size: 2.5rem;
            margin-bottom: 50px;
            font-weight: 600;
        }

        .content-section p {
            font-size: 1.2rem;
            color: #cfd8e6;
        }

        .form-input {
            margin-bottom: 15px;
        }

        input, textarea {
            background-color: #004e92;
            border: 1px solid #ABE6FFFF;
            color: #f1f1f1;
            width: 100%;
            padding: 10px;
            border-radius: 5px;
        }

        input:focus, textarea:focus {
            border-color: #06b6d4;
            outline: none;
        }
    </style>
</head>
<body>

<!-- Hero Section -->
<div class="hero-section">
    <img src="{{ asset('images/Icesteroid Studio Icon.png') }}" alt="Icesteroid Studio Logo">
    <h1>Automation Redefined</h1>
    <p>Unleash the power of sustainable, no-code solutions for your business.</p>
    <a href="#services" class="btn btn-primary">Explore Our Services</a>
</div>

<!-- 3D Asteroid Canvas -->
<div id="3d-canvas"></div>

<!-- Form Section (Service Request/Order Form) -->
<div class="form-section">
    <h2>Submit Your Service Request</h2>

    <form action="/api/service-requests" method="POST">
        @csrf
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 form-input">
                    <input type="text" name="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-input">
                    <input type="email" name="email" placeholder="Your Email" required>
                </div>
                <div class="col-md-12 form-input">
                    <textarea name="description" rows="5" placeholder="Describe your request" required></textarea>
                </div>
                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary">Submit Request</button>
                </div>
            </div>
        </div>
    </form>
</div>

@if(session('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
@endif

<!-- Footer Section -->
<div class="footer">
    <p>&copy; {{ date('Y') }} Icesteroid Studio. All Rights Reserved.</p>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

<!-- Include Three.js -->
<script src="https://cdn.jsdelivr.net/npm/three@0.139.2/build/three.min.js"></script>
<script src="{{ asset('js/three-interaction.js') }}"></script>

</body>
</html>
