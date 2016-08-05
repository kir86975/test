<div class="container">
    <div class="jumbotron">
        <h1>Bootstrap Tutorial</h1>
        <p>Bootstrap is the most popular HTML, CSS, and JS framework for developing
            responsive, mobile-first projects on the web.</p>
    </div>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="main.php">WebSiteName</a>
            </div>
            <ul class="nav navbar-nav">
                <li class="active"><a href="main.php">Home</a></li>
                <li><a href="main.php?page=1">Page 1</a></li>
                <li><a href="main.php?page=2">Page 2</a></li>
                <li><a href="main.php?page=3">Page 3</a></li>
            </ul>
        </div>
    </nav>

    <?php echo $content?>

    <p>This is some text.</p>
    <p>This is another text.</p>
</div>