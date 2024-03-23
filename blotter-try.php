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
    <!-- <link href="./styles/table.css" rel="stylesheet"> -->
    <link href="./styles/table-try.css" rel="stylesheet">
    <!-- CSS FOR FORM -->
    <link href="./styles/form.css" rel="stylesheet">

    <link href="a.css" rel="stylesheet">

    <!-- BOX ICONS CDN LINK -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <!-- FONT AWESOME CDN LINK -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />


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
        <div class="container">

            <header>

                <div class="filterEntries">
                    <div class="entries">
                        Show <select name="" id="table_size">
                            <option value="10">10</option>
                            <option value="20">20</option>
                            <option value="50">50</option>
                            <option value="100">100</option>
                        </select> entries
                    </div>

                    <div class="filter">
                        <label for="search">Search:</label>
                        <input type="search" name="" id="search" placeholder="Enter name/city/post">
                    </div>
                </div>

                <div class="addMemberBtn">
                    <button>New member</button>
                </div>

            </header>


            <table>

                <thead>
                    <tr class="heading">
                        <th>No.</th>
                        <th>Complainant</th>
                        <th>Contact no.</th>
                        <th>Respondent</th>
                        <th>Contact no.</th>
                        <th>Complaint</th>
                        <th>Date</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>


                <tbody class="userInfo">
                    <!-- DB CONNECTION -->
                    


                    <!-- <tr><td class="empty" colspan="11" align="center">No data available in table</td></tr> -->
                    <!-- <tr>
            <td>1</td>
            <td><img src="./img/pic1.png" alt="" width="40" height="40"></td>
            <td>John Doe</td>
            <td>30</td>
            <td>New York</td>
            <td>Front-End Developer</td>
            <td>$25000</td>
            <td>03-08-2010</td>
            <td>jhondoe.net111@gmail.com</td>
            <td>924157812</td>
            <td>
                <button><i class="fa-regular fa-eye"></i></button>
                <button><i class="fa-regular fa-pen-to-square"></i></button>
                <button><i class="fa-regular fa-trash-can"></i></button>
            </td>
        </tr>
        <tr>
            <td>1</td>
            <td><img src="./img/pic1.png" alt="" width="40" height="40"></td>
            <td>John Doe</td>
            <td>30</td>
            <td>New York</td>
            <td>Front-End Developer</td>
            <td>$25000</td>
            <td>03-08-2010</td>
            <td>jhondoe.net111@gmail.com</td>
            <td>924157812</td>
            <td>
                <button><i class="fa-regular fa-eye"></i></button>
                <button><i class="fa-regular fa-pen-to-square"></i></button>
                <button><i class="fa-regular fa-trash-can"></i></button>
            </td>
        </tr>
        <tr>
            <td>1</td>
            <td><img src="./img/pic1.png" alt="" width="40" height="40"></td>
            <td>John Doe</td>
            <td>30</td>
            <td>New York</td>
            <td>Front-End Developer</td>
            <td>$25000</td>
            <td>03-08-2010</td>
            <td>jhondoe.net111@gmail.com</td>
            <td>924157812</td>
            <td>
                <button><i class="fa-regular fa-eye"></i></button>
                <button><i class="fa-regular fa-pen-to-square"></i></button>
                <button><i class="fa-regular fa-trash-can"></i></button>
            </td>
        </tr>
        <tr>
            <td>1</td>
            <td><img src="./img/pic1.png" alt="" width="40" height="40"></td>
            <td>John Doe</td>
            <td>30</td>
            <td>New York</td>
            <td>Front-End Developer</td>
            <td>$25000</td>
            <td>03-08-2010</td>
            <td>jhondoe.net111@gmail.com</td>
            <td>924157812</td>
            <td>
                <button><i class="fa-regular fa-eye"></i></button>
                <button><i class="fa-regular fa-pen-to-square"></i></button>
                <button><i class="fa-regular fa-trash-can"></i></button>
            </td>
        </tr> -->
                </tbody>

            </table>


            <footer>
                <span class="showEntries">Showing 1 to 10 of 50 entries</span>
                <div class="pagination">
                    <!-- <button>Prev</button>
        <button class="active">1</button>
        <button>2</button>
        <button>3</button>
        <button>4</button>
        <button>5</button>
        <button>Next</button> -->
                </div>
            </footer>
        </div>


        <!--Popup Form-->

        <div class="dark_bg">

            <div class="popup">
                <header>
                    <h2 class="modalTitle">Fill the Form</h2>
                    <button class="closeBtn">&times;</button>
                </header>

                <div class="body">
                    <form action="#" id="myForm">
                        <div class="imgholder">
                            <label for="uploadimg" class="upload">
                                <input type="file" name="" id="uploadimg" class="picture">
                                <i class="fa-solid fa-plus"></i>
                            </label>
                            <img src="./img/pic1.png" alt="" width="150" height="150" class="img">
                        </div>

                        <div class="inputFieldContainer">

                            <div class="nameField">
                                <div class="form_control">
                                    <label for="fName">First Name:</label>
                                    <input type="text" name="" id="fName" required>
                                </div>

                                <div class="form_control">
                                    <label for="lName">Last Name:</label>
                                    <input type="text" name="" id="lName" required>
                                </div>
                            </div>

                            <div class="ageCityField">
                                <div class="form_control">
                                    <label for="age">Age:</label>
                                    <input type="number" name="" id="age" required>
                                </div>

                                <div class="form_control">
                                    <label for="city">City:</label>
                                    <input type="text" name="" id="city" required>
                                </div>
                            </div>

                            <div class="postSalary">
                                <div class="form_control">
                                    <label for="position">Position:</label>
                                    <input type="text" name="" id="position" required>
                                </div>

                                <div class="form_control">
                                    <label for="salary">Salary:</label>
                                    <input type="text" name="" id="salary" required>
                                </div>
                            </div>

                            <div class="form_control">
                                <label for="sDate">Start Date:</label>
                                <input type="date" name="" id="sDate" required>
                            </div>

                            <div class="form_control">
                                <label for="email">Email:</label>
                                <input type="email" name="" id="email" required>
                            </div>

                            <div class="form_control">
                                <label for="phone">Phone:</label>
                                <input type="number" name="" id="phone" required>
                            </div>
                        </div>
                    </form>
                </div>

                <footer class="popupFooter">
                    <button form="myForm" class="submitBtn">Submit</button>
                </footer>
            </div>

        </div>

    </section>



    <!-- SCRIPT FOR SIDEBAR TO OPEN AND CLOSE -->
    <script>
    let arrow = document.querySelectorAll(".arrow");
    for (let i = 0; i < arrow.length; i++) {
        arrow[i].addEventListener("click", (e) => {
            let arrowParent = e.target.parentElement.parentElement;
            arrowParent.classList.toggle("showMenu");
        });
    }

    let sidebar = document.querySelector(".sidebar");
    let sidebarBtn = document.querySelector(".bx-menu-alt-left");
    console.log(sidebar);
    sidebarBtn.addEventListener("click", () => {
        sidebar.classList.toggle("close");
    });
    </script>

    <!-- JS FOR TABLE -->
    <script src="./scripts/table.js"></script>
    <!-- JS FOR POPUP MODAL -->
    <script src="./scripts/popup_modal.js"></script>

    <script src="./scripts/table-try.js"></script>

</body>

</html>