<!--
=========================================================
* Material Dashboard Dark Edition - v2.1.0
=========================================================

* Product Page: https://www.creative-tim.com/product/material-dashboard-dark
* Copyright 2019 Creative Tim (http://www.creative-tim.com)

* Coded by www.creative-tim.com

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="en">

<head>
 @include('admin.section.assets')
</head>

<body class="dark-edition">
  <div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="black" data-image="../assets/img/sidebar-2.jpg">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
      @include('admin.section.sidebar')
    </div>
    <div class="main-panel">
      <!-- Navbar -->
     @include('admin.section.header')
      <!-- End Navbar -->
      <div class="content">
      @yield('content')
      </div>
      <footer class="footer">
        @include('admin.section.footer')
      </footer>
    </div>
  </div>
  <!--   Core JS Files   -->
  @include('admin.section.js')
</body>

</html>