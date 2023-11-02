.<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Édes Élmény Cukrászda</title>
        <link rel="stylesheet" type="text/css" href="<?php echo SITE_ROOT?>css/main_style.css">
        <?php if($viewData['style']) echo '<link rel="stylesheet" type="text/css" href="'.$viewData['style'].'">'; ?>
    </head>
    <body>
        <header>
            <div id="user"><em>
            <?php if(isset($_SESSION['login'])) { ?>Bejelentkezett: <strong><?= $_SESSION['userlastname']." ".$_SESSION['userfirstname']." (".$_SESSION['login'].")" ?></strong><?php } ?>
            </em></div>
            <h1 class="header">Édes Élmény Cukrászda</h1>
        </header>
        <nav>
            <?php echo Menu::getMenu($viewData['selectedItems']); ?>
        </nav>
        <aside>
                <p>Expressz tortarendelés: 0620/555555</p>
        </aside>
        <section>
            <?php if($viewData['render']) include($viewData['render']); ?>
        </section>
        <footer>&copy; Édes Élmény Cukrászda. All rights reserved. <?= date("Y") ?></footer>
    </body>
</html>
