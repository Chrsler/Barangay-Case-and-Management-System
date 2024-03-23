<?php
session_start();
include ("./connection/connection_db.php");
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <title>Blotter</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSS SIDEBAR -->
        <link href="./styles/sidebar.css" rel="stylesheet">
        <!-- CSS FOR TABLE -->
        <link href="./styles/table.css" rel="stylesheet">
        <!-- CSS FOR FORM -->
        <link href="./styles/form.css" rel="stylesheet">

        <link href="a.css" rel="stylesheet">

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
                <span class="text">Blotter</span>
            </div>

            <!-- TABLE -->
            <main class="table" id="customers_table">
                <section class="table__header">
                    <!-- <h1>Case List</h1> -->

                    <!-- SEARCH -->
                    <div class="input-group">
                        <input type="search" placeholder="Search Data...">
                        <!-- <img src="images/search.png" alt=""> -->
                        <span><i class='bx bx-search-alt' ></i></span>
                    </div>

                    <!-- EXPORTING TO PDF -->
                    <!-- <div class="export__file">
                        <label for="export-file" class="export__file-btn" title="Export File"></label>
                        <input type="checkbox" id="export-file">
                        <div class="export__file-options">
                            <label>Export As &nbsp; &#10140;</label>
                            <label for="export-file" id="toPDF">PDF <img src="images/pdf.png" alt=""></label>
                            <label for="export-file" id="toJSON">JSON <img src="images/json.png" alt=""></label>
                            <label for="export-file" id="toCSV">CSV <img src="images/csv.png" alt=""></label>
                            <label for="export-file" id="toEXCEL">EXCEL <img src="images/excel.png" alt=""></label>
                        </div>
                    </div> -->

                    <!-- ADD POPUP FORM -->
                <button class="add-btn" data-modal="modalOne" id="addCaseButton">New Case
                    <span><i class='bx bxs-file-plus' ></i></span>
                </button>
                </section>

                <div id="overlay"></div>

                
                <!--Add form-->
                <div class="add-form">
                    <div class="form-head">

                        <h3>Add New Case</h3>

                        <button class="close-btn"> x </button>

                    </div>

                    <div class="form-content">

                        <form action="./connection/add_DB.php" method="POST">

                            <div class="complaint-details">

                                <div class="input-field">
                                    <label>Barangay Case No:</label>
                                    <input type="number" name="blotter_id" id="case-num"
                                        placeholder="enter barangay case no.">

                                </div>

                                <div class="input-field">
                                    <label>Report Date:</label>
                                    <input type="date" name="date" required>

                                </div>

                            </div>


                            <section class="complainant-info">

                                <h5>Complainant's Personal Information</h5>

                                <div class="complainant-details">


                                    <div class="input-field">
                                        <label>Last name </label>
                                        <input type="text" name="complainant_last" placeholder="enter your Last Name"
                                            required>

                                    </div>

                                    <div class="input-field">
                                        <label>First name </label>
                                        <input type="text" name="complainant_first" placeholder="enter your First Name"
                                            required>

                                    </div>

                                    <div class="input-field">
                                        <label>Middle name </label>
                                        <input type="text" name="complainant_middle" placeholder="enter your Last Name"
                                            required>

                                    </div>

                                    <div class="input-field">
                                        <label>Address</label>
                                        <input type="text" name="complainant_address" placeholder="enter house number"
                                            required>
                                    </div>

                                    <div class="input-field">
                                        <label for="phone">Contact number:</label>
                                        <input type="tel" id="cellphone" name="complainant_contact" pattern="[0-9]{11}"
                                            placeholder="Enter contact number">
                                    </div>

                                </div>


                            </section>

                            <section class="respondent-info">

                                <h5>Respondent's Personal Information</h5>

                                <div class="respondent-details">

                                    <div class="input-field">
                                        <label>Last name </label>
                                        <input type="text" name="respondent_last" placeholder="enter your Last Name"
                                            required>

                                    </div>

                                    <div class="input-field">
                                        <label>First name </label>
                                        <input type="text" name="respondent_first" placeholder="enter your First Name"
                                            required>

                                    </div>

                                    <div class="input-field">
                                        <label>Middle name </label>
                                        <input type="text" name="respondent_middle" placeholder="enter your Last Name"
                                            required>

                                    </div>

                                    <div class="input-field">
                                        <label>Address</label>
                                        <input type="text" name="respondent_address" placeholder="enter house number"
                                            required>

                                    </div>

                                    <div class="input-field">
                                        <label for="phone">Contact number:</label>
                                        <input type="tel" name="respondent_contact" placeholder="+63"
                                            pattern="[0-9]{11}">
                                    </div>

                                </div>


                            </section>

                            <section class="complaint-textbox">
                                <h5>BLOTTER</h5>
                                <div class="complaint-info">
                                    <textarea id="myTextarea" name="complaint" rows="50" cols="50"
                                        placeholder="Enter complaint here..."></textarea>
                                </div>
                            </section>

                            <section class="bottom-buttons">

                                <div class="buttons" action="./connection/add_DB.php" method="POST">
                                    <button type="submit" class="addcase-btn" name="addcase">Add Case</button>
                                </div>
                                <div class="buttons">
                                    <button class="cancel-btn">Cancel</button>
                                </div>

                            </section>

                        </form>

                    </div>
                </div>

                <!-- TABLE BODY -->
                <section class="table__body">
                    <table>
                        <thead>
                            <tr>
                                <th> No. <span class="icon-arrow">&UpArrow;</span></th>
                                <th> Complainant <span class="icon-arrow">&UpArrow;</span></th>
                                <!-- <th> Location <span class="icon-arrow">&UpArrow;</span></th> -->
                                <th> Respondent <span class="icon-arrow">&UpArrow;</span></th>
                                <th> Date <span class="icon-arrow">&UpArrow;</span></th>
                                <th> Status <span class="icon-arrow">&UpArrow;</span></th>
                                <th> Action <span class="icon-arrow">&UpArrow;</span></th>
                            </tr>
                        </thead>

                        <tbody>
                            <!-- DB CONNECTION -->
                            <?php
                            $fetch_query     = "SELECT * FROM blotter";
                            $fetch_query_run = mysqli_query($conn, $fetch_query);

                            if (mysqli_num_rows($fetch_query_run) > 0) {
                                while ($row = mysqli_fetch_array($fetch_query_run)) {
                                    ?>

                                    <tr>
                                        <td> <?php echo $row['blotter_id']; ?> </td>
                                        <td> <?php echo $row['complainant_lname'] . ", " . $row['complainant_fname'] . " " . $row['complainant_mname']; ?>
                                        </td>
                                        <td> <?php echo $row['respondent_lname'] . ", " . $row['respondent_fname'] . " " . $row['respondent_mname']; ?>
                                        </td>
                                        <td> <?php echo $row['date']; ?> </td>
                                        <td> <?php echo $row['status']; ?> </td>
                                        <td>
                                            <a class="action-btns del-btn" 
                                                href="./connection/delete_DB.php?blotter_id=<?php echo $row['blotter_id']; ?>">Delete
                                               <span><i class='bx bx-trash' ></i></span>
                                            </a>
                                            <br>
                                            <a class="action-btns edit-btn" data-modal="modalOne" id="editCaseButton">Edit
                                            <span><i class='bx bx-edit-alt'></i></span>
                                            </a>

                                            <!-- EDIT POPUP FORM -->
                                            <div class="edit-form">
                                                <div class="form-head">

                                                    <h3>EDIT</h3>

                                                    <button class="close-btn"> x </button>

                                                </div>

                                                <div class="form-content">

                                                    <form action="./connection/edit_DB.php" method="POST">

                                                        <div class="complaint-details">

                                                            <div class="input-field">
                                                                <label>Barangay Case No:</label>
                                                                <input type="number" name="blotter_id" id="case-num"
                                                                    value="<?php echo $row["blotter_id"]; ?>">

                                                            </div>

                                                            <div class="input-field">
                                                                <label>Report Date:</label>
                                                                <input type="date" name="date"
                                                                    value="<?php echo $row["date"]; ?>" required>

                                                            </div>

                                                        </div>


                                                        <section class="complainant-info">

                                                            <h5>Complainant's Personal Information</h5>

                                                            <div class="complainant-details">

                                                                <div class="input-field">
                                                                    <label>Last name </label>
                                                                    <input type="text" name="complainant_last"
                                                                        value="<?php echo $row["complainant_lname"]; ?>"
                                                                        required>

                                                                </div>

                                                                <div class="input-field">
                                                                    <label>First name </label>
                                                                    <input type="text" name="complainant_first"
                                                                        value="<?php echo $row["complainant_fname"]; ?>"
                                                                        required>

                                                                </div>

                                                                <div class="input-field">
                                                                    <label>Middle name </label>
                                                                    <input type="text" name="complainant_middle"
                                                                        value="<?php echo $row["complainant_mname"]; ?>"
                                                                        required>

                                                                </div>

                                                                <div class="input-field">
                                                                    <label>Address</label>
                                                                    <input type="text" name="complainant_address"
                                                                        value="<?php echo $row["complainant_address"]; ?>"
                                                                        required>

                                                                </div>

                                                                <div class="input-field">
                                                                    <label for="phone">Contact number:</label>
                                                                    <input type="tel" id="cellphone" name="complainant_contact"
                                                                        pattern="[0-9]{11}"
                                                                        value="<?php echo $row["complainant_contact"]; ?>">
                                                                </div>

                                                            </div>


                                                        </section>

                                                        <section class="respondent-info">

                                                            <h5>Respondent's Personal Information</h5>

                                                            <div class="respondent-details">

                                                                <div class="input-field">
                                                                    <label>Last name </label>
                                                                    <input type="text" name="respondent_last"
                                                                        value="<?php echo $row["respondent_lname"]; ?>"
                                                                        required>

                                                                </div>

                                                                <div class="input-field">
                                                                    <label>First name </label>
                                                                    <input type="text" name="respondent_first"
                                                                        value="<?php echo $row["respondent_fname"]; ?>"
                                                                        required>

                                                                </div>

                                                                <div class="input-field">
                                                                    <label>Middle name </label>
                                                                    <input type="text" name="respondent_middle"
                                                                        value="<?php echo $row["respondent_mname"]; ?>"
                                                                        required>

                                                                </div>

                                                                <div class="input-field">
                                                                    <label>Address</label>
                                                                    <input type="text" name="respondent_address"
                                                                        value="<?php echo $row["respondent_address"]; ?>"
                                                                        required>

                                                                </div>

                                                                <div class="input-field">
                                                                    <label for="phone">Contact number:</label>
                                                                    <input type="tel" name="respondent_contact"
                                                                        value="<?php echo $row["respondent_contact"]; ?>"
                                                                        pattern="[0-9]{11}">
                                                                </div>

                                                            </div>


                                                        </section>

                                                        <section class="complaint-textbox">
                                                            <h5>BLOTTER</h5>
                                                            <div class="complaint-info">
                                                                <textarea id="myTextarea" name="complaint" rows="50"
                                                                    cols="50"><?php echo $row["complaint"]; ?></textarea>
                                                            </div>
                                                        </section>

                                                        <section class="bottom-buttons">

                                                            <div class="buttons" action="./connection/edit_DB.php"
                                                                method="POST">
                                                                <button type="submit" class="addcase-btn"
                                                                    name="editCase">Update</button>
                                                            </div>
                                                            <div class="buttons">
                                                                <button class="cancel-btn">Cancel</button>
                                                            </div>

                                                        </section>

                                                    </form>

                                                </div>
                                            </div>

                                            <button class="action-btns view-btn" data-modal="modalOne" id="editCaseButton">View 
                                                <span><i class='bx bx-book-open' ></i></span>
                                            </button>

                                        </td>
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
        <!-- JS FOR POPUP MODAL -->
        <script src="./scripts/popup_modal.js"></script>

    </body>

</html>
