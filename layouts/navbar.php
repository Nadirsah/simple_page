<nav class="navbar navbar-expand-lg navbar-light bg-info">
    <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <?php
                    $uri_path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
                    $uri_segments = explode('/', $uri_path);

                    ?>
                    <a class="nav-link <?php echo $uri_segments[1]=='simple_page' ? 'active' : ''; ?> " aria-current="page" href="/simple_page">Əsas əshifə</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo $uri_segments[2]=='kategoriyalar.php' ? 'active' : ''; ?>" href="kategoriyalar.php">Kategoriyalar </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn btn-info <?php echo $uri_segments[2]=='create.php' ? 'active' : ''; ?>" href="create.php">Yeni Kategoriya </a>
                </li>
            </ul>
        </div>
    </div>
</nav>