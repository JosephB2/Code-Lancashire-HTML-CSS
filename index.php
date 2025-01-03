<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage!!</title>
    <?php include "inc/style.php" ?>
    
</head>
<body>
    <!-- ?php include 'inc/header.php'; ? -->
    <div class="page">
        <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-5 w-auto h-auto lg:h-screen gap-2 p-4">

            <div class="lg:panel sm:col-span-1 md:col-span-3 lg:col-span-1 h-auto"></div>
            <div class="panel bordered md:col-span-3 bg-opacity-0 grid place-items-center min-h-0 h-auto">
                <section class="grid place-items-center min-h-0 h-auto" id="welcome">
                    <h1>Welcome to my website!</h1>
                    <p>
                        <?php include "inc/lipsum.php" ?>
                    </p>
                </section>
            </div>
            <div class="lg:panel col-span-1 md:col-span-3 lg:col-span-1 h-auto min-h-0"></div>
            <div class="panel shaded bg-gradient-to-b from-green-500 to-teal-500">
                <section id="Projects">
                    <p>
                        <?php include "inc/lipsum.php" ?>
                    </p>
                </section>
            </div>
            <div class="panel shaded col-span-1 bg-gradient-to-b from-violet-500 to-pink-500">
                <section id="Blogs">
                    <p>
                        <a href="blogs.php">Lorem ipsum</a>
                    </p>
                </section>
            </div>
            <div class="panel shaded col-span-1 bg-gradient-to-b from-red-500 to-orange-500">
                <section id="Gallery">
                    <p>
                        <?php include "inc/lipsum.php" ?>
                    </p>
                </section>
            </div>
            <div class="panel bordered shaded col-span-1 md:col-span-3 lg:col-span-2">
                <section class="grid place-items-center min-h-0 h-auto" id="contact">
                    <h2>Where to find me:</h2>
                    <p>
                        <a target="_blank" href="mailto:josephbousfield99@gmail.com">Email</a>
                    </p>
                    <p>
                        <a target="_blank" href="https://github.com/JosephB2">GitHub</a>
                    </p>
                    <p>
                        <a target="_blank" href="https://uk.linkedin.com/in/seph-bousfield-692679300">LinkedIn</a>
                    </p>
                </section>
            </div>

        </div>
    </div>
</body>
</html>