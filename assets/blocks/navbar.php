    <?php
    /* Menu bar
    *
    * To include on a page, use <?php include($_SERVER["DOCUMENT_ROOT"].'/assets/blocks/nav_bar.php') ;?>
    *
    * The server will check if the requested page meets on of the page conditions.
    * If it does, it will add the "bold" class to the menu element, indicating to
    * the user that it is the active page.
    */
    ?>
    <nav class="main-nav dark transparent stick-fixed">
      <div class="full-wrapper relative clearfix">
        <!-- Logo ( * your text or image into link tag *) -->
        <div class="nav-logo-wrap local-scroll">
          <a href="mp-index.html" class="logo" style="max-width: 250px;">
            <img src="assets/images/nav-logo.png" alt="" style="height: 75%; display: inline;">
          </a>
        </div>

        <div class="mobile-nav">
          <i class="fa fa-bars"></i>
        </div>

        <!-- Main Menu -->
        <div class="inner-nav desktop-nav">
          <ul class="clearlist">
            <li>
              <?php if ($_SERVER['REQUEST_URI'] == "/") {
                echo '<a href="/" class="mn active">Home</i></a>';
              }
              else {
                echo '<a href="/" class="mn">Home</i></a>';
              }
              ?>
            </li>

            <li>
              <a href="#" class="mn-has-sub">About <i class="fa fa-angle-down"></i></a>
              <ul class="mn-sub mn-has-multi">
                <li class="mn-sub-multi">
                  <ul>
                    <li>
                      <?php if ($_SERVER['REQUEST_URI'] == "/about/seds/") {
                        echo '<a href="/about/seds/" class="active">About SEDS</a>';
                      }
                      else {
                        echo '<a href="/about/seds/">About SEDS</a>';
                      }
                      ?>
                    </li>
                    <li>
                      <a href="https://www.flickr.com/photos/sedsucsd/">Gallery</a>
                    </li>
                    <li>
                      <a href="https://news.sedsucsd.org">News</a>
                    </li>
                    <li>
                      <?php if ($_SERVER['REQUEST_URI'] == "/about/officers/") {
                        echo '<a href="/about/officers/" class="active">Officers</a>';
                      }
                      else {
                        echo '<a href="/about/officers/">Officers</a>';
                      }
                      ?>
                    </li>
                    <li>
                      <?php if ($_SERVER['REQUEST_URI'] == "/about/contact/") {
                        echo '<a href="/about/contact/" class="active">Contact</a>';
                      }
                      else {
                        echo '<a href="/about/contact/">Contact</a>';
                      }
                      ?>
                    </li>
                  </ul>
                </li>
              </ul>
            </li>

            <li>
              <a href="#" class="mn-has-sub">Teams <i class="fa fa-angle-down"></i></a>
              <ul class="mn-sub mn-has-multi">
                <li class="mn-sub-multi">
                  <ul>
                    <li>
                      <?php if ($_SERVER['REQUEST_URI'] == "/teams/argo/") {
                        echo '<a href="/teams/argo/" class="active">Argo</a>';
                      }
                      else {
                        echo '<a href="/teams/argo/">Argo</a>';
                      }
                      ?>
                    </li>
                    <li>
                      <?php if ($_SERVER['REQUEST_URI'] == "/teams/business/") {
                        echo '<a href="/teams/business/" class="active">Business</a>';
                      }
                      else {
                        echo '<a href="/teams/business/">Business</a>';
                      }
                      ?>
                    </li>
                    <li>
                      <?php if ($_SERVER['REQUEST_URI'] == "/teams/colossus/") {
                        echo '<a href="/teams/colossus/" class="active">Colossus SFS</a>';
                      }
                      else {
                        echo '<a href="/teams/colossus/">Colossus SFS</a>';
                      }
                      ?>
                    </li>
                    <li>
                      <?php if ($_SERVER['REQUEST_URI'] == "/teams/propulsion/") {
                        echo '<a href="/teams/propulsion/" class="active">Propulsion</a>';
                      }
                      else {
                        echo '<a href="/teams/propulsion/">Propulsion</a>';
                      }
                      ?>
                    </li>
                    <li>
                      <?php if ($_SERVER['REQUEST_URI'] == "/teams/triteia/") {
                        echo '<a href="/teams/triteia/" class="active">Triteia CubeSat</a>';
                      }
                      else {
                        echo '<a href="/teams/triteia/">Triteia CubeSat</a>';
                      }
                      ?>
                    </li>
                    <li>
                      <?php if ($_SERVER['REQUEST_URI'] == "/teams/vulcan/") {
                        echo '<a href="/teams/vulcan/" class="active">Vulcan-I</a>';
                      }
                      else {
                        echo '<a href="/teams/vulcan/">Vulcan-I</a>';
                      }
                      ?>
                    </li>
                    <li>
                      <?php if ($_SERVER['REQUEST_URI'] == "/teams/vulcan2/") {
                        echo '<a href="/teams/vulcan2/" class="active">Vulcan-II</a>';
                      }
                      else {
                        echo '<a href="/teams/vulcan2/">Vulcan-II</a>';
                      }
                      ?>
                    </li>
                    <li>
                      <?php if ($_SERVER['REQUEST_URI'] == "/teams/alumni/") {
                        echo '<a href="/teams/alumni/" class="active">Alumni</a>';
                      }
                      else {
                        echo '<a href="/teams/alumni/">Alumni</a>';
                      }
                      ?>
                    </li>
                  </ul>
                </li>
              </ul>
            </li>

            <li>
              <a href="#" class="mn-has-sub">Projects <i class="fa fa-angle-down"></i></a>
              <ul class="mn-sub mn-has-multi">
                <li class="mn-sub-multi">
                  <ul>
                    <li>
                      <?php if ($_SERVER['REQUEST_URI'] == "/projects/argo/") {
                        echo '<a href="/projects/colossus/" class="active">Argo</a>';
                      }
                      else {
                        echo '<a href="/projects/argo/">Argo</a>';
                      }
                      ?>
                    </li>
                    <li>
                      <?php if ($_SERVER['REQUEST_URI'] == "/projects/colossus/") {
                        echo '<a href="/projects/colossus/" class="active">Colossus SFS</a>';
                      }
                      else {
                        echo '<a href="/projects/colossus/">Colossus SFS</a>';
                      }
                      ?>
                    </li>
                    <li>
                      <?php if ($_SERVER['REQUEST_URI'] == "/projects/engines/") {
                        echo '<a href="/projects/engines/" class="active">Engines</a>';
                      }
                      else {
                        echo '<a href="/projects/engines/">Engines</a>';
                      }
                      ?>
                    </li>
                    <li>
                      <a href="https://spacevision.sedsucsd.org/">SpaceVision</a>
                    </li>
                    <li>
                      <?php if ($_SERVER['REQUEST_URI'] == "/projects/triteia/") {
                        echo '<a href="/projects/triteia/" class="active">Triteia Cubesat</a>';
                      }
                      else {
                        echo '<a href="/projects/triteia/">Triteia Cubesat</a>';
                      }
                      ?>
                    </li>
                    <li>
                      <?php if ($_SERVER['REQUEST_URI'] == "/projects/vulcan/") {
                        echo '<a href="/projects/vulcan/" class="active">Vulcan-I</a>';
                      }
                      else {
                        echo '<a href="/projects/vulcan/">Vulcan-I</a>';
                      }
                      ?>
                    </li>
                    <li>
                      <?php if ($_SERVER['REQUEST_URI'] == "/projects/vulcan2/") {
                        echo '<a href="/projects/vulcan2/" class="active">Vulcan-II</a>';
                      }
                      else {
                        echo '<a href="/projects/vulcan2/">Vulcan-II</a>';
                      }
                      ?>
                    </li>
                  </ul>
                </li>
              </ul>
            </li>

            <li>
              <?php if ($_SERVER['REQUEST_URI'] == "/sponsors/") {
                echo '<a href="/sponsors/" class="active">Sponsors</a>';
              }
              else {
                echo '<a href="/sponsors/">Sponsors</a>';
              }
              ?>
            </li>

            <li>
              <?php if ($_SERVER['REQUEST_URI'] == "/donate/") {
                echo '<a href="/donate/" class="active">Donate</a>';
              }
              else {
                echo '<a href="/donate/">Donate</a>';
              }
              ?>
            </li>

          </ul>
        </div>
        <!-- End Main Menu -->
      </div>
    </nav>
    <!-- End Navigation panel -->
