<?php

$style = "default";
$style = 1;
if($style){
  $args =       array(
      'theme_location'  => 'header_menu',
      'container_class' => 'collapse navbar-collapse container_class',
      'container_id'    => 'navbarSupportedContent container_id',
      //'container' =>  false,
      'container' => 'ul',
      //'menu_class' =>   'collapse navbar-collapse menu_class',
       'menu_class'=>'navbar-nav me-auto mb-2 mb-lg-0',
      'menu_id'              => 'navbarSupportedContent',
     // 'items_wrap'           => '<ul id="%1$s" class="navbar-nav me-auto mb-2 mb-lg-0">%3$s</ul>',
  ) ;

?>
    <nav class="navbar navbar-expand-lg ">
      <div class="container"> <!-- container-fluid == full !-->


         <a class="navbar-brand" href="<?php echo home_url();?>">
          <?php  innova_custom_logo();?>

        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>

        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
           <?php  wp_nav_menu($args );?>
           <!--
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Dropdown
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled">Disabled</a>
            </li>
          </ul> -->
         <!--  <form class="d-flex search-form" role="search" action="<?php echo home_url();?>">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="s">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form> -->
        </div>


      </div>
    </nav>
<?php } else{  ?>
<nav class="navbar navbar-dark bg-dark fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Offcanvas dark navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class=" offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Dark offcanvas</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Dropdown
            </a>
            <ul class="dropdown-menu dropdown-menu-dark">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
        </ul>
        <form class="d-flex mt-3 search-form" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-success" type="submit">Search</button> 
        </form>
      </div>
    </div>
  </div>
</nav>
<?php } ?>