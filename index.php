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

            <div class="lg:panel sm:col-span-1 md:col-span-3 lg:col-span-1 min-h-0 h-auto"></div>
            <div class="panel bordered md:col-span-3 bg-opacity-0 h-auto">
                <section class="grid place-items-center h-auto min-h-0" id="welcome">
                    
                    <div class="grid place-items-center p-0 px-5">
                        <h1>Welcome to my website!</h1>
                        <p>
                            My name is Joseph "Seph" Bousfield - welcome to my corner of the internet! I am a hobbyist programmer and aspiring software developer; music fan, guitarist, and composer; sometimes photographer; avid video-gamer and game design nerd. Check the pages below for all this and more:
                        </p>
                    </div>
                    
                </section>
            </div>
            <div class="lg:panel col-span-1 md:col-span-3 lg:col-span-1 h-auto min-h-0"></div>
            <div class="panel shaded bg-gradient-to-b from-green-500 to-teal-500">
                <section id="Projects">
                    <h3><a href="projects.php">Projects</a> 🗃️</h3>
                    <p>
                        Here you'll find several programming endeavors as seen on GitHub (plus some insight into my private repos), as well as other random things I have deciedd to do. Usually about computers.
                    </p>
                </section>
            </div>
            <div class="panel shaded col-span-1 bg-gradient-to-b from-violet-500 to-pink-500">
                <section id="Blogs">
                    <h3><a href="blogs.php">Blogs</a> 📰</h3>
                    <p>
                        Here be blogs! This page is where I'll document some of the stuff I do; places I visit, music I listen to or make, reviews of games - you get the gist.
                    </p>
                </section>
            </div>
            <div class="panel shaded col-span-1 bg-gradient-to-b from-red-500 to-orange-500">
                <section id="Gallery">
                    <h3><a href="">The Gallery</a> 🎞️</h3>
                    <p>
                        I like to take photos sometimes. This is where you'll find them, sorted by collection.
                    </p>
                </section>
            </div>
            <div class="col-span-1 md:col-span-3 lg:col-span-2">
                <section class="panel bordered shaded grid place-items-center min-h-0 h-auto" id="contact">
                    <h2><u>Where to find me</u> 🪪</h2>
                    <section class="grid place-items-center">
                        <p>
                            <b>Email: </b><a target="_blank" href="mailto:josephbousfield99@gmail.com">josephbousfield99@gmail.com</a>
                        </p>
                        <p>
                            <b>GitHub: </b><a target="_blank" href="https://github.com/JosephB2">JosephB2</a>
                        </p>
                        <p>
                            <b>LinkedIn: </b><a target="_blank" href="https://uk.linkedin.com/in/seph-bousfield-692679300">Joseph "Seph" Bousfield</a>
                        </p>
                    </section>
                    
                </section>
            </div>

        </div>
    </div>
</body>
</html>