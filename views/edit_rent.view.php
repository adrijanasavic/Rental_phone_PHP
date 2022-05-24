<?php require "./views/partials/top.php"; ?>
<?php require "./views/partials/navbar.php"; ?>

<h1>Edit rent</h1>
<div class="container">
    <div class="col-10 offset-1">
        <form action="edit_rent.php" method="post">
            <input type="hidden" name="id" value="<?php echo $rents->id; ?>">
            <input class="form-control mb-3" type="text" placeholder="full name" name="user"
                value="<?php echo $rents->user; ?>">
            <select class="form-control mb-3" name="phone">
                <?php foreach ($phones as $phone) : ?>
                <option value="<?php echo $phone->brand . " " . $phone->model; ?>"
                    <?php echo $rents->phone === $phone->brand . " " . $phone->model ? "selected" : ""; ?>>
                    <?php echo "{$phone->brand} {$phone->model}"; ?>
                </option>
                <?php endforeach; ?>
            </select>

            <select class="form-control mb-3" name="provider">
                <?php foreach ($providers as $provider) : ?>
                <option value="<?php echo $provider->provider; ?>"
                    <?php echo $rents->provider === $provider->provider ? "selected" : ""; ?>>
                    <?php echo $provider->provider; ?></option>
                <?php endforeach; ?>
            </select>

            <label for="">Start Date</label>
            <input class="form-control mb-3" type="date" name="start_date" value="<?php echo $rents->start_date; ?>">

            <label for="">End Date</label>
            <input class="form-control mb-3" type="date" name="end_date" value="<?php echo $rents->end_date; ?>">

            <button class="form-control btn btn-primary">SAVE CHANGES </button>
        </form>
    </div>
</div>

<?php require "./views/partials/bottom.php" ?>