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

        <h1 class="my-4 ">My albums</h1>
        <div class="add mb-3 ">
            <form action="" method="POST" class="form-control d-flex justify-content-between py-3 shadow">
                <div>
                    <label for="titolo" class="form-label">Titolo</label>
                    <input type="text" id="titolo" name="titolo" class="form-control">
                </div>
                <div>
                    <label for="autore" class="form-label">Autore</label>
                    <input type="text" id="autore" name="autore" class="form-control">
                </div>
                <div>
                    <label for="anno" class="form-label">Anno</label>
                    <input type="number" min="1500" id="anno" name="anno" class="form-control">
                </div>
                <div>
                    <label for="url" class="form-label">URL immagine</label>
                    <input type="text" id="url" name="url" class="form-control">
                </div>
                <div class="d-flex align-items-center">
                    <button type="submit" class="btn btn-primary">Aggiungi album</button>
                </div>
            </form>
        </div>
        <div class="row row-cols-3 gy-4 mb-4">

            <?php
            foreach ($discs as $disc) {
            ?>
                <div class="col">

                    <div class="card h-100 shadow">
                        <div class="card-img object-fit-cover ratio ratio-1x1 overflow-hidden">
                            <img class="w-100 object-fit-cover ratio ratio-1x1" src=<?php echo $disc['url']; ?> alt="">
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