<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="utf-8">
        <title>
            <?php
            echo $page_title;
            global $site_name;
            $site_name = "Тестовый сайт";
            ?>
        </title>
    </head>
    <body>
        <?php include "header.php"; ?>
        <?php
        $content = "application/$module_name/view/$content_view";
        
        if (file_exists($content)) {
            include $content;
        } else {
            echo "Oops, the file $content does not exists";
        }
        include "footer.php";
        ?>
    </body>
</html>

