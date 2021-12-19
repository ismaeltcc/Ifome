<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Menu .::. iFome</title>
    

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">

  </head>
  <body>
    
<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
  <symbol id="check" viewBox="0 0 16 16">
    <title>Check</title>
    <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
  </symbol>
</svg>

<div class="container py-3">
  <header>
    <div class="d-flex flex-column flex-md-row align-items-center pb-3 mb-4 border-bottom">
      <a href="/" class="d-flex align-items-center text-dark text-decoration-none">
        <img src="images/fome.png" alt="some text" width=50 height=50 class="me-2">
        <span class="fs-4" class="display-5" class="me-3"><em><b>iFome&nbsp</b></em></span>
        <span class="fs-3" fw-400><em>Olá </em><b><em><?php echo htmlspecialchars($_SESSION["username"]); ?></em><em></b> Bem Vindo(a)...</em></span>
      </a>

      <nav class=" mt-2 mt-md-0 ms-md-auto">
      <button class="btn btn-outline-success btn-lg" href="reset-password.php"> <span class="fs-5" class="display-5" class="me-3" ><b>Redefinir Senha</b></span></button>
      
            <button class="btn btn-outline-danger btn-lg" href="logout.php" ><span class="fs-5" class="display-5" class="me-3"><b>Sair Conta</b></span></button>
      <!-- <a class="me-3 py-2 text-dark text-decoration-none" href="#">Features</a>
        <a class="me-3 py-2 text-dark text-decoration-none" href="#">Enterprise</a>
        <a class="me-3 py-2 text-dark text-decoration-none" href="#">Support</a>
        <a class="py-2 text-dark text-decoration-none" href="#">Pricing</a> -->
      </nav>
    </div>

  <!--  <div class="pricing-header p-3 pb-md-4 mx-auto text-center">
    
        <p>
            <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>
            <a href="logout.php" class="btn btn-danger ml-3">Sign Out of Your Account</a>
        </p>
    </div> -->
  </header>

  <main>

 
    <div class="row text-center">

    
     <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal"><em>Pizzas<em></h4>
          </div>
          
          <div class="card-body">
          <div class="row">
          <div class="col-sm">
            <h2 class="card-title pricing-card-title">R$3,50<small class="text-muted fw-light">/Mini</small></h2>
            <img  class="rounded-3" src="images/Pizza.jpeg" alt="some text" width=100 height=100 class="me-2">
            <ul  class="list-unstyled mt-3 mb-4">

            <li> <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"><b>&nbspFrango Catupiri</b></li>
              <li><input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"><b>&nbsp4 Queijos</b></li>
              <li><input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"><b>&nbspCalabresa</b></li>
              <li><input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"><b>&nbspA Moda da Casa</b></li>
            </ul>
          </div>
          <div class="col-sm">
            <h2 class="card-title pricing-card-title">R$15,00<small class="text-muted fw-light">/P</small></h2>
            <img class="rounded-3" src="images/Pizza.jpeg" alt="some text" width=100 height=100 class="me-2">
           
            <ul class="list-unstyled mt-3 mb-4 ">
            <li><input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"><b>&nbspFrango Catupiri</b></li>
              <li><input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"><b>&nbsp4 Queijos</b></li>
              <li><input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"><b>&nbspCalabresa</b></li>
              <li><input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"><b>&nbspA Moda da Casa</b></li>
            </ul>
          </div>
          <div class="col-sm">
            <h2 class="card-title pricing-card-title">R$22,00<small class="text-muted fw-light">/M</small></h2>
            <img class="rounded-3" src="images/Pizza.jpeg" alt="some text" width=100 height=100 class="me-2">
            <ul class="list-unstyled mt-3 mb-4">
            <li><input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"><b>&nbspFrango Catupiri</b></li>
              <li><input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"><b>&nbsp4 Queijos</b></li>
              <li><input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"><b>&nbspCalabresa</b></li>
              <li><input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"><b>&nbspA Moda da Casa</b></li>
            </ul>
          </div>
          <div class="col-sm">
            <h2 class="card-title pricing-card-title">R$30,00<small class="text-muted fw-light">/G</small></h2>
            <img class="rounded-3" src="images/Pizza.jpeg" alt="some text" width=100 height=100 class="me-2">
            <ul class="list-unstyled mt-3 mb-4">
            <li><input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"><b>&nbspFrango Catupiri</b></li>
              <li><input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"><b>&nbsp4 Queijos</b></li>
              <li><input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"><b>&nbspCalabresa</b></li>
              <li><input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"><b>&nbspA Moda da Casa</b></li>
            </ul>
          </div>
            <div class="col-sm">
            <h2 class="card-title pricing-card-title">R$40,00<small class="text-muted fw-light">/GG</small></h2>
            <img class="rounded-3" src="images/Pizza.jpeg" alt="some text" width=100 height=100 class="me-2">
            <ul class="list-unstyled mt-3 mb-4">
            <li><input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"><b>&nbspFrango Catupiri</b></li>
              <li><input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"><b>&nbsp4 Queijos</b></li>
              <li><input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"><b>&nbspCalabresa</b></li>
              <li><input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"><b>&nbspA Moda da Casa</b></li>
            </ul>
            </div>
          </div>
            <button type="button" class="w-100 btn btn-lg btn-outline-primary">Comprar</button>
          </div>
        </div>
        </div>
        </div>
        
        <div class="row text-center">

    
