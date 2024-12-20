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
            <div class="panel bordered md:col-span-3 bg-opacity-0 grid place-items-center min-h-0 h-auto" id="welcome">
                <section class="grid place-items-center min-h-0 h-auto">
                    <h1 class="text-4xl lg:text-5xl underline">Welcome to my website!</h1>
                    <p class="text-xl">
                        <?php include "inc/lipsum.php" ?>
                    </p>
                </section>
            </div>
            <div class="lg:panel col-span-1 md:col-span-3 lg:col-span-1 h-auto min-h-0"></div>
            <div class="panel shaded bg-gradient-to-b from-green-500 to-teal-500" id="Projects">
                <p class="text-lg">
                    <?php include "inc/lipsum.php" ?>
                </p>
            </div>
            <div class="panel shaded col-span-1 bg-gradient-to-b from-violet-500 to-pink-500" id="Blogs">
                <p class="text-lg">
                    <a href="blogs.php">Lorem ipsum</a>
                </p>
            </div>
            <div class="panel shaded col-span-1 bg-gradient-to-b from-red-400 to-orange-500" id="Gallery">
                <p class="text-lg">
                    <?php include "inc/lipsum.php" ?>
                </p>
            </div>
            <div class="panel bordered shaded col-span-1 md:col-span-3 lg:col-span-2" id="contact">
                <section class="grid place-items-center min-h-0 h-auto">
                    <h2 class="text-4xl">Where to find me:</h2>
                    <p class="text-xl">
                        <a target="_blank" href="mailto:josephbousfield99@gmail.com">Email</a>
                    </p>
                    <p class="text-xl">
                        <a target="_blank" href="https://github.com/JosephB2">GitHub</a>
                    </p>
                    <p class="text-xl">
                        <a target="_blank" href="https://uk.linkedin.com/in/seph-bousfield-692679300">LinkedIn</a>
                    </p>
                </section>
            </div>

        </div>
    </div>
</body>
</html>