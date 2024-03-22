<?php
session_start();
include("./connection/connection_db.php");
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <title>Dashboard</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSS FOR SIDEBAR -->
        <link href="./styles/sidebar.css" rel="stylesheet">
        
        <!-- BOX ICONS CDN LINK -->
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    </head>

    <body>

        <!-- SIDEBAR -->
        <div class="sidebar">
            <div class="logo-details">
                <i class='bx bxs-building-house'></i>
                <span class="logo_name">Barangay</span>
            </div>
            <ul class="nav-links">
                <li>
                    <a href="dashboard.php">
                        <i class='bx bx-grid-alt'></i>
                        <span class="link_name">Dashboard</span>
                    </a>
                    <ul class="sub-menu blank">
                        <li><a class="link_name" href="dashboard.php">Dashboard</a></li>
                    </ul>
                </li>

                <li>
                    <a href="blotter.php">
                        <i class='bx bx-task-x'></i>
                        <span class="link_name">Blotter</span>
                    </a>
                    <ul class="sub-menu blank">
                        <li><a class="link_name" href="blotter.php">Blotter</a></li>
                    </ul>
                </li>

                <li>
                    <div class="iocn-link">
                        <a href="mediation.php">
                            <i class='bx bx-file'></i>
                            <span class="link_name">Case List</span>
                        </a>
                        <i class='bx bx-chevron-down arrow'></i>
                    </div>
                    <ul class="sub-menu">
                        <li><a class="link_name" href="mediation.php">Case List</a></li>
                        <li><a href="mediation.php">Mediation</a></li>
                        <li><a href="conciliation.php">Conciliation</a></li>
                        <li><a href="block.php">Block</a></li>
                    </ul>
                </li>

                <li>
                    <a href="report.php">
                        <i class='bx bx-line-chart'></i>
                        <span class="link_name">Report</span>
                    </a>
                    <ul class="sub-menu blank">
                        <li><a class="link_name" href="report.php">Report</a></li>
                    </ul>
                </li>

                <li>
                    <div class="profile-details">
                        <div class="profile-content">
                            <img src="./assets/brgy.jpg" alt="profile">
                        </div>
                        <div class="name-job">
                            <div class="profile_name">Angie</div>
                            <div class="job">Secretary</div>
                        </div>
                        <i class='bx bx-log-out'></i>
                    </div>
                </li>
            </ul>
        </div>

        <section class="home-section">
            <div class="home-content">
                <i class='bx bx-menu-alt-left'></i>
                <span class="text">Dashboard</span>
            </div>
        </section>

        <script>
            let arrow = document.querySelectorAll(".arrow");
            for (let i = 0; i < arrow.length; i++)
            {
                arrow[i].addEventListener("click", (e) =>
                {
                    let arrowParent = e.target.parentElement.parentElement;
                    arrowParent.classList.toggle("showMenu");
                });
            }

            let sidebar = document.querySelector(".sidebar");
            let sidebarBtn = document.querySelector(".bx-menu-alt-left");
            console.log(sidebar);
            sidebarBtn.addEventListener("click", () =>
            {
                sidebar.classList.toggle("close");
            });
        </script>

    </body>

</html>