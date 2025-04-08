<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta
      name="description"
      content="{$page_description|default:'Opis domyślny'}"
    />
    <title>{$page_title|default:"Kalkulator kredytowy"}</title>
    <link rel="stylesheet" href="{$conf->app_url}/assets/css/main.css" />
  </head>

  <body class="is-preload">
    <div id="page-wrapper">
      <!-- Header -->
      <div id="header">
        <!-- Nav -->
        <nav id="nav">
          <ul>
            <li class="current">
              <a href="#">{$page_title|default:"Kalkulator kredytowy"}</a>
            </li>
            <li>
              <a href="#">Inna strona</a>
            </li>
          </ul>
        </nav>
      </div>

      <!-- Calculator content -->
      <section class="wrapper style1">
        <div class="container">
          {block name=content} Kalkulator kredytowy ... {/block}
        </div>
      </section>

      <div id="footer">
        <div class="container">
          {block name=footer} Kalkulator stworzony przez ... {/block}
        </div>
      </div>
    </div>

    <!-- Scripts -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/jquery.dropotron.min.js"></script>
    <script src="assets/js/browser.min.js"></script>
    <script src="assets/js/breakpoints.min.js"></script>
    <script src="assets/js/util.js"></script>
    <script src="assets/js/main.js"></script>
  </body>
</html>
