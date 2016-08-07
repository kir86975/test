<!DOCTYPE html>
<html>
<head>
    <title>My test site</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <div class="jumbotron">
            <h1>Тестовое задание</h1>
            <p>Все тестовые задания находятся на отдельных вкладках</p>
        </div>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="page">WebSiteName</a>
                </div>
                <ul class="nav navbar-nav">
                    <?php
                        $addressPrefix = 'http://'.$_SERVER['HTTP_HOST'];
                        $request = $_SERVER['REQUEST_URI'];

                        $pages = [
                            ['/page', 'Домашняя'],
                            ['/page/tags', 'Теги'],
                            ['/page/keys', 'Ключи'],
                            ['/page/tree', 'Дерево'],
                            ['/page/repeatingNumbers', 'Повторяющиеся числа'],
                            ['/page/twoDimensionalArray', 'Двумерный массив']
                        ];

                        foreach ($pages as $key => $value) {
                            $link = $addressPrefix.$value[0];
                            $linkName = $value[1];

                            $isPageWithActionActive =
                                strpos($link, $request) !== false && strpos($request, '/page/') !== false;

                            $isPageWithoutAction =
                                strpos($request, '/page') !== false && strpos($request, '/page/') === false;

                            $active = $isPageWithActionActive || $isPageWithoutAction ? 'class="active"' : '';
                            echo '<li '.$active.'><a href="'.$link.'">'.$linkName.'</a></li>';
                        }
//                            class="active"
//                        $active = strpos($request, )
//                        echo '<li><a href="'.$addressPrefix.'/page">Home</a></li>';

                    ?>
                </ul>
            </div>
        </nav>

        <?php require_once '../application/views/'.$contentView.'.php'; ?>

    </div>
</body>
