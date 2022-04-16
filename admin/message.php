
<?php

include_once("header.php");


?>
<table class="table table-striped table-hover m-5">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Message</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
      <?php 

    include_once("../config.php");
      
    $sql = "SELECT * FROM message";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {

        $i = 0;
    // output data of each row
    while($row = $result->fetch_assoc()) {
      
        $i++;
      ?>
    <tr>
      <th scope="row"><?php echo  $i; ?></th>
      <td><?php echo  $row["name"]; ?></td>
      <td><?php echo  $row["email"]; ?></td>
      <td><?php echo  $row["message"]; ?></td>
      <td><a href="delete.php?id=<?php echo  $row["id"]; ?>">Delete</a></td>
    </tr>

    <?php }
    
    }

    $conn->close();
    
    ?>
    
  </tbody>
</table>

<?php

include_once("footer.php");

?>