<div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal"><em>Hambúrgueres</em></h4>
          
          </div>
          <div class="card-body">
          <div class="row">
          <div class="col-sm">
            <h2 class="card-title pricing-card-title">R$3,50<small class="text-muted fw-light">/Mini</small></h2>
            
            <img class="rounded-3" src="images/Hambúrgueres.jpeg" alt="some text" width=100 height=100 class="me-2">
            <ul class="list-unstyled mt-3 mb-4">
              <li><input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"><b>&nbspMisto</b></li>
              <li><input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"><b>&nbspFrango</b></li>
              <li><input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"><b>&nbspPorco</b></li>
              <li><input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"><b>&nbspPicanha</b></li>
            </ul>
            </div>
            
            <div class="col-sm">
            <h2 class="card-title pricing-card-title">R$15,00<small class="text-muted fw-light">/P</small></h2>
            <img class="rounded-3" src="images/Hambúrgueres.jpeg" alt="some text" width=100 height=100 class="me-2">
            <ul class="list-unstyled mt-3 mb-4">
              <li><input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"><b>&nbspMisto</b></li>
              <li><input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"><b>&nbspFrango</b></li>
              <li><input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"><b>&nbspPorco</b></li>
              <li><input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"><b>&nbspPicanha</b></li>
            </ul>
            </div>
            <div class="col-sm">
            <h2 class="card-title pricing-card-title">R$22,00<small class="text-muted fw-light">/M</small></h2>
            <img class="rounded-3" src="images/Hambúrgueres.jpeg" alt="some text" width=100 height=100 class="me-2">
            <ul class="list-unstyled mt-3 mb-4">
              <li><input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"><b>&nbspMisto</b></li>
              <li><input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"><b>&nbspFrango</b></li>
              <li><input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"><b>&nbspPorco</b></li>
              <li><input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"><b>&nbspPicanha</b></li>
            </ul>
            </div>
            <div class="col-sm">
            <h2 class="card-title pricing-card-title">R$30,00<small class="text-muted fw-light">/G</small></h2>
            <img class="rounded-3" src="images/Hambúrgueres.jpeg" alt="some text" width=100 height=100 class="me-2">
            <ul class="list-unstyled mt-3 mb-4">
              <li><input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"><b>&nbspMisto</b></li>
              <li><input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"><b>&nbspFrango</b></li>
              <li><input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"><b>&nbspPorco</b></li>
              <li><input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"><b>&nbspPicanha</b></li>
            </ul>
            </div>
            <div class="col-sm">
            <h2 class="card-title pricing-card-title">R$40,00<small class="text-muted fw-light">/GG</small></h2>
            <img class="rounded-3" src="images/Hambúrgueres.jpeg" alt="some text" width=100 height=100 class="me-2">
            <ul class="list-unstyled mt-3 mb-4">
              <li><input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"><b>&nbspMisto</b></li>
              <li><input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"><b>&nbspFrango</b></li>
              <li><input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"><b>&nbspPorco</b></li>
              <li><input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"><b>&nbspPicanha</b></li>
            </ul>
            </div>
            </div>
            <button type="button" class="w-100 btn btn-lg btn-outline-primary">Comprar</button>
          </div>
        </div>
        </div>
        </div>

        <div class="row text-center">

    
