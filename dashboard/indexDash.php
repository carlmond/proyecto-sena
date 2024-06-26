<!DOCTYPE html>
<html lang="en">

<head>
  <title>Papelería Benneton</title>
  <!-- Link Styles -->  
  <link rel="shortcut icon" href="../img/papeleria-logo.png" />
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="../assets/css/styleDash.css">

</head>

<body>
  <div class="sidebar">
    <div class="logo_details">
      <i class="bx bxl-audible icon"></i>
      <div class="logo_name">Papelería Benetton</div>
      <i class="bx bx-menu" id="btn"></i>
    </div>
    <ul class="nav-list">
      <li>
        <i class="bx bx-search"></i>
        <input type="text" placeholder="Search...">
        <span class="tooltip">Search</span>
      </li>
      <li>
        <a href="#">
          <i class="bx bx-cart-alt"></i>
          <span class="link_name">Venta</span>
        </a>
        <span class="tooltip">Venta</span>
      </li>
      <li>
        <a href="#">
          <i class="bx bx-grid-alt"></i>
          <span class="link_name">Dashboard</span>
        </a>
        <span class="tooltip">Dashboard</span>
      </li>
      <li>
        <a href="#">
          <i class="bx bx-user"></i>
          <span class="link_name">Usuarios</span>
        </a>
        <span class="tooltip">User</span>
      </li>

      <li>
        <a href="#">
          <i class="bx bx-pie-chart-alt-2"></i>
          <span class="link_name">Inventarios</span>
        </a>
        <span class="tooltip">Inventarios</span>
      </li>


      <li>
        <a href="#">
          <i class="bx bx-cog"></i>
          <span class="link_name">Settings</span>
        </a>
        <span class="tooltip">Configuración</span>
      </li>
      <li class="profile">
        <div class="profile_details">
          <img src="../img/profile.jpg" alt="profile image">
          <div class="profile_content">
            <div class="name">Amin Jalilie</div>
            <div class="designation">Admin</div>
          </div>
        </div>
        <i class="bx bx-log-out" id="log_out"></i>
      </li>
    </ul>
  </div>
  <section class="home-section">
    <div class="text">Dashboard</div>
  </section>
  <!-- Scripts -->
  <script src="../js/scriptDash.js"></script>
</body>

</html>