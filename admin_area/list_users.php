<div class="container">
<h1 class="red">All users</h1>
<table class="view-user">
    <tr>
        <th>ID</th>
        <th>Username</th>
        <th>Email</th>
        <th>Address</th>
        <th>Phone</th>
    </tr>
    
        <?php
            $get_user = "SELECT * FROM `user_table`";
            $result = mysqli_query($con, $get_user);
            $number = 0;
            
            while($row=mysqli_fetch_assoc($result)){
                $user_id = $row['user_id'];
                $user_name = $row['user_name'];
                $user_email = $row['user_email'];
                $user_address = $row['user_address'];
                $user_phone = $row['user_phone'];
                $number++;
        ?>
        <tr>
            <td><?php echo $number; ?></td>
            <td><?php echo $user_name; ?></td>
            <td><?php echo $user_email; ?></td>
            <td><?php echo $user_address; ?></td>
            <td><?php echo $user_phone; ?></td>
        </tr>
        <?php
            }
        ?>
</table>

        </div>