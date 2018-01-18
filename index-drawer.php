<?php
error_reporting(E_ALL);
session_start();
$sid=$_SESSION["id"];
?>
<!DOCTYPE html>
<html>
  
  <head>
    
    <title>Default-Template with Drawer</title>
    <?php include('includes/header.inc.php'); ?>
  
  </head>
  
  <body class="mdc-typography body">
    <aside class="mdc-persistent-drawer">
      <nav class="mdc-persistent-drawer__drawer">
        <div class="mdc-persistent-drawer__toolbar-spacer"></div>
        <div class="mdc-list-group">
          <nav class="mdc-list">
            <a class="mdc-list-item mdc-persistent-drawer--selected" href="#">
              <i class="material-icons mdc-list-item__start-detail" aria-hidden="true">inbox</i>Inbox
            </a>
            <a class="mdc-list-item" href="#">
              <i class="material-icons mdc-list-item__start-detail" aria-hidden="true">star</i>Star
            </a>
            <a class="mdc-list-item" href="#">
              <i class="material-icons mdc-list-item__start-detail" aria-hidden="true">send</i>Sent Mail
            </a>
            <a class="mdc-list-item" href="#">
              <i class="material-icons mdc-list-item__start-detail" aria-hidden="true">drafts</i>Drafts
            </a>
          </nav>

          <hr class="mdc-list-divider">

          <nav class="mdc-list">
              <a class="mdc-list-item" href="#">
                <i class="material-icons mdc-list-item__start-detail" aria-hidden="true">email</i>All Mail
              </a>
              <a class="mdc-list-item" href="#">
                <i class="material-icons mdc-list-item__start-detail" aria-hidden="true">delete</i>Trash
              </a>
              <a class="mdc-list-item" href="#">
                <i class="material-icons mdc-list-item__start-detail" aria-hidden="true">report</i>Spam
              </a>
            </nav>
          </div>
      </nav>
    </aside>
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
            <span class="mdc-toolbar__title catalog-title">Persistent Drawer</span>
          </section>
        </div>
      </header>

      <main class="main">
        <h1 class="mdc-typography--display1">Persistent Drawer</h1>
        <p class="mdc-typography--body1">Click the menu icon above to open and close the drawer.</p>
      </main>

      
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
    </div>

    <!--
    <div class="col1">test</div>
    <div class="col1">test2</div>
    -->


  </body>
  	

  
  </body>
  </html>