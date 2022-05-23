<?php require "./views/partials/top.php"; ?>
<?php require "./views/partials/navbar.php"; ?>

<div class="container">
    <h1>All rents</h1>
    <div class="row">
        <div class="col-10 offset1-">
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>User</th>
                        <th>Phone</th>
                        <th>Provider</th>
                        <th>Start date</th>
                        <th>End date</th>
                        <th>Edit</th>
                        <th>Delete</th>

                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($rents as $rent) : ?>
                    <tr>
                        <th><?php echo $rent->id; ?></th>
                        <th><?php echo $rent->user; ?></th>
                        <th><?php echo $rent->phone; ?></th>
                        <th><?php echo $rent->provider; ?></th>
                        <th><?php echo displayDate($rent->start_date); ?></th>
                        <th><?php echo displayDate($rent->end_date); ?></th>
                        <th><a class="btn btn-warning" href="edit_rent.php">Edit</a></th>
                        <th><a class="btn btn-danger" href="delete_rent.php?id=<?php echo $rent->id; ?>">Delete</a></th>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            </table>
        </div>
    </div>
</div>

<?php require "./views/partials/bottom.php" ?>