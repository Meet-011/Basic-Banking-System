<!DOCTYPE html>
<html lang="en">

<head>
    <title>Money Transfer </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="https://www.thesparksfoundationsingapore.org/images/logo_small.png" type="image/png">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


    <link rel="stylesheet" href="../css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Alegreya Sans SC' rel='stylesheet'>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">

   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    
   
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <style>
        .mt-0 {
            padding: 10px;
            top: 0;

        }

        * {
            font-family: Poppins;
        }
    </style>
</head>

<body>
    <?php
    include './connection.php';
    $sql = "SELECT * FROM clients";
    $result = mysqli_query($conn, $sql);
    ?>
    <?php
    include './navbar.php';
    ?>
    <div class="center mt-0 bg-info text-white accent-3">
       <div class="text-warning"  ><h4> <b>Money Transfer</b></h4></div>
        <h6>Select Account and Enter Your Amount to Whom you want to Send Money</h6>
    </div>
    <div class="container">
    <br />
    <div class="row">
        <div class="col">

    <div class="container-fluid table-responsive-sm">
    <table class="table table-hover table-bordered">
    <thead>
            <tr>
                    <th scope="col" class="text-center py-2">Client Id</th>
                    <th scope="col" class="text-center py-2">Name</th>
                    <th scope="col" class="text-center py-2">E-Mail</th>
                    <th scope="col" class="text-center py-2">Bank Balance</th>
                    <th scope="col" class="text-center py-2">Perform Transaction</th>
            </tr>
                        </thead>
                        <tbody>
                            <?php
                            if (isset($result)) {
                                while ($rows = mysqli_fetch_assoc($result)) {
                            ?>
            <tr>
                    <td class="center py-2"><?php echo (isset($rows['c_id']) ? $rows['c_id'] : ''); ?></td>
                    <td class="center py-2"><?php echo (isset($rows['c_name']) ? $rows['c_name'] : ''); ?></td>
                    <td class="center py-2"><?php echo (isset($rows['c_mail']) ? $rows['c_mail'] : ''); ?></td>
                    <td class="center py-2"><?php echo (isset($rows['c_balance']) ? $rows['c_balance'] : ''); ?></td>
                    <td class="center"><a href="userdetails.php?c_id=<?php echo $rows['c_id']; ?>">     <button type="button" class="btn btn-outline-primary waves-effect"><i class="fas fa-sun pr-2" aria-hidden="true"></i>Send Money</button></a></td>
            </tr>
                            <?php
                                }
                            }
                            ?>

                </tbody>
            </table>
        </div>
        </div>
    </div>
    </div>
   
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>

</html>