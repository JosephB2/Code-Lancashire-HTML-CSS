<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage!!</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style type="text/tailwindcss">
        .page {
            @apply bg-black text-orange-50 h-screen w-screen overflow-y-auto;
            @apply bg-[url(https://img.goodfon.com/original/1920x1080/c/82/kosmos-art-pikseli-8bit-planeta-zvezdy-retro-grafika.jpg)];
        }
        .panel {
            @apply rounded-xl min-h-40 col-span-1;
        }
        .shaded {
            @apply shadow-[inset_0_-2px_8px_rgba(0,0,0,0.5)];
        }
        h1, p {
            @apply p-5 [text-shadow:1px_1px_2px_rgba(0,0,0,0.8)];
        }
        a {
            @apply text-cyan-400 [text-shadow:1px_1px_2px_rgba(0,0,0,0.4)] underline;
        }
        .bordered {
            @apply border border-white;
        }
    </style>

</head>
<body>
    <!-- ?php include 'inc/header.php'; ? -->
    <div class="page"> 
        <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-5 w-auto h-auto lg:h-screen gap-2 p-4">

            <div class="panel sm:col-span-1 md:col-span-3 lg:col-span-1 h-auto"></div>
            <div class="panel bordered md:col-span-3 bg-opacity-0 grid place-items-center min-h-0 h-auto">
                <section class="grid place-items-center min-h-0 h-auto" id="welcome">
                    <h1 class="text-4xl lg:text-5xl underline">Welcome to my website!</h1>
                    <p class="text-xl">
                        "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
                    </p>
                </section>
            </div>
            <div class="panel col-span-1 md:col-span-3 lg:col-span-1 h-auto min-h-0"></div>
            <div class="panel shaded bg-gradient-to-b from-green-500 to-teal-500">
                <p class="text-xl">
                    "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
                </p>
            </div>
            <div class="panel shaded col-span-1 bg-gradient-to-b from-violet-500 to-pink-500">
                <p class="text-xl">
                    "<a href="">Lorem ipsum</a> dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
                </p>
            </div>
            <div class="panel shaded col-span-1 bg-gradient-to-b from-red-400 to-orange-500">
                <p class="text-xl">
                    "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
                </p>
            </div>
            <div class="panel bordered shaded col-span-1 md:col-span-3 lg:col-span-2" id="contact">
                <section class="grid place-items-center min-h-0 h-auto" id="contact">
                    <h1 class="text-4xl">Where to find me:</h1>
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