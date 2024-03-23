<?php
session_start();
include("./connection/connection_db.php");
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Log in</title>

        <!-- CSS FOR LOGIN -->
        <link rel="stylesheet" href="./styles/login.css">

        <!-- SCRIPT FOR NOTIFICATION -->
        <script src="./scripts/sweetalert.min.js"></script>

        <!-- SCRIPT FOR PREVENTING TO BACK -->
        <script src="./scripts/prevent_back.js"></script>
    </head>

    <body>

        <!-- LOG IN -->
        
        <div class="leftpart">

            <img src="./assets/left-logo.png" alt="" id="leftimg">
             
             <h1>Barangay Upper Records and Complaints Management System</h1>

        </div>

            <div class="rightpart">

            <img src="./assets/left-logo.png" alt="" id="rightimg">
            
            <div class="form-box">
                <div class="form-value">
                    <form method="POST" action="./connection/login_DB.php">
                        <h2>Log in</h2>
                        <div class="input-box">
                            <ion-icon name="person-outline"></ion-icon>
                            <input type="text" name="username" required>
                            <label for="username">Username:</label>
                        </div>
                        <div class="input-box">
                            <ion-icon name="lock-closed-outline"></ion-icon>
                            <input type="password" name="password" required>
                            <label for="password">Password:</label>
                        </div>
                        <button type="submit" name="login">Log in</button>
                    </form>
                </div>
            </div>
</div>
        

        <!-- NOTIFICATION -->
        <script>
            <?php
            if (isset($_SESSION['status']) && $_SESSION['status'] != '') {
            ?>
            swal({
                title: "<?php echo $_SESSION['status']; ?>",
                icon: '<?php echo $_SESSION['status_code']; ?>',
                button: "Ok",
            });
            <?php
            unset($_SESSION['status']);
            }
            ?>
        </script>

        <!-- SCRIPTS FOR ICONS-->
        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    </body>

</html>