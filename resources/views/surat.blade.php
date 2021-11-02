<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FTI-MAIL</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<style>
.b-example-divider {
  height: 33px;
}
.bg-header {
  background-color: lightgreen;
}
p {
  font-size: 20px;
  margin: 0px 0px 0px 0px;
  text-transform: uppercase;
}
</style>
<body style="background-color:#e7f1ff">
<nav class="navbar navbar-expand-lg navbar-light bg-light" aria-label="Ninth navbar example">
    <div class="container-xl">
      <a class="navbar-brand" href="#"><img class="img-fluid" src="https://i.ibb.co/kmQgNHZ/ff1d228afcc78e7657fabc6eb411c8bb.png" width="155" height="24"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample07XL" aria-controls="navbarsExample07XL" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExample07XL">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="/dashboard">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/surat">Surat</a>
          </li>
        </ul>
        <!--<form>
          <input class="form-control" type="text" placeholder="Search" aria-label="Search">
        </form>-->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="/logout"><i class="bi bi-box-arrow-right"></i>Logout</a>
            </li>
        </ul>
      </div>
    </div>
  </nav>
<main>
<div class="b-example-divider"></div>
  <div class="container-xl">
  <header class="d-flex justify-content-center py-3 bg-light">
      <ul class="nav nav-pills">
        <li><b><p style="color:#0d6efd">{{auth()->user()->name}} / {{auth()->user()->levels}} INI SURAT</p></b></li>
      </ul>
    </header>
  </div>
</main>
</body>
</html>