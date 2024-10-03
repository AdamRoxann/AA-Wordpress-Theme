<!DOCTYPE html>
<html lang="en" class="h-100">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo get_bloginfo( 'name' ); ?></title>

    <?php wp_head(); ?>
</head>
<body class="background d-flex flex-column h-100 default-font">

<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container">
    <a class="navbar-brand primary-color text-uppercase fw-light" href="#"><b><?php echo get_bloginfo( 'name' ); ?></b></a>
    <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <?php
            if(is_page(8)){
              wp_nav_menu(
                  array(
                      'theme_location' => 'top-menu',
                      'container' => 'ul',
                      'menu_class' => 'navbar-nav w-100 justify-content-between align-items-center',
                      // 'add_li_class' => 'nav-item'
                  )
              );
            } else {
              wp_nav_menu(
                array(
                    'theme_location' => 'top-menu-other',
                    'container' => 'ul',
                    'menu_class' => 'navbar-nav w-100 justify-content-between align-items-center',
                    // 'add_li_class' => 'nav-item'
                )
            );
            }
        ?>
      <!-- <ul class="navbar-nav">
        
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li>
      </ul> -->
    </div>
  </div>
</nav>
