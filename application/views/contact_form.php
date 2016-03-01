<h1>
    Contact Us!
</h1>
<div id="contact_form">

    <?php
    echo form_open('contact/contact_us');
    echo form_input('name', 'Name', 'id="name"');
    echo form_input('email', 'Email', 'id="email"');
    $row = array(
        'name' => 'message',
        'cols' => 46,
        'rows' => 10
    );
    echo form_textarea($row, 'Message', 'id="message"');
    echo form_submit('submit', 'Send', 'id="submit"');
    echo form_close();
    ?>
</div>

<script type="text/javascript">
    $('#submit').click(function() {
        
        var name = $('#name').val();
        
        if(!name || name == 'Name'){
            alert('please enter name');
            return false;
        }

        var form_data = {
            name: $('#name').val(),
            email: $('#email').val(),
            message: $('#message').val(),
            ajax: '1'
        };

        $.ajax({
            url: "<?php echo site_url('contact/contact_us');?>",
            type: 'POST',
            data: form_data,
            success: function(msg) {
                $('#main_content').html(msg);
            }
        });
        return false;
    });

</script>