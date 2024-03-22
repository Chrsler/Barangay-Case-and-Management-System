<?php
session_start();
include ("./connection/connection_db.php");
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <title>Mediation</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSS SIDEBAR -->
        <link href="./styles/sidebar.css" rel="stylesheet">
        <!-- CSS FOR TABLE -->
        <link href="./styles/table.css" rel="stylesheet">
        <!-- CSS FOR FORM -->
        <link href="./styles/form.css" rel="stylesheet">

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
                <span class="text">Mediation</span>
            </div>

            <!-- TABLE -->
            <main class="table" id="customers_table">
                <section class="table__header">
                    <h1>Case List</h1>

                    <!-- SEARCH -->
                    <div class="input-group">
                        <input type="search" placeholder="Search Data...">
                        <img src="images/search.png" alt="">
                    </div>

                    <!-- EXPORTING TO PDF -->
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

                <!-- POPUP FORM -->
                <button class="button" data-modal="modalOne">New Case</button>
                <div id="modalOne" class="modal">
                    <div class="modal-content">
                        <div class="contact-form">
                            <a class="close">&times;</a>
                            <form action="/">
                                <div class="container">
                                    <div class="red-line"></div>
                                    <img src="barangay_logo_left.png" alt="Barangay Logo Left" class="logo"
                                        style="position: absolute; top: 10px; left: 10px;">
                                    <img src="barangay_logo_right.png" alt="Barangay Logo Right" class="logo"
                                        style="position: absolute; top: 10px; right: 10px;">
                                    <h2 class="title">REPUBLIKA NG PILIPINAS <br> LUNGSOD NG TAGUIG <br> BARANGAY UPPER
                                        BICUTAN</h2>
                                    <hr>
                                    <h3 class="title">OFFICE OF THE LUPONG TAGAPAMAYAPA</h3>
                                    <div class="complainant">
                                        <div style="float: left; width: 30%;">
                                            <input type="text" id="complainant" name="complainant">
                                            <label for="complainant">Complainant's:</label>
                                        </div>
                                        <div style="float: right; width: 20%;">
                                            <div style="display: inline-block; width: calc(100% - 130px);">
                                                <label for="case_number">Barangay Case No.:</label>
                                                <input type="text" id="case_number" name="case_number">
                                            </div>
                                            <div style="display: inline-block;">
                                                <label for="for">For:</label>
                                                <textarea id="for" name="for"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div style="clear: both;"></div>
                                </div>
                                <p>---against---</p>
                                <label for="respondent">Respondent/s Name:</label>
                                <input type="text" id="respondent" name="respondent">
                                <h3 class="title">B L O T T E R</h3>
                                <textarea id="complaint" name="complaint"
                                    placeholder="I/WE hereby complain against above named respondent/s for violating my / our rights and interest in the following manner:"></textarea>
                                <hr>
                                <p>THEREFORE, I/WE pray that the following relief/s be granted to me/us in
                                    accordance with law and/or
                                    equity:</p>
                                <textarea id="relief" name="relief"
                                    placeholder="Made this ________ day of ________________, 20__."></textarea>
                                <p>________________________</p>
                                <p class="complaints">Complaint/s</p>
                                <p>Receive and filed this ____________ day of ______________. 20__.</p>
                                <p>____________________________________</p>
                                <p>FRANCIS P. SUNGA</p>
                                <p>Punong Barangay/Lupon Chairman</p>
                                <hr>
                                <div class="footer">
                                    <p>Block 52 Lot 27 Phase 2, A. Bonifacio Ave., <br> Upper Bicutan, Taguig City
                                        <br> Metro Manila 1633
                                        <br> Tel. No. 8838-2296
                                    </p>
                                    <img src="barangay_logo_right.png" alt="Barangay Logo Right" class="logo"
                                        style="float: right;">
                                </div>
                        </div>
                        </form>
                    </div>
                </div>
                </div>

                <!-- TABLE BODY -->
                <section class="table__body">
                    <table>
                        <thead>
                            <tr>
                                <th> Case No. <span class="icon-arrow">&UpArrow;</span></th>
                                <th> Complainant <span class="icon-arrow">&UpArrow;</span></th>
                                <!-- <th> Location <span class="icon-arrow">&UpArrow;</span></th> -->
                                <th> Date <span class="icon-arrow">&UpArrow;</span></th>
                                <th> Status <span class="icon-arrow">&UpArrow;</span></th>
                                <th> Action <span class="icon-arrow">&UpArrow;</span></th>
                            </tr>
                        </thead>

                        <tbody>
                            <!-- DB CONNECTION -->
                            <?php
                            $fetch_query     = "SELECT * FROM mediation";
                            $fetch_query_run = mysqli_query($conn, $fetch_query);

                            if (mysqli_num_rows($fetch_query_run) > 0) {
                                while ($row = mysqli_fetch_array($fetch_query_run)) {
                                    ?>

                                    <tr>
                                        <td> <?php echo $row['case_num']; ?> </td>
                                        <td> <?php echo $row['complainant']; ?> </td>
                                        <td> <?php echo $row['date']; ?> </td>
                                        <td> <?php echo $row['status']; ?> </td>
                                        <td> <strong> View | Delete </strong></td>
                                    </tr>

                                    <?php
                                }
                            } else {
                                ?>

                                <td colspan="4"> No record found </td>

                                <?php

                            }

                            ?>

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