<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Barangay Form</title>
        <style>
            body {
                font-family: Arial, sans-serif;
            }

            .container {
                max-width: 600px;
                margin: 0 auto;
                border: 2px solid #000;
                padding: 20px;
                position: relative;
            }

            .red-line {
                position: absolute;
                top: 0;
                left: 0;
                right: 0;
                height: 3px;
                background-color: red;
            }

            .logo {
                max-width: 100px;
                height: auto;
            }

            .title {
                text-align: center;
                margin-bottom: 10px;
            }

            hr {
                margin: 20px 0;
            }

            label {
                display: block;
                margin-bottom: 5px;
            }

            textarea {
                width: 100%;
                height: 100px;
                resize: none;
            }

            .footer {
                margin-top: 20px;
            }

            .footer hr {
                margin: 20px 0;
                border: none;
                border-top: 2px solid #000;
            }
        </style>
    </head>

    <body>
        <div class="container">
            <div class="red-line"></div>
            <img src="barangay_logo_left.png" alt="Barangay Logo Left" class="logo"
                style="position: absolute; top: 10px; left: 10px;">
            <img src="barangay_logo_right.png" alt="Barangay Logo Right" class="logo"
                style="position: absolute; top: 10px; right: 10px;">
            <h2 class="title">Republika ng Pilipinas <br> Lungsod ng Taguig <br> Barangay Upper Bicutan</h2>
            <hr>
            <h3 class="title">Office of the Lupong Tagapamayapa</h3>
            <div class="complainant">
                <div style="float: left; width: 48%;">
                    <label for="complainant">Complainant's Name:</label>
                    <input type="text" id="complainant" name="complainant">
                </div>
                <div style="float: right; width: 48%;">
                    <label for="case_number">Barangay Case No.:</label>
                    <input type="text" id="case_number" name="case_number">
                    <label for="for">For:</label>
                    <textarea id="for" name="for"></textarea>
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
            <p>THEREFORE, I/WE pray that the following relief/s be granted to me/us in accordance with law and/or
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
                <p>Block 52 Lot 27 Phase 2, A. Bonifacio Ave., <br> Upper Bicutan, Taguig City <br> Metro Manila 1633
                    <br> Tel. No. 8838-2296
                </p>
                <img src="barangay_logo_right.png" alt="Barangay Logo Right" class="logo" style="float: right;">
            </div>
        </div>
    </body>

</html>