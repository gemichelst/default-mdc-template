<?php
error_reporting(E_ALL);
session_start();
//$sid=$_SESSION["id"];

include('inc/mysql_connect.inc.php');
include('inc/functions.inc.php');
?>
<!DOCTYPE html>
<html>
  <head>
    <title>localNET-V2 by gemichelst</title>
    <?php include('inc/header.inc.php'); ?>
  </head>
  
  <body class="mdc-typography body">

    <!-- NAVIGATION PERMANENT DRAWER START -->
    <aside class="mdc-persistent-drawer">
      <nav class="mdc-persistent-drawer__drawer">
        <div class="mdc-persistent-drawer__toolbar-spacer"></div>
        <div class="mdc-list-group">
          <nav class="mdc-list">
            <a class="mdc-list-item mdc-persistent-drawer--selected" href="<?php navlinks("dashboard","link"); ?>">
              <i class="material-icons mdc-list-item__start-detail" aria-hidden="true"><?php navlinks("dashboard","icon"); ?></i>Dashboard
            </a>
            <a class="mdc-list-item" href="<?php navlinks("notes","link"); ?>">
              <i class="material-icons mdc-list-item__start-detail" aria-hidden="true"><?php navlinks("notes","icon"); ?></i>Notes
            </a>
            <a class="mdc-list-item" href="<?php navlinks("webapps","link"); ?>">
              <i class="material-icons mdc-list-item__start-detail" aria-hidden="true"><?php navlinks("webapps","icon"); ?></i>WebApps
            </a>
            <a class="mdc-list-item" href="<?php navlinks("media","link"); ?>">
              <i class="material-icons mdc-list-item__start-detail" aria-hidden="true"><?php navlinks("media","icon"); ?></i>Media
            </a>
            <a class="mdc-list-item" href="<?php navlinks("explorer","link"); ?>">
              <i class="material-icons mdc-list-item__start-detail" aria-hidden="true"><?php navlinks("explorer","icon"); ?></i>Explorer
            </a>
            <a class="mdc-list-item" href="<?php navlinks("services","link"); ?>">
              <i class="material-icons mdc-list-item__start-detail" aria-hidden="true"><?php navlinks("services","icon"); ?></i>Services
            </a>
            <a class="mdc-list-item" href="<?php navlinks("scripts","link"); ?>">
              <i class="material-icons mdc-list-item__start-detail" aria-hidden="true"><?php navlinks("scripts","icon"); ?></i>Scripts
            </a>
            <a class="mdc-list-item" href="<?php navlinks("backups","link"); ?>">
              <i class="material-icons mdc-list-item__start-detail" aria-hidden="true"><?php navlinks("backups","icon"); ?></i>Backups
            </a>
            <li class="mdc-list-item">&nbsp;</li>
          </nav>

          <hr class="mdc-list-divider">

          <nav class="mdc-list">
              <a class="mdc-list-item" href="<?php navlinks("settings","link"); ?>">
                <i class="material-icons mdc-list-item__start-detail" aria-hidden="true"><?php navlinks("settings","icon"); ?></i>Settings
              </a>
              <a class="mdc-list-item" href="<?php navlinks("user","link"); ?>">
                <i class="material-icons mdc-list-item__start-detail" aria-hidden="true"><?php navlinks("user","icon"); ?></i>User
              </a>
              <a class="mdc-list-item" href="<?php navlinks("logout","link"); ?>">
                <i class="material-icons mdc-list-item__start-detail" aria-hidden="true"><?php navlinks("logout","icon"); ?></i>Logout
              </a>
            </nav>
          </div>
      </nav>
    </aside>
    <!-- NAVIGATION PERMANENT DRAWER START -->

    <!-- TOOLBAR ROW START -->
    <div class="content">
      <header class="mdc-toolbar mdc-elevation--z4">
        <div class="mdc-toolbar__row">
          <section class="mdc-toolbar__section mdc-toolbar__section--align-start">
            <!--
            <span>
              <a href="/" class="mdc-toolbar__menu-icon"><i class="material-icons">&#xE5C4;</i></a>
            </span>
            -->
            <button class="menu material-icons mdc-toolbar__menu-icon">menu</button>
            <span class="mdc-toolbar__title catalog-title"><?php /*echo $current_site;*/ echo "localNET-V2"; ?></span>
          </section>
        </div>
      </header>
      <!-- TOOLBAR ROW END -->

      <!-- CONTENT START -->
      <main class="main">
        <!-- current site: <?php echo $current_site; ?> -->
        <h1 class="mdc-typography--title siteTitle mdc-list-item"><i class="material-icons mdc-list-item__start-detail" aria-hidden="true"><?php navlinks($current_site,"icon"); ?></i><?php echo $current_site; ?></h1>
        <?php content($current_site); ?>
      </main>
      <!-- CONTENT END -->

      <!-- MDC INIT SCRIPT -->
      <script>
        var drawerEl = document.querySelector('.mdc-persistent-drawer');
        var MDCPersistentDrawer = mdc.drawer.MDCPersistentDrawer;
        var drawer = new MDCPersistentDrawer(drawerEl);
        document.querySelector('.menu').addEventListener('click', function() {
          drawer.open = !drawer.open;
        });
        drawerEl.addEventListener('MDCPersistentDrawer:open', function() {
          console.log('Received MDCPersistentDrawer:open');
        });
        drawerEl.addEventListener('MDCPersistentDrawer:close', function() {
          console.log('Received MDCPersistentDrawer:close');
        });
      </script>
      <!-- MDC INIT SCRIPT -->

    </div>

    <!--
    <div class="col1">test</div>
    <div class="col1">test2</div>
    -->


  </body>
</html>