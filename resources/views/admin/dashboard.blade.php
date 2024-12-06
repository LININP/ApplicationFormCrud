<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Job Board</title>
    <style>
      /* General Styles */
      body {
        margin: 0;
        font-family: Arial, sans-serif;
        background-color: #f4f4f9;
        color: #333;
      }
      .container-scroller {
        display: flex;
        flex-direction: column;
        min-height: 100vh;
      }
      .navbar {
        background: #4CAF50;
        padding: 10px 20px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        color: #fff;
      }
      .navbar a {
        color: #fff;
        text-decoration: none;
        margin: 0 10px;
      }
      .navbar img {
        border-radius: 50%;
        width: 40px;
        height: 40px;
      }
      .sidebar {
        width: 250px;
        background: #333;
        color: #fff;
        padding: 20px;
        position: fixed;
        height: 100%;
        overflow-y: auto;
      }
      .sidebar a {
        color: #fff;
        text-decoration: none;
        display: block;
        margin: 10px 0;
      }
      .sidebar .nav-category {
        font-size: 16px;
        margin-bottom: 10px;
        text-transform: uppercase;
      }
      .main-panel {
        margin-left: 270px;
        padding: 20px;
        background: #fff;
        flex-grow: 1;
      }
      .card {
        background: #fff;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        text-align: center;
      }
      .card h5 {
        margin-bottom: 10px;
        color: #555;
      }
      .card h2 {
        margin: 10px 0;
        font-size: 32px;
        color: #000;
      }
      .footer {
        background: #333;
        color: #fff;
        text-align: center;
        padding: 10px;
        position: relative;
      }
    </style>
  </head>
  <body>
    <div class="container-scroller">


      <!-- Sidebar -->
      <nav class="sidebar">
        <div class="nav-category">Main</div>
        <a href="#">Dashboard</a>
        <a href="#">Applicants</a>

      </nav>

      <!-- Main Panel -->
      <div class="main-panel">
        <h2>Admin Dashboard</h2>

      </div>

      <!-- Footer -->
      <footer class="footer">
      </footer>
    </div>
  </body>
</html>
