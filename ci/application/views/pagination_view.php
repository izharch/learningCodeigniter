<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="en">
    <head>
        <title>testing</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="<?php echo base_url();?>/css/style.css" type="text/css" media="screen"/>
    </head>
    <style type="text/css">
        
    </style>
    <body>
        <h1>
            pagination test
        </h1>
        
        <?php echo $this->table->generate($records); ?>
        <?php echo $this->pagination->create_links(); ?>
    
        </body>
</html>