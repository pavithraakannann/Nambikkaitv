<?php
$current_page = basename($_SERVER['SCRIPT_NAME']);

if ($current_page == '' || $current_page == 'index.php') {
    $current_page = 'index.php';
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" />
    <link rel="shortcut icon" href="assets/img/NAMBIKKAI TV (2).png" />
    <title>Nambikkai</title>
    <link rel="stylesheet" href="assets/style.css">
    <link href="https://fonts.cdnfonts.com/css/termina-test" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Helvetica+Neue:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <style>
        body {
            margin: 0;
            font-family: 'Termina Test', 'Montserrat', 'Helvetica Neue', Arial, sans-serif;
        }

        .termina-test-font-light {
            font-family: 'Termina Test', sans-serif;
            font-weight: 100;
        }

        .termina-test-font-regular {
            font-family: 'Termina Test', sans-serif;
            font-weight: 400;
        }

        .termina-test-font-bold {
            font-family: 'Termina Test', sans-serif;
            font-weight: 700;
        }
    </style>


    <style>
        /* Loader styles */
        #loader {
            display: flex;
            justify-content: center;
            align-items: center;
            position: fixed;
            width: 100%;
            height: 100vh;
            background-color: #fff;
            z-index: 9999;
        }

        /* Hide the page content until loaded */
        body.loaded #loader {
            display: none;
        }

        body.loaded {
            overflow: visible;
        }
    </style>
</head>

<body class="preload">

    <!-- Loader -->
    <div id="loader">
        <img src="assets/img/loader.gif" alt="Loading..." />
    </div>

    <!-- Main Content -->
    <header>
        <nav class="navbar navbar-expand-lg bg-white d-flex">
            <div class="container">
                <div class="justify-content-start">
                    <a class="navbar-brand" href="index.php">
                        <img src="assets/img/NAMBIKKAI TV (2).png" loading="lazy" alt="Nambikkai">
                    </a>
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                    <ul class="navbar-nav red-section regular mt-2">
                        <li class="nav-item <?php echo ($current_page == 'index.php') ? 'active' : ''; ?>">
                            <a class="nav-link" aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item <?php echo ($current_page == 'about.php') ? 'active' : ''; ?>">
                            <a class="nav-link" href="about.php">About Us</a>
                        </li>
                        <li class="nav-item <?php echo ($current_page == 'service.php') ? 'active' : ''; ?>">
                            <a class="nav-link" href="service.php">Services</a>
                        </li>
                        <li class="nav-item <?php echo ($current_page == 'live.php') ? 'active' : ''; ?>">
                            <a class="nav-link" href="live.php">Live</a>
                        </li>
                        <li class="nav-item <?php echo ($current_page == 'faq.php') ? 'active' : ''; ?>">
                            <a class="nav-link" href="faq.php">Faq</a>
                        </li>
                        <li class="nav-item <?php echo ($current_page == 'contact.php') ? 'active' : ''; ?>">
                            <a class="nav-link" href="contact.php">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <script>
        // Remove the loader when the page has fully loaded
        window.addEventListener('load', function() {
            document.body.classList.add('loaded');
        });
    </script>