<div class="col">
      
        <div class="card mb-4 rounded-3 shadow-sm">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal">Pasteis</h4>
          </div>
          <div class="card-body">
          <div class="row">
          <div class="col-sm">
          <h2 class="card-title pricing-card-title">R$3,50<small class="text-muted fw-light">/Mini</small></h2>
            <img class="rounded-3" src="images/Pasteis.jpeg" alt="some text" width=100 height=100 class="me-2">
            <ul class="list-unstyled mt-3 mb-4">
              <li><input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"><b>&nbspMisto</b></li>
              <li><input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"><b>&nbspFrango</b></li>
              <li><input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"><b>&nbspBeicon</b></li>
              <li><input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"><b>&nbspPicanha</b></li>
            </ul>
          </div>
          <div class="col-sm">
          <h2 class="card-title pricing-card-title">R$15,00<small class="text-muted fw-light">/P</small></h2>
            <img class="rounded-3" src="images/Pasteis.jpeg" alt="some text" width=100 height=100 class="me-2">
            <ul class="list-unstyled mt-3 mb-4">
              <li><input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"><b>&nbspMisto</b></li>
              <li><input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"><b>&nbspFrango</b></li>
              <li><input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"><b>&nbspBeicon</b></li>
              <li><input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"><b>&nbspPicanha</b></li>
            </ul>
          </div>
          <div class="col-sm">
          <h2 class="card-title pricing-card-title">R$22,00<small class="text-muted fw-light">/M</small></h2>
            <img class="rounded-3" src="images/Pasteis.jpeg" alt="some text" width=100 height=100 class="me-2">
            <ul class="list-unstyled mt-3 mb-4">
              <li><input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"><b>&nbspMisto</b></li>
              <li><input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"><b>&nbspFrango</b></li>
              <li><input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"><b>&nbspBeicon</b></li>
              <li><input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"><b>&nbspPicanha</b></li>
            </ul>
          </div>
          <div class="col-sm">
          <h2 class="card-title pricing-card-title">R$30,00<small class="text-muted fw-light">/G</small></h2>
            <img class="rounded-3" src="images/Pasteis.jpeg" alt="some text" width=100 height=100 class="me-2">
            <ul class="list-unstyled mt-3 mb-4">
              <li><input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"><b>&nbspMisto</b></li>
              <li><input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"><b>&nbspFrango</b></li>
              <li><input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"><b>&nbspBeicon</b></li>
              <li><input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"><b>&nbspPicanha</b></li>
            </ul>
          </div>
          <div class="col-sm">
          <h2 class="card-title pricing-card-title">R$40,00<small class="text-muted fw-light">/GG</small></h2>
            <img class="rounded-3" src="images/Pasteis.jpeg" alt="some text" width=100 height=100 class="me-2">
            <ul class="list-unstyled mt-3 mb-4">
              <li><input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"><b>&nbspMisto</b></li>
              <li><input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"><b>&nbspFrango</b></li>
              <li><input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"><b>&nbspBeicon</b></li>
              <li><input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"><b>&nbspPicanha</b></li>
            </ul>
          </div>
          </div>
            <button type="button" class="w-100 btn btn-lg btn-outline-primary">Comprar</button>
          </div>
        </div>
      </div>
    </div>
    </div>
    </div>


    <!--<h2 class="display-6 text-center mb-4">Compare plans</h2>

    <div class="table-responsive">
      <table class="table text-center">
        <thead>
          <tr>
            <th style="width: 34%;"></th>
            <th style="width: 22%;">Free</th>
            <th style="width: 22%;">Pro</th>
            <th style="width: 22%;">Enterprise</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row" class="text-start">Public</th>
            <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
            <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
            <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
          </tr>
          <tr>
            <th scope="row" class="text-start">Private</th>
            <td></td>
            <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
            <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
          </tr>
        </tbody>

        <tbody>
          <tr>
            <th scope="row" class="text-start">Permissions</th>
            <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
            <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
            <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
          </tr>
          <tr>
            <th scope="row" class="text-start">Sharing</th>
            <td></td>
            <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
            <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
          </tr>
          <tr>
            <th scope="row" class="text-start">Unlimited members</th>
            <td></td>
            <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
            <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
          </tr>
          <tr>
            <th scope="row" class="text-start">Extra security</th>
            <td></td>
            <td></td>
            <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
          </tr>
        </tbody>
      </table>
    </div> -->
  </main>
  <div class="p-2">
  <footer class="pt-4 my-md-5 pt-md-5 border-top p-2">
    <div class="row">
      <div class="col-12 col-md">
      <img src="images/fome.png" alt="some text" width=50 height=50 class="me-2">
      <span class="fs-4" class="display-5" class="me-3"><em><b>iFome&nbsp</b></em></span>
        <small class="d-block mb-3 text-muted"><b>&copy; 2017–2021</b></small>
      
        <div class="row">
        <h5>Contatos</h5>
        <ul class="list-unstyled text-small">
          <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Whatsapp</a></li>
          <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Instagram</a></li>
          <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Facebook</a></li>
          <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Telegram</a></li>
          <!-- <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Another one</a></li>
          <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Last time</a></li>-->
        </ul>
      </div>
      </div>
      
     <!-- <div class="col-6 col-md">
        <h5>Resources</h5>
        <ul class="list-unstyled text-small">
          <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Resource</a></li>
          <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Resource name</a></li>
          <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Another resource</a></li>
          <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Final resource</a></li>
        </ul>
      </div>
      <div class="col-6 col-md">
        <h5>About</h5>
        <ul class="list-unstyled text-small">
          <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Team</a></li>
          <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Locations</a></li>
          <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Privacy</a></li>
          <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Terms</a></li>
        </ul>
      </div> -->
 
  </footer>
</div>


    
  </body>
</html>
