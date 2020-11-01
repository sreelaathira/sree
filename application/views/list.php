<!DOCTYPE html>
<head>
</head>
<body>
<table>
    <tr>
        <th> name</th>
        <th> address</th>
        <th> email</th>
        <th> mob</th>
    </tr>
    <?php
    if(!empty ($users))
    {
        foreach($users as $user)
        {
    ?>
    <tr>
      <td> <?php echo $user['name']?></td>
      <td> <?php echo $user['address']?></td>
      <td> <?php echo $user['email']?></td>
      <td><?php echo $user['mob']?></td>
      <td><img src="<?php echo base_url(); ?>upload/<?php echo $user['image']; ?>"></td>
    </tr>
    <?php
    }
    }
    ?>    
</table>
</body>
</html>
