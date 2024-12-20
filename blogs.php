<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blogs!!</title>
    <?php include "inc/style.php" ?>
</head>
<body>
    <div class="page">
        <div class="flex flex-col h-auto w-auto gap-2 lg:h-screen p-4">

            <div class="grid grid-cols-1 md:grid-cols-2 gap-2 lg:h-screen">

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 w-auto h-auto md:col-span-2 lg:col-span-1 gap-2">
                    
                    <div class="lg:col-span-2 flex flex-col gap-2">
                        <div class="panel bordered shaded" id="nav">
                            <h1>Blogs.</h1>
                            <p>
                                <a href="index.php">🠜 Back to homepage</a>
                            </p>
                        </div>
                        <div class="panel bordered shaded flex-1" id="about"></div>
                    </div>
                    
                    <div class="panel bordered shaded lg:col-span-3" id="list"></div>

                </div>

                <div class="panel bordered shaded flex-1 md:col-span-2 lg:col-span-1" id="blog">
                    <h2>Blog title</h2>
                    <p>
                        <?php include "inc/lipsum.php" ?>
                    </p>
                </div>

            </div>

        </div>
    </div>
</body>
</html>