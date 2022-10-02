<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tugas Web Lanjut</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <div class="col-md-3">
            <form>

                <div class=" mb-3">
                    <label for="nama" class="form-label">NAMA</label>
                    <input type="text" class="form-control" id="nama" aria-describedby="nama" value="<?= $nama ?>" readonly>
                </div>
                <div class="mb-3">
                    <label for="npm" class="form-label">NPM</label>
                    <input type="text" class="form-control" id="npm" value="<?= $npm ?>" readonly>
                </div>
                <div class="mb-3">
                    <label for="umur" class="form-label">UMUR</label>
                    <input type="text" class="form-control" id="umur" value="<?= $umur ?>" readonly>
                </div>

            </form>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>

</html>