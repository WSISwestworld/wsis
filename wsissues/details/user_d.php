<?php

include "../../db_conn.php";

if (isset($_GET['id'])) {

    $userID = $_GET['id'];

    $sql_get = "SELECT * FROM infoProvider WHERE userID='$userID'";

    $get_result = $server_conn->query($sql_get);

    if ($get_result->num_rows > 0) {

        while ($row = $get_result->fetch_assoc()) {

            $userID = $row['userID'];

            $FName = $row['FName'];

            $LName = $row['LName'];

            $Province = $row['Province'];

            $NIC = $row['NIC'];

            $DOB = $row['DOB'];

            $TelNo = $row['TelNo'];

            $Email = $row['Email'];

            $PostalAddress = $row['PostalAddress'];
        }
        ?>

        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">

            <title>WSIS | WATER SUPPLY ISSUES</title>

        </head>

        <body>

            <fieldset>

                <legend>Information Provider details:</legend>

                <h3>Full Name: <?php echo $FName; ?>
                    <?php echo $LName; ?>.
                </h3>
                <h3>Information Provider ID (User ID): <?php echo $userID; ?></h3>
                <h3>NIC: <?php echo $NIC; ?></h3>
                <h3>Date Of Birth: <?php echo $DOB; ?></h3>
                <h3>Phone: (+94) <?php echo $TelNo; ?></h3>
                <h3>Email: <?php echo $Email; ?></h3>
                <h3>Province: <?php echo $Province; ?></h3>
                <h3>PostalAddress: <?php echo $PostalAddress; ?></h3>

            </fieldset>

        </body>

        </html>

    <?php

    } else {

        header('Location: projects.php');

    }

}
?>