<?php
// INSERT QUERY 
// INSERT INTO `notes` (`sno`, `title`, `description`, `tstamp`) VALUES (NULL, 'Finish drawing', 'Finish ArdhaNareshwar Drawing', current_timestamp());

// Connecting to the database
$server_name = "localhost";
$user_name = "root";
$password = "";
$database = "rinotes";

$insert = false;
$update = false;
try{
    // Create a Connection
    $conn = mysqli_connect($server_name, $user_name, $password, $database);
    
    // Add Notes if method is POST
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if(isset($_POST['addBtn'])){
            $title = $_POST['title'];
            $description = $_POST['description'];            
            
            // SQL Query to insert note
            $insert_sql = "INSERT INTO `notes` ( 
                `title`, `description`
                ) VALUES (
                    '$title',
                    '$description'
                )";
            $insert_result = mysqli_query($conn, $insert_sql);
            if($insert_result){
                $insert = true;
            }
        }

        if(isset($_POST['editChanges'])){
            // Update Query for Record
            $sno = $_POST['snoEdit'];
            $title = $_POST['titleEdit'];
            $description = $_POST['descriptionEdit'];            
            
            // SQL Query to insert note
            $update_sql = "UPDATE `notes` SET ( 
                `title` = '$title', `description` = '$description'
                ) WHERE `sno` = $sno";
            $update_result = mysqli_query($conn, $update_sql);
            if($update_result){
                $update = true;
            }
        }
        
    }
}
catch(Exception $e){
    echo "Opps..! ". $e->getMessage()."<br/>";
}

?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.4/css/jquery.dataTables.min.css">

    <title>RiNotes - A Safe Place In An Unsafe World!</title>
</head>

<body>

    <!-- Edit Modal -->
    <!-- Edit trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editModal">
    Launch demo modal
    </button>

    <!-- Edit Modal -->
    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="editModalLabel">Edit Note</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="#" method="POST">
                <input type="hidden" name="snoEdit" id="snoEdit">
                <div class="mb-3">
                    <label for="title" class="form-label">Note Title</label>
                    <input type="text" class="form-control" id="titleEdit" name="titleEdit" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Note Description</label>
                    <textarea class="form-control" id="descriptionEdit" name="descriptionEdit" rows="3"></textarea>
                </div>
            </form>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary" id="editChanges" name="editChanges">Save changes</button>
        </div>
        </div>
    </div>
    </div>

    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">RiNotes</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact Us</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <?php
        // Show alert message on successful insert
        if($insert){
            ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Success!</strong> Your note has been added successfully..!
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php
        }

        // Show alert message on successful update
        if($update){
            ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Success!</strong> Your note has been updated successfully..!
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php
        }
    ?>

    <!-- Container for Main Form -->
    <div class="container my-4">
        <h2>Add a Note</h2>
        <form action="#" method="POST">
            <div class="mb-3">
                <label for="title" class="form-label">Note Title</label>
                <input type="text" class="form-control" id="title" name="title" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Note Description</label>
                <textarea class="form-control" id="description" name="description" rows="3"></textarea>
            </div>
            <button type="submit" id="addBtn" name="addBtn" class="btn btn-primary">Add Note</button>
        </form>
    </div>

    <!-- Container for Table -->
    <div class="container">        
        <table class="table" id="notes_table">
        <thead>
            <tr>
            <th scope="col">S.No</th>
            <th scope="col">Title</th>
            <th scope="col">Description</th>
            <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
        <?php
            $sql = "SELECT * FROM `notes`";
            $result = mysqli_query($conn, $sql);
            $sno = 0;
            while($row = mysqli_fetch_assoc($result)){
                $sno += 1;
                echo "<tr>";
                echo "<th scope='row'>" . $sno . "</th>";         
                echo "<td>" . $row['title'] . "</td>";        
                echo "<td>" . $row['description'] . "</td>";         
                echo "<td> <button class='edit btn btn-sm btn-primary' id=".$row['sno'].">Edit</button> 
                    <button class='delete btn btn-sm btn-danger'>Delete</button>"; 
                echo "</tr>";
            }
        ?>
        
        </tbody>
        </table>
    </div>
    <hr/>

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
        $(document).ready( function () {
            $('#notes_table').DataTable();
        } );

        // Apply Click event Listeners to Edit Buttons
        edits = document.getElementsByClassName('edit');
        Array.from(edits).forEach((element)=>{
            element.addEventListener("click", (e)=>{
                // 'e' = Button
                console.log("edit");

                // GrandParent of 'e' = 'tr' (e > td > tr)
                tr = e.target.parentNode.parentNode;
                title = tr.getElementsByTagName("td")[0].innerText;
                description = tr.getElementsByTagName("td")[1].innerText;
                console.log(title, description);

                // Set (Fetch) values in Edit Modal Elements
                titleEdit.value = title; 
                descriptionEdit.value = description;
                snoEdit.value = e.target.id;  // Original ID from Database
                console.log(e.target.id);
                $('#editModal').modal('toggle');
            })
        });
    </script>

</body>

</html>