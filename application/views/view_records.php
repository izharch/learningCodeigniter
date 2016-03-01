
<style type="text/css">
    th {
        border: 1px solid;
    }
    td {
        border: 1px solid;
    }
</style>
    <table style="border: 2px solid;">

        <tr>
            <th>
                <label>id</label>
            </th>
            <th>
                <label>Title</label>
            </th>
            <th>
                <label>Author</label>
            </th>
            <th>
                <label>Contents</label>
            </th>
            <th>
                <label>Action</label>
            </th>
            <th>
                <label>Another Action</label>
            </th>
        </tr>
        <?php if (isset($record)): foreach ($record as $row) : ?>
                <tr>
                    <td>
                        <?php echo $row->id; ?>
                    </td>
                    <td>
                        <?php echo $row->title; ?>
                    </td>
                    <td>
                        <?php echo $row->author; ?>
                    </td>
                    <td>
                        <?php echo $row->contents; ?>
                    </td>
                    <td>
                        <?php echo anchor("crud_controller/delete_record/$row->id", 'Delete'); ?>
                    </td>
                    <td>
                        <?php echo anchor("crud_controller/update_record/$row->id", 'Update'); ?>
                    </td>
                </tr>
            <?php endforeach; ?>

        </table>

    <?php else : ?>
        <p>
            no records

        </p>
    <?php endif; 


