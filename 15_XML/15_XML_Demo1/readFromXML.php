<!-- 
    Author: Riya Joshi
    For: Simform Practice
    Course: PHP XML Tutorial
-->

<?php

// Load XML File into a variable
$xml = simplexml_load_file('employees.xml');

$list = $xml-> record;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fetch From XML</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.4/css/jquery.dataTables.min.css">
</head>
<body>

    <h2 class="text-center my-4">Employee Listing</h2>

    <!-- Container for Table -->
    <div class="container">
        <table class="table" id="employees_table">
            <thead>
                <tr>
                    <th scope="col">S.No</th>
                    <th scope="col">Name</th>
                    <th scope="col">Position</th>
                </tr>
            </thead>
            <tbody>
                <?php
                for ($i = 0; $i < count($list); $i++) { 
                    echo "<tr>";
                    echo "<th scope='row'>" . $list[$i]->attributes()->man_no . "</th>";
                    echo "<td>" . $list[$i]->name . "</td>";        
                    echo "<td>" . $list[$i]->position . "</td>";         
                    echo "</tr>";  
                }
                ?>
            </tbody>
        </table>
    </div>
    <hr />

    <!-- jQuery -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <!-- JavaScript: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>

    <!-- DataTable -->
    <script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
    <script>
        // Apply DataTable
        $(document).ready(function () {
            $('#employees_table').DataTable();
        });
    </script>
</body>
</html>