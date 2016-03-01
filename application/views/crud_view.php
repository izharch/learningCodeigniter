<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>TEST</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>

    <style type="text/css" >
        label {
            display: block;
        }
        
        .nullstyle {
            text-decoration: none;
        }
        
    </style>

    <body>
        <h2>
            create
        </h2>
        <?php echo form_open('crud_controller/add_records') ?>
        <p>
            <label for="title">Title:</label>
            <input type="text" id="title" name="title"/> 
        </p>
        <p>
            <label for="author">Author:</label>
            <input type="text" id="author" name="author"/>
        </p>
        <p>
            <label for="contents">Content:</label>
            <input type="text" id="content" name="content"/>
        </p>

        <input type="submit" value="submit"/>


        <?php echo form_close(); ?>
        
        
        
    
        <button type="button" class="nullstyle" value="view"/><?php echo anchor('crud_controller/view_records', 'view'); ?> </button>
    <a class="nullstyle" href="google.com" >abc</a>
    </body>
</html>
