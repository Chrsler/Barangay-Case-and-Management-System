<?php
session_start();
include("./connection/connection_db.php");
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <title>Block</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSS SIDEBAR -->
        <link href="./styles/sidebar.css" rel="stylesheet">
        <!-- CSS FOR TABLE -->
        <link href="./styles/table.css" rel="stylesheet">

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

        <!-- START -->
        <section class="home-section">
            <div class="home-content">
                <i class='bx bx-menu-alt-left'></i>
                <span class="text">Block</span>
            </div>

            <!-- TABLE -->
            <main class="table" id="customers_table">
                <section class="table__header">
                    <h1>Case List</h1>
                    <div class="input-group">
                        <input type="search" placeholder="Search Data...">
                        <img src="images/search.png" alt="">
                    </div>
                    <div class="export__file">
                        <label for="export-file" class="export__file-btn" title="Export File"></label>
                        <input type="checkbox" id="export-file">
                        <div class="export__file-options">
                            <label>Export As &nbsp; &#10140;</label>
                            <label for="export-file" id="toPDF">PDF <img src="images/pdf.png" alt=""></label>
                            <label for="export-file" id="toJSON">JSON <img src="images/json.png" alt=""></label>
                            <label for="export-file" id="toCSV">CSV <img src="images/csv.png" alt=""></label>
                            <label for="export-file" id="toEXCEL">EXCEL <img src="images/excel.png" alt=""></label>
                        </div>
                    </div>
                </section>
                <section class="table__body">
                    <table>
                        <thead>
                            <tr>
                                <th> Id <span class="icon-arrow">&UpArrow;</span></th>
                                <th> Name <span class="icon-arrow">&UpArrow;</span></th>
                                <th> Location <span class="icon-arrow">&UpArrow;</span></th>
                                <th> Date <span class="icon-arrow">&UpArrow;</span></th>
                                <th> Status <span class="icon-arrow">&UpArrow;</span></th>
                                <th> Action <span class="icon-arrow">&UpArrow;</span></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td> 1 </td>
                                <td> <img src="images/Zinzu Chan Lee.jpg" alt="">Chan Lee</td>
                                <td> Seoul </td>
                                <td> 17 Dec, 2022 </td>
                                <td>
                                    <p class="status delivered">Done</p>
                                </td>
                                <td> <strong> View | Delete </strong></td>
                            </tr>
                            <tr>
                                <td> 2 </td>
                                <td> <img src="images/Zinzu Chan Lee.jpg" alt="">Alcoreza</td>
                                <td> Western </td>
                                <td> 2 Jan, 2023 </td>
                                <td>
                                    <p class="status delivered">Done</p>
                                </td>
                                <td> <strong> View | Delete </strong></td>
                            </tr>
                            <tr>
                                <td> 3 </td>
                                <td> <img src="images/Zinzu Chan Lee.jpg" alt="">Ygot</td>
                                <td> Upper </td>
                                <td> 24 Feb, 2023 </td>
                                <td>
                                    <p class="status delivered">Done</p>
                                </td>
                                <td> <strong> View | Delete </strong></td>
                            </tr>
                            <tr>
                                <td> 4 </td>
                                <td> <img src="images/Zinzu Chan Lee.jpg" alt="">Kris</td>
                                <td> Tanyag </td>
                                <td> 26 Apr, 2023 </td>
                                <td>
                                    <p class="status delivered">Done</p>
                                </td>
                                <td> <strong> View | Delete </strong></td>
                            </tr>
                            <tr>
                                <td> 5 </td>
                                <td> <img src="images/Zinzu Chan Lee.jpg" alt="">Daimler</td>
                                <td> Taguig </td>
                                <td> 14 Feb, 2024 </td>
                                <td>
                                    <p class="status delivered">Done</p>
                                </td>
                                <td> <strong> View | Delete </strong></td>
                            </tr>

                        </tbody>
                    </table>
                </section>
            </main>

        </section>




        <!-- SCRIPT FOR SIDEBAR TO OPEN AND CLOSE -->
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

        <!-- JS FOR TABLE -->
        <script src="./scripts/table.js"></script>

    </body>

</html>