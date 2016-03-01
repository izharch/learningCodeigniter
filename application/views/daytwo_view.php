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
        </tr>
        <?php foreach ($data as $r) : ?>
            <tr>
                <td>
                    <?php echo $r->id; ?>
                </td>
                <td>
                    <?php echo $r->title; ?>
                </td>
                <td>
                    <?php echo $r->author; ?>
                </td>
                <td>
                    <?php echo $r->contents; ?>
                </td>
            </tr>

        <?php endforeach; ?>
    </table>

</body>
