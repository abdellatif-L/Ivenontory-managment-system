<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/dashboard.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.1/chart.min.js"></script>
    <script src="../js/app.js"></script>
    <title>Admin Page</title>
</head>
<body>
    <nav class="navbar" onresize="addClass()">
        <ul class="navbar-nav">
            <li class="logo">
                <a href="#" class="nav-link">
                    <span class="link-text logo-text">Tex<font color="#fff">GEAR</font></span>
                    <img src="../res/img/logo.svg" alt="">
                </a>
            </li>

            <li class="nav-item">
                <a href="#" class="nav-link">
                    <img class="nav-icon" src="../res/img/chart.png" alt="">
                    <span class="link-text">Dashboard</span>
                </a>
            </li>

            <li class="nav-item">
                <a href="#" class="nav-link">
                    <img class="nav-icon" src="../res/img/profile1.png" alt="">
                    <span class="link-text">Profile</span>
                </a>
            </li>

            <li class="nav-item">
                <a href="#" class="nav-link">
                    <img class="nav-icon" src="../res/img/categories.png" alt="">
                    <span class="link-text">Category</span>
                </a>
            </li>

            <li class="nav-item">
                <a href="#" class="nav-link">
                    <img class="nav-icon" src="../res/img/product.png" alt="">
                    <span class="link-text">Products</span>
                </a>
            </li>

            <li class="nav-item">
                <a href="#" class="nav-link">
                    <img class="nav-icon" src="../res/img/reports.png" alt="">
                    <span class="link-text">Reports</span>
                </a>
            </li>

            <li class="nav-item">
                <a href="#" class="nav-link">
                    <img class="nav-icon" src="../res/img/logout.png" alt="">
                    <span class="link-text">Logout</span>
                </a>
            </li>
        </ul>
    </nav>

    <!-- MAIN CONTENT -->
    <main class="content">
        <h1>Dashboard</h1>
        <hr color="#FF304F" width="90%" size="4">
    </main>

    <script>
        let tergets = document.querySelector('.nav-item');
        let mainContent = document.querySelector('.content');
        
        targets.addEventListener("mouseover", mOver, false);
        targets.addEventListener("mouseout", mOut, false);

        function mOver() {
            mainContent.classList.add(active);
        }

        function mOut() {  
            mainContent.classList.remove(active);
        }
    </script>
</body>
</html>