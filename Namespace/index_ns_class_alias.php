<?php
include "Html.php";
use Html\Table as T;
use Html\Row as R;

$table = new T();
$table->title = "My table";
$table->numRows = 5;

$row = new R();
$row->numCells = 3;
?>

<html>
<body>

<?php $table->message(); ?>
<?php $row->message(); ?>

</body>
</html>