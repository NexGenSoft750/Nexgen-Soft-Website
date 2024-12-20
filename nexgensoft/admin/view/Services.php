<?php echo $header; ?>
<div class="d-flex">
    <div>
        <?php echo $sideBar; ?>
    </div>
    <div class="p-4" style="width: 100%;">
        <?php if ($success) { ?>
            <div class="alert alert-success" role="alert">
                <?php echo $success; ?>
            </div>
        <?php } ?>
        <div style="text-align: right;">
            <a class="btn btn-primary" href="<?= $action ?>">Add</a>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Description</th>
                    <th scope="col">Slug</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                <?php if ($services) {
                    foreach ($services as $service) {
                ?>
                        <tr>
                            <th scope="row"><?= $service['service_id'] ?></th>
                            <td><?= $service['service_name'] ?></td>
                            <td><?= $service['service_description'] ?></td>
                            <td><?= $service['services_slug'] ?></td>
                            <td><a class="btn btn-primary" href="<?= $service['update_action'] ?>">Edit</a></td>
                            <td><a class="btn btn-danger" href="<?= $service['delete_action'] ?>">Delete</a></td>
                        </tr>
                <?php }
                }
                ?>
            </tbody>
        </table>
    </div>
</div>
<?php echo $footer; ?>