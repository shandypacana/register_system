<?php
include './database/connection.php';

// See  the  data from the user_account table
// $sql = "SELECT `user_id`, `user_name`, `user_password`, `user_email` FROM `user_account`";
// $result = $con->query($sql);


?>

<table class="table">
<thead>
    <tr>
        <th>ID</th>
        <th>Users Name</th>
        <th>Users Password</th>
        <th>Users Email</th>
        
    </tr>
</thead>
<tbody>
   <?php while($row = $result->fetch_assoc()): ?>
          <tr>
            <td><?php echo $row['user_id']; ?></td>
            <td><?php echo $row['user_name']; ?></td>
            <td>************</td>
            <td><?php echo $row['user_email']; ?></td>
        </tr>
    <?php endwhile; ?>
</tbody>
</table>