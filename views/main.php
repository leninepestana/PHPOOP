<html>
<head>
    <title>Shareboard</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<header>
  <!-- Fixed navbar -->
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <a class="navbar-brand" href="#">Shareboard</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav mr-auto">
        
        <li class="nav-item">
            <a class="nav-link" href="<?php echo ROOT_URL; ?>">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo ROOT_URL; ?>shares">Shares</a>
        </li>
       
      </ul>

      <ul class="navbar-nav mr-right">
        
        <li class="nav-item">
            <a class="nav-link" href="<?php echo ROOT_URL; ?>">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo ROOT_URL; ?>shares">Shares</a>
        </li>
       
      </ul>
      
      
    </div>
  </nav>
</header>
<h1>Text example</h1>
<!-- Begin page content -->
<main role="main" class="flex-shrink-0">
  <div class="container">
    <h1><?php require $view; ?></h1>
  </div>
</main>




</body>
</html>