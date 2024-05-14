<?php
require_once "connection.php";

// Fetch data from the database
$query = "SELECT * FROM contacts";
$result = mysqli_query($conn, $query);

// DataTables JavaScript CDN
$datatables_js_cdn = "//cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js";

// DataTables CSS CDN
$datatables_css_cdn = "//cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Admin View</title>

  <!-- DataTables CSS -->
  <link rel="stylesheet" type="text/css" href="<?php echo $datatables_css_cdn; ?>">

  <!-- Bootstrap CSS -->
  <link rel='stylesheet' href='//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css'>
  <link rel='stylesheet' href='//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css'>

</head>

<body>

  <div class="container">
    <h2>Admin View - Contacts</h2>
    <table id="contacts_table" class="display">
      <thead>
        <tr>
          <th>ID</th>
          <th>Full Name</th>
          <th>Matric Number</th>
          <th>IC Number</th>
          <th>Phone</th>
          <th>State</th>
        </tr>
      </thead>
      <tbody>
        <?php
        // Loop through each row in the result set
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>{$row['id']}</td>";
            echo "<td>{$row['full_name']}</td>";
            echo "<td>{$row['matric_number']}</td>";
            echo "<td>{$row['ic_number']}</td>";
            echo "<td>{$row['phone']}</td>";
            echo "<td>{$row['state']}</td>";
            echo "</tr>";
        }
        ?>
      </tbody>
    </table>
  </div>

  <!-- jQuery -->
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

  <!-- DataTables JavaScript -->
  <script type="text/javascript" src="<?php echo $datatables_js_cdn; ?>"></script>

  <script>
    $(document).ready(function() {
      // Initialize DataTables
      $('#contacts_table').DataTable();
    });
  </script>

</body>

</html>
