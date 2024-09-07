<body>
    <header>
        <!-- Fixed navbar -->
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
            <div class="container-fluid">

                <a class="navbar-brand" href="<?= $login === 'Đăng nhập' ? "/ToDoApp/views/login.view.php" : ""?>"><?= $login ?></a>
                <!-- <a class="navbar-brand" href="/ToDoApp/views/login.view.php"></a> -->

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav me-auto mb-2 mb-md-0">
                        <li class="nav-item">
                            <a class="<?= $_SERVER['REQUEST_URI'] === '/ToDoApp/' ? 'nav-link active':'nav-link'?>" aria-current="page" href="/ToDoApp">Trang chủ</a>
                        </li>
                        <li class="nav-item">
                            <a class="<?= $_SERVER['REQUEST_URI'] === '/ToDoApp/views/information.view.php'? 'nav-link active':'nav-link'?>" href="/ToDoApp/views/information.view.php">Thông tin cá nhân</a>
                        </li>
                        <li class="nav-item">
                            <a class="<?= $_SERVER['REQUEST_URI'] === '/ToDoApp/views/about.view.php'? 'nav-link active':'nav-link'?>" href="/ToDoApp/views/about.view.php">Về chúng tôi</a>
                        </li>
                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Tìm kiếm">
                        <button class="btn btn-outline-success" type="submit">Tìm</button>
                    </form>
                </div>
            </div>
        </nav>
    </header>

    <!-- Begin page content -->
    <main class="flex-shrink-0">