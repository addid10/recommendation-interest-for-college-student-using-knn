
    <header class="header_area">
        <div class="main_menu">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container box_1620">
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                        <ul class="nav navbar-nav menu_nav justify-content-end">
                            <li class="nav-item"><a class="nav-link text-uppercase" href="../">Home</a></li>
                            <li class="nav-item submenu dropdown">
                                <a href="#" class="nav-link dropdown-toggle text-uppercase" data-toggle="dropdown" role="button"
                                    aria-haspopup="true" aria-expanded="false">Metode</a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a class="nav-link" href="../testing">K-Nearest Neighbors</a>
                                </ul>
                            </li>
                            <?php if(isset($_COOKIE['college_student_username'])): ?>
                            <li class="nav-item submenu dropdown">
                                <a href="#" class="nav-link dropdown-toggle text-uppercase" data-toggle="dropdown" role="button"
                                    aria-haspopup="true" aria-expanded="false"><?= $_COOKIE['college_student_username'] ?></a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a class="nav-link" href="../user/logout">Logout</a>
                                </ul>
                            </li>
                            <?php else: ?>
                            <li class="nav-item"><a class="nav-link text-uppercase" href="../user/login">Login</a>
                            <?php endif ?>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>