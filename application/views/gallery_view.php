<div id="gallery">
    <?php
    if (isset($images) && count($images)):
        foreach ($images as $image):
    ?>
    <div>
        <a href="<?php echo $image['url'] ;?>">
            <img src="<?php echo $image['thumb_url']; ?>"/>
        </a>
    </div>

    <?php endforeach;
else: ?>
        <div>
            <h2>
                please upload an image
            </h2>
        </div>
<?php endif; ?>
</div>

<div id="upload">
    <?php
    echo form_open_multipart('gallery');
    echo form_upload('userfile');
    echo form_submit('upload', 'Upload');
    echo form_close();
    ?>
</div>

