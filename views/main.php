<html>
<head>
    <title>Shareboard</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<?php require $view; ?>


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

<!-- Begin page content -->
<main role="main" class="flex-shrink-0">
  <div class="container">
    <h1 class="mt-5"><?php require $view; ?></h1>
    <!--
    <p class="lead">Pin a footer to the bottom of the viewport in desktop browsers with this custom HTML and CSS. A fixed navbar has been added with <code>padding-top: 60px;</code> on the <code>main &gt; .container</code>.</p>
    <p>Back to <a href="/docs/4.4/examples/sticky-footer/">the default sticky footer</a> minus the navbar.</p>
    -->


  </div>
</main>




</body>
</html>