
        <table border="1" cellpadding="10" cellspacing="0">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Firstname</th>
                    <th>Middlename</th>
                    <th>Lastname</th>
                    <th>Username</th>
                    <th colspan="2">Action</th>
                </tr>
            </thead>
            <tbody>
    <?php   foreach ($record as $person) : ?>
                <tr>
                    <td><?php echo $person->user_id; ?></td>
                    <td><?php echo $person->firstname; ?></td>
                    <td><?php echo $person->middlename; ?></td>
                    <td><?php echo $person->lastname; ?></td>
                    <td><?php echo $person->username; ?></td>
                    <td><a href="<?php echo base_url('myfunctions/update_user/'.$person->user_id.''); ?>">Update</a></td>
                    <td><a href="<?php echo base_url('myfunctions/delete_user/'.$person->user_id.''); ?>">Delete</a></td>
                </tr>
    <?php   endforeach; ?>
            </tbody>
        </table>
