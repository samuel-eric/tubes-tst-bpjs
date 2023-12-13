<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>BPJS Kesehatan</title>
  <!-- Tambahin favicon -->
  <style>
    html, body {
      color: rgba(33, 37, 41, 1);
      font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji";
      font-size: 16px;
      margin: 0;
      padding: 0;
      -webkit-font-smoothing: antialiased;
      -moz-osx-font-smoothing: grayscale;
      text-rendering: optimizeLegibility;
      height: 100vh;
      position: relative;
      overflow: hidden;
    }
    .container {
      width: 80%;
      margin: 0 auto;
    }
    header {
      background-color: rgba(247, 248, 249, 1);
      padding: 1.5rem 0;
    }
    header .container {
      display: flex;
      justify-content: space-between;
      align-items: center;
    }
    .logo-img {
      width: 100%;
    }
    .links {
      display: flex;
      list-style: none;
      gap: 20px;
    }
    .links a {
      color: inherit;
      text-decoration: none;
    }
    .links a:hover {
      color: #00a14c;
    }
    .main {
      padding: 1rem;
      height: 100%;
    }
    footer {
      display: flex;
      justify-content: center;
      align-items: center;
      background-color: rgba(247, 248, 249, 1);
      padding: 1rem 0;
      color: #888;
      position: absolute;
      bottom: 0;
      width: 100%;
    }
  </style>
</head>
<body>
  <?= $this->renderSection('header') ?>
</body>
</html>