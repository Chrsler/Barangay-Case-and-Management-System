<!DOCTYPE html>
<html lang="en">

    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSS -->
        <link href="a.css" rel="stylesheet">


        <!-- add blotter form show/hide -->

        <script>
            document.addEventListener('DOMContentLoaded', function ()
            {
                const addCaseButton = document.getElementById('addCaseButton');
                const addForm = document.querySelector('.add-form');
                const overlay = document.getElementById('overlay');

                addCaseButton.addEventListener('click', function ()
                {
                    addForm.classList.toggle('show-form');
                    overlay.style.display = addForm.classList.contains('show-form') ? 'block' : 'none';
                });

                const closeBtn = document.querySelector('.close-btn');
                closeBtn.addEventListener('click', function ()
                {
                    addForm.classList.remove('show-form');
                    overlay.style.display = 'none';
                });
            });


        </script>


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
                    <a href="">
                        <i class='bx bx-grid-alt'></i>
                        <span class="link_name">Dashboard</span>
                    </a>
                    <ul class="sub-menu blank">
                        <li><a class="link_name" href="">Dashboard</a></li>
                    </ul>
                </li>
                <li>
                    <a href="">
                        <i class='bx bx-task-x'></i>
                        <span class="link_name">Blotter</span>
                    </a>
                    <ul class="sub-menu blank">
                        <li><a class="link_name" href="">Blotter</a></li>
                    </ul>
                </li>

                <li>
                    <div class="iocn-link">
                        <a href="">
                            <i class='bx bx-file'></i>
                            <span class="link_name">Case List</span>
                        </a>
                        <i class='bx bx-chevron-down arrow'></i>
                    </div>
                    <ul class="sub-menu">
                        <li><a class="link_name" href="">Case List</a></li>
                        <li><a href="mediation.php">Mediation</a></li>
                        <li><a href="">Conciliation</a></li>
                        <li><a href="">Block</a></li>
                    </ul>
                </li>

                <li>
                    <a href="">
                        <i class='bx bx-line-chart'></i>
                        <span class="link_name">Report</span>
                    </a>
                    <ul class="sub-menu blank">
                        <li><a class="link_name" href="">Report</a></li>
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
                <span class="text">Blotter</span>


            </div>

            <!----------------------------------------------------------------------------------------------------------------------------------------------->
            <!-------------------------------------------------------------table----------------------------------------------------------------------------->


            <main class="table" id="customers_table">

                <section class="table__header">

                    <div class="input-group">

                        <input type="search" placeholder="Search Data...">
                        <img src="images/search.png" alt="">

                    </div>

                    <button class="add-case-btn" id="addCaseButton">Add Case</button>




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
                                <th> Customer <span class="icon-arrow">&UpArrow;</span></th>
                                <th> Location <span class="icon-arrow">&UpArrow;</span></th>
                                <th> Date <span class="icon-arrow">&UpArrow;</span></th>
                                <th> Status <span class="icon-arrow">&UpArrow;</span></th>
                                <th> Action <span class="icon-arrow">&UpArrow;</span></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td> 1 </td>
                                <td> <img src="images/Zinzu Chan Lee.jpg" alt="">Zinzu Chan Lee</td>
                                <td> Seoul </td>
                                <td> 17 Dec, 2022 </td>
                                <td>
                                    <p class="status delivered">Done</p>
                                </td>
                                <td> <strong> View | Delete </strong></td>
                            </tr>
                            <tr>
                                <td> 2 </td>
                                <td><img src="images/Jeet Saru.png" alt=""> Jeet Saru </td>
                                <td> Kathmandu </td>
                                <td> 27 Aug, 2023 </td>
                                <td>
                                    <p class="status cancelled">Cancelled</p>
                                </td>
                                <td> <strong>View | Delete </strong> </td>
                            </tr>
                            <tr>
                                <td> 3</td>
                                <td><img src="images/Sonal Gharti.jpg" alt=""> Sonal Gharti </td>
                                <td> Tokyo </td>
                                <td> 14 Mar, 2023 </td>
                                <td>
                                    <p class="status shipped">New</p>
                                </td>
                                <td> <strong>View | Delete </strong> </td>
                            </tr>
                            <tr>
                                <td> 4</td>
                                <td><img src="images/Alson GC.jpg" alt=""> Alson GC </td>
                                <td> New Delhi </td>
                                <td> 25 May, 2023 </td>
                                <td>
                                    <p class="status delivered">Done</p>
                                </td>
                                <td> <strong>View | Delete </strong> </td>
                            </tr>
                            <tr>
                                <td> 5</td>
                                <td><img src="images/Sarita Limbu.jpg" alt=""> Sarita Limbu </td>
                                <td> Paris </td>
                                <td> 23 Apr, 2023 </td>
                                <td>
                                    <p class="status pending">Pending</p>
                                </td>
                                <td> <strong>View | Delete </strong> </td>
                            </tr>
                            <tr>
                                <td> 6</td>
                                <td><img src="images/Alex Gonley.jpg" alt=""> Alex Gonley </td>
                                <td> London </td>
                                <td> 23 Apr, 2023 </td>
                                <td>
                                    <p class="status cancelled">Cancelled</p>
                                </td>
                                <td> <strong>View | Delete </strong> </td>
                            </tr>
                            <tr>
                                <td> 7</td>
                                <td><img src="images/Alson GC.jpg" alt=""> Jeet Saru </td>
                                <td> New York </td>
                                <td> 20 May, 2023 </td>
                                <td>
                                    <p class="status delivered">Done</p>
                                </td>
                                <td> <strong>View | Delete </strong> </td>
                            </tr>
                            <tr>
                                <td> 8</td>
                                <td><img src="images/Sarita Limbu.jpg" alt=""> Aayat Ali Khan </td>
                                <td> Islamabad </td>
                                <td> 30 Feb, 2023 </td>
                                <td>
                                    <p class="status pending">Pending</p>
                                </td>
                                <td> <strong>View | Delete </strong> </td>
                            </tr>
                            <tr>
                                <td> 9</td>
                                <td><img src="images/Alex Gonley.jpg" alt=""> Alson GC </td>
                                <td> Dhaka </td>
                                <td> 22 Dec, 2023 </td>
                                <td>
                                    <p class="status cancelled">Cancelled</p>
                                </td>
                                <td> <strong>View | Delete </strong> </td>
                            </tr>
                            <tr>
                                <td> 9</td>
                                <td><img src="images/Alex Gonley.jpg" alt=""> Alson GC </td>
                                <td> Dhaka </td>
                                <td> 22 Dec, 2023 </td>
                                <td>
                                    <p class="status cancelled">Cancelled</p>
                                </td>
                                <td> <strong>View | Delete </strong> </td>
                            </tr>
                            <tr>
                                <td> 9</td>
                                <td><img src="images/Alex Gonley.jpg" alt=""> Alson GC </td>
                                <td> Dhaka </td>
                                <td> 22 Dec, 2023 </td>
                                <td>
                                    <p class="status cancelled">Cancelled</p>
                                </td>
                                <td> <strong>View | Delete </strong> </td>
                            </tr>
                            <tr>
                                <td> 9</td>
                                <td><img src="images/Alex Gonley.jpg" alt=""> Alson GC </td>
                                <td> Dhaka </td>
                                <td> 22 Dec, 2023 </td>
                                <td>
                                    <p class="status cancelled">Cancelled</p>
                                </td>
                                <td> <strong>View | Delete </strong> </td>
                            </tr>
                            <tr>
                                <td> 9</td>
                                <td><img src="images/Alex Gonley.jpg" alt=""> Alson GC </td>
                                <td> Dhaka </td>
                                <td> 22 Dec, 2023 </td>
                                <td>
                                    <p class="status cancelled">Cancelled</p>
                                </td>
                                <td> <strong>View | Delete </strong> </td>
                            </tr>
                        </tbody>
                    </table>
                </section>

                <div id="overlay"></div>


                <!-------------------------------------------ADD BLOTTER CASE---------------------------------------------------->
                <div class="add-form">
                    <div class="form-head">

                        <h3>Add New Case</h3>

                        <button class="close-btn"> x </button>

                    </div>

                    <div class="form-content">

                        <form action="">

                            <div class="complaint-details">

                                <div class="input-field">
                                    <label>Barangay Case No:</label>
                                    <input type="number" name="Last_Name" id="case-num"
                                        placeholder="enter barangay case no." required>

                                </div>

                                <div class="input-field">
                                    <label>Report Date:</label>
                                    <input type="date" name="First_Name" required>

                                </div>

                            </div>


                            <section class="complainant-info">

                                <h5>Complainant's Personal Information</h5>

                                <div class="complainant-details">


                                    <div class="input-field">
                                        <label>Last name </label>
                                        <input type="text" name="Last_Name" placeholder="enter your Last Name" required>

                                    </div>

                                    <div class="input-field">
                                        <label>First name </label>
                                        <input type="text" name="First_Name" placeholder="enter your First Name"
                                            required>

                                    </div>

                                    <div class="input-field">
                                        <label>Middle name </label>
                                        <input type="text" name="Last_Name" placeholder="enter your Last Name" required>

                                    </div>

                                    <div class="input-field">
                                        <label>House Number</label>
                                        <input type="text" name="Last_Name" placeholder="enter house number" required>

                                    </div>

                                    <div class="input-field">
                                        <label>Street Name</label>
                                        <input type="text" name="First_Name" placeholder="enter street name" required>

                                    </div>

                                    <div class="input-field">
                                        <label for="phone">Contact number:</label>
                                        <input type="tel" id="cellphone" name="cellphone" pattern="^(09|\+639)\d{9}$"
                                            placeholder="Enter contact number" required>
                                    </div>

                                </div>


                            </section>

                            <section class="respondent-info">

                                <h5>Respondent's Personal Information</h5>

                                <div class="respondent-details">

                                    <div class="input-field">
                                        <label>Last name </label>
                                        <input type="text" name="Last_Name" placeholder="enter your Last Name" required>

                                    </div>

                                    <div class="input-field">
                                        <label>First name </label>
                                        <input type="text" name="First_Name" placeholder="enter your First Name"
                                            required>

                                    </div>

                                    <div class="input-field">
                                        <label>Middle name </label>
                                        <input type="text" name="Last_Name" placeholder="enter your Last Name" required>

                                    </div>

                                    <div class="input-field">
                                        <label>House Number</label>
                                        <input type="text" name="Last_Name" placeholder="enter house number" required>

                                    </div>

                                    <div class="input-field">
                                        <label>Street Name</label>
                                        <input type="text" name="First_Name" placeholder="enter street name" required>

                                    </div>

                                    <div class="input-field">
                                        <label for="phone">Contact number:</label>
                                        <input type="tel" placeholder="+63" pattern="[0-11]" required>
                                    </div>

                                </div>


                            </section>

                            <section class="complaint-textbox">
                                <h5>BLOTTER</h5>
                                <div class="complaint-info">
                                    <textarea id="myTextarea" name="comments" rows="50" cols="50"
                                        placeholder="Enter complaint here..."></textarea>
                                </div>
                            </section>

                            <section class="bottom-buttons">

                                <div class="buttons">
                                    <button type="submit" class="addcase-btn">Add Case</button>

                                    <button class="cancel-btn">Cancel</button>
                                </div>

                            </section>

                        </form>

                    </div>
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

        <script src="script.js"></script>
    </body>

</html>