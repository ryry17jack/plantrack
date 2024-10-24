<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ระบบติดตามสถานะโครงการ</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Thai:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/bulma.min.css">
    <script src="https://kit.fontawesome.com/cb030fd62d.js" crossorigin="anonymous"></script>
</head>

<body>
    <nav class="navbar is-link" role="navigation" aria-label="main navigation">
        <div class="navbar-brand">
            <a class="navbar-item" href="https://bulma.io">
                <img src="img/logo.png">
                <strong>ระบบติดตามสถานะโครงการ</strong>
            </a>

            <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
            </a>
        </div>

        <div id="navbarBasicExample" class="navbar-menu">
            <div class="navbar-start">
                <a href="index.php" class="navbar-item">
                    หน้าหลัก
                </a>

                <a class="navbar-item">
                    คู่มือการใช้งาน
                </a>


            </div>

            <div class="navbar-end">
                <div class="navbar-item">
                    <div class="buttons">
                        <a href="regis.php" class="button is-link is-light">
                            <strong>ลงทะเบียน</strong>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <section class="section">
        <div class="container">
            <h1 class="title">
                ลงทะเบียน - ระบบติดตามสถานะโครงการ
            </h1>
            <!-- <div class="box"> -->
            <div class="columns is-desktop">
                <div class="column">
                    <img src="img/project.jpg">
                </div>
                <div class="column">
                    <div class="box">
                        <strong class="subtitle">ลงทะเบียนเข้าใช้ระบบ</strong>
                        <form action="login.php" method="post">
                            <div class="field">
                                <p class="control has-icons-left has-icons-right">
                                    <input class="input" type="email" placeholder="Email">
                                    <span class="icon is-small is-left">
                                        <i class="fas fa-envelope"></i>
                                    </span>
                                    <span class="icon is-small is-right">
                                        <i class="fas fa-check"></i>
                                    </span>
                                </p>
                            </div>
                            <div class="field">
                                <p class="control has-icons-left">
                                    <input class="input" type="password" placeholder="Password">
                                    <span class="icon is-small is-left">
                                        <i class="fas fa-lock"></i>
                                    </span>
                                </p>
                            </div>
                            <div class="field">
                                <p class="control">
                                    <button class="button is-success has-text-white">
                                        ลงทะเบียน
                                    </button>
                                </p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- </div> -->
        </div>
    </section>
</body>

</html>