<!doctype html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>WP Experts</title>
    <style type="text/tailwindcss">
      @font-face {
        font-family: 'Metropolis';
        src: url('../fonts/Metropolis-Regular.ttf') format('truetype');
        font-weight: 400;
        font-style: normal;
        font-display: swap;
      }
      @font-face {
        font-family: 'Metropolis';
        src: url('../fonts/Metropolis-Medium.ttf') format('truetype');
        font-weight: 500;
        font-style: normal;
        font-display: swap;
      }
      @font-face {
        font-family: 'Metropolis';
        src: url('../fonts/Metropolis-Semibold.ttf') format('truetype');
        font-weight: 600;
        font-style: normal;
        font-display: swap;
      }
      @font-face {
        font-family: 'Figtree';
        src: url('../fonts/Figtree-Regular.ttf') format('truetype');
        font-weight: 400;
        font-style: normal;
        font-display: swap;
      }
      @font-face {
        font-family: 'Metropolis';
        src: url('../fonts/Figtree-Medium.ttf') format('truetype');
        font-weight: 500;
        font-style: normal;
        font-display: swap;
      }
      @font-face {
        font-family: 'Metropolis';
        src: url('../fonts/Figtree-SemiBold.ttf') format('truetype');
        font-weight: 600;
        font-style: normal;
        font-display: swap;
      }
      @theme {
        --font-metropolis: 'Metropolis', sans-serif;
        --font-figtree: 'Figtree', sans-serif;
      }
    </style>
  </head>
  <body>
    <?php require_once('templates/global/header.php') ?>
    <?php require_once('templates/global/footer.php') ?>
  </body>
</html>