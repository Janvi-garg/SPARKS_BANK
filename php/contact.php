<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>TSF BANK</title>
    <link rel="stylesheet" href="css/style1.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
    </head>

<body>

    <!-- Nav bar -->
    <nav class="navbar py-2 navbar-expand-lg navbar-light" style="background-color: #4d8076;">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php"><strong>SPARKS BANK</strong> <img src="logos/tsf.png" width=40px heigth=40px/></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-8 mb-lg-0">
                    <li class="nav-item py-3">
                        <a class="nav-link" aria-current="page" href="index.php"><strong>Home</strong></a>
                    </li>
                    <li class="nav-item dropdown py-3">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <strong>Actions</strong>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item py-3" href="money.php"><strong>Money Transfer</strong></a></li>
                            <li><a class="dropdown-item py-3" href="history.php"><strong>Transaction History</strong></a></li>
                        </ul>
                    </li>
                    <li class="nav-item py-3">
                        <a class="nav-link" href="https://www.thesparksfoundationsingapore.org/" target="_blank"><strong>About</strong></a>
                    </li>
                    <li class="nav-item py-3">
                        <a class="nav-link active" href="contact.php"><strong>Contact Us</strong></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <class class="welcome">
        <h2 align=center>
            <br>
            <img src="logos/friend.webp" alt="Bank" width="75" height="75" style="font-weight: bold;">  <strong>We are here to help you !</strong> <img src="logos/trust.webp" alt="Bank" width="75" height="75">
        </h2>
        <br><br>
    </class>
 
    <!-- Form -->
    <div class="container my-1">
        <h3>Contact Us</h3>
   
        <form>
            <div class="form">
              <label for="exampleInputEmail1" class="form-label">Email address</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Your message</label>
              <br>
              <!-- <input type="password" class="form-control" id="exampleInputPassword1"> -->
              <textarea name="" id="" cols="70" rows="10"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>

    <!-- footer -->

    <div class="foot">
        <footer class="bg-light text-center text-lg-start">
            <!-- Copyright -->
              <div class="text-center p-3" style="background-color: #c4fcf0">
                © 2021 Copyright - Made with 🧡 by Janvi Garg :
                <a class="text-dark" href="https://www.thesparksfoundationsingapore.org/" target="_blank"> The Sparks
                    Foundation <img src="logos/tsf.png" width=25px heigth=25px/></a>
            </div>
            <!-- Copyright -->
        </footer>
    </div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW"
        crossorigin="anonymous"></script>

</body>

</html>