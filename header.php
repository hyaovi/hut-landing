<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="shortcut icon" type="image/png" href="<?php bloginfo('template_directory');?>/images/favicon.ico" />
    <link rel="shortcut icon" type="image/png" href="<?php bloginfo('template_directory');?>/images/favicon-logo.png" />
    <meta name="theme-color" content="#ffffff" />

    <title>Hut Sharing</title>
    <?php  wp_head(); ?>
  </head>

  <body>
    <nav class="navbar navbar-light bg-transparent">
      <div class="container px-0">
        <div class="row">
          <div class="col-9 col-md-9">
            <a class="navbar-brand" href="/">
              <img
                src="<?php bloginfo('template_directory');?>/images/hut-logo-door.svg"
                width="38"
                height="38"
                class="d-inline-block logo mr-1"
                alt=""
              />
              Hutsharing
            </a>
            <h6 class="logo-description">
              Cервис для автоматизации бизнеса посуточной аренды квартир
            </h6>
          </div>
          <div class="col-3 d-md-none  ">
            <a href="tel:+79872727742"
              ><img src="<?php bloginfo('template_directory');?>/images/phone.svg" class="img-fluid mt-2" alt=""
            /></a>
          </div>
        </div>
      </div>
    </nav>
  

<body <?php body_class() ?>>
