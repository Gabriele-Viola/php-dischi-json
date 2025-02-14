<?php
require_once "./server.php";
?>
<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
        crossorigin="anonymous" />
</head>

<body>
    <div class="container">

        <h1>My albums</h1>
        <div class="row row-cols-3">

            <?php
            foreach ($discs as $disc) {
            ?>
                <div class="col">

                    <div class="card">
                        <div class="card-img">
                            <img src=<?php echo $disc['url']; ?> alt="">
                        </div>
                        <div class="card-body">
                            <h4><?php echo $disc['titolo']; ?></h4>
                            <div><?php echo $disc['autore']; ?></div>
                            <div><?php echo $disc['anno']; ?></div>
                        </div>
                    </div>
                </div>


            <?php
            }

            ?>
        </div>
    </div>
</body>

</html>