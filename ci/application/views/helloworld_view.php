<!DOCTYPE html>

<head>
    <title>
        test
    </title>
</head>
<body>

    <table style="border: 1px solid; width: 500px;">
        <tr>
            <?php foreach ($xyz as $lmn): ?>
                <td style="margin-right: 50px;">
                    <?php echo $lmn->title; ?>
                </td>
                <td style="margin-right: 50px;">
                    <?php echo $lmn->text; ?>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
