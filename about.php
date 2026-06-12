<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width-device-width, initial-scale=0.1">
    <title>About me</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Google+Sans+Code:ital,wght,MONO@0,300..800,1;1,300..800,1&family=Roboto+Mono:ital,wght@0,100..700;1,100..700&display=swap');
        
        body{
        font-family: "Google Sans Code", monospace;
        font-optical-sizing: auto;
        font-style: normal;
        }

        .hero {
                padding: 3rem;
                border-radius: 1rem;
            }
            .profile-img {
                width: 190px;
                height: 190px;
                object-fit: cover;
                border-radius: 50%;
                border: 3px solid white;
            }
            .icon-box {
                font-size: 2rem;
                margin-bottom: 1rem;
            }
            .project-img {
                height: 180px;
                object-fit: cover;
            }
    </style>

</head>

<body class="d-flex flex-column min-vh-100" data-bs-theme="dark">
    <main class="flex-grow-1">
        <nav class="navbar navbar-expand-lg bg-primary">
            <div class="container bg-primary.bg-gradient">
                <a class="navbar-brand" href="index.html">My Portfolio</a>
                <div class="navbar-nav ms-auto">
                <a class="nav-link " href="index.html">Home</a>
                <a class="nav-link active" href="about.html">About</a>
                <a class="nav-link " href="projects.html">Projects</a>
                <a class="nav-link " href="contact.html">Contact</a>
                </div>
            </div>
        </nav>

        <div class="p-5 g-5">

            <div class="hero mb-5">
                <h1 class="display-5 fw-bold">PHP test</h1>
                <p class="lead mb-0">blha blah blah blah</p>
            </div>

            <div class="row align-items-center px-3 py-5 mb-5 border border-2 rounded shadow">
                <div class="col-lg-8">
                    <?php
                        $name = "Oliver";
                        echo "<h2>Current date is " . date('d/m/y') . "</h2><br>";
                        echo "my name is " . $name;
                    ?>
                </div>
            </div>

        </div>   



    </main>

    <footer class="py-4 mt-5 text-center">
    <div class="container">
        <p class="mb-1">Created as a Bootstrap portfolio practice website.</p>
        <p class="small mb-0">Built with HTML, Bootstrap and Font Awesome.</p>
    </div>
    </footer>

</body>

</html>