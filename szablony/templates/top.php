<!DOCTYPE html>
<html>
  <head>
    <title><?php 
    out($page_title); 
    if (empty($page_title)) {  ?> 
    Kalkulator kredytowy 
    <?php } ?></title>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, user-scalable=no"
    />
    <link rel="stylesheet" href="<?php print(_APP_ROOT); ?>/assets/css/main.css" />

  </head>

  <body class="is-preload">
    <div id="page-wrapper">
      <!-- Header -->
      <div id="header">
        <!-- Nav -->
        <nav id="nav">
          <ul>
            <li class="current">
              <a href="index.html">
                <?php 
                out($page_title);
                if (empty($page_title)) { ?>
                Kalkulator kredytowy
                <?php }
                ?>
              </a>
            </li>
            <li><a href="no-sidebar.html">Coś</a></li>
          </ul>
        </nav>
      </div>

      <!-- Gigantic Heading -->
      <section class="wrapper style2">
        <div class="container">
          <header class="major">
            <h2><?php 
                out($page_title);
                if (empty($page_title)) { ?>
                Kalkulator kredytowy
                <?php }
                ?></h2>
            <p>
                <?php out($page_description); if (!isset($page_description)) {  ?>Oblicz ile wynosi twoja rata kredytowa<?php } ?></p>
          </header>
        </div>
      </section>

      <section class="wrapper style1">