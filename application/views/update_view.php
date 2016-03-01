<!DOCTYPE html>

<head>
    <title>
        test2
    </title>
</head>
<style type="text/css">
    th {
        border: 1px solid;
    }
    td {
        border: 1px solid;
    }
</style>
<body>

    <?php if (isset($record)): foreach ($record as $row) : ?>
            <?php echo form_open("crud_controller/edit_record/$row->id"); ?>
            <input type="text" value="<?php echo $row->id; ?>" /><br>
            <input type="text" value="<?php echo $row->title; ?>" name="title" /><br>
            <input type="text" value="<?php echo $row->author; ?>" name="author" /><br>
            <input type="text" value="<?php echo $row->contents; ?>" name="content" /><br>
            <input type="submit" value="update"/>

        <?php endforeach; ?>



<?php else : ?>
    <p>
        no records

    </p>
<?php endif; ?>

</body>

