<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>
    	<!-- Dropdown Structure -->
    	<!-- Dropdown Structure -->
          <ul id="dropdown1" class="dropdown-content">
            <li><a href="">SPP</a></li>
            <li><a href="">Iuran Komite</a></li>
            <li><a href="">Kunjungan Industri</a></li>
            <li><a href="">Prakerin</a></li>
            <!-- <li class="divider"></li> -->
            <li><a href="">Cetak Buku</a></li>
          </ul>
          </div>
		<div class="navbar-fixed">
          <nav class="teal">
            <div class="container">
            <div class="nav-wrapper">
              <a href="index2.php" class="brand-logo"><i class="material-icons">school</i>SIP </a>
              <a href="" data-target="mobile-nav" class="sidenav-trigger"><i class="material-icons">menu</i></a>
              <!-- <a href="" data-target="mobile-nav" class="sidenav-trigger"><i class="material-icons">menu</i></a>
              <a href="#!" class="brand-logo">SIP</a> -->
              <ul class="right hide-on-med-and-down">
                <li><a href="sass.html">Tentang</a></li>
                <li><a href="kontak.php">Kontak</a></li>
                <!-- Dropdown Trigger -->
                <li><a class="dropdown-trigger" href="#!" data-target="dropdown1">Pembayaran<i class="material-icons right">arrow_drop_down</i></a></li>
                
              </ul>
            </div>
        
          </nav>
        </div>

      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="js/materialize.min.js">
      	<script type="text/javascript" src="js/materialize.min.js"></script>
      <script>
        const sideNav = document.querySelectorAll('.sidenav');
        M.Sidenav.init(sideNav);

        const slider = document.querySelectorAll('.slider')
        M.Slider.init(slider, {
          interval: 4000
        });

        const parallax = document.querySelectorAll('.parallax')
        M.Parallax.init(parallax);


        const dropdown = document.querySelectorAll('.dropdown-trigger')
        M.Dropdown.init(dropdown);

        const modal = document.querySelectorAll('.modal')
        M.Modal.init(modal);
        
        // $(".dropdown-trigger").dropdown();
        

       
    //     document.addEventListener('DOMContentLoaded', function() {
    // var elems = document.querySelectorAll('.sidenav');
    // var instances = M.Sidenav.init(elems, options);
        
      </script>
      	
      </script>
    </body>
  </html>