<?php

/**
 * Created by PhpStorm.
 * User: prg
 * Date: 05.08.2016
 * Time: 15:21
 */
class PageController
{
    public function renderPage()
    {
        ob_start();
        ob_implicit_flush(false);

        if (isset($_GET['page'])) {
            $page = $_GET['page'];
            echo "<p>This is page number $page</p>";

            if ($page == 1) {
                $pageContent = 'renderPage1';
                $this->$pageContent();
            }
        } else {
            echo "<p>This is Home page</p>";
        }

        $content = ob_get_clean();
        require "../views/main.php";
    }

    private function renderPage1()
    {
        echo  "<p>This is perfect PAGE 1 !!!!</p>";
    }
}