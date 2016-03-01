<h1>
    Create An Account
</h1>

<fieldset>
    <legend>
        Personal Information
    </legend>

    <?php
    echo form_open('login/create_member');
    echo form_input('first_name', set_value('first_name', 'First Name'));
    echo form_input('last_name', set_value('last_name' , 'Last Name'));
    echo form_input('email', set_value('email', 'Email'));
    ?>
</fieldset>
<fieldset>
    <legend>
        Account Information
    </legend>
    <?php
    echo form_input('user_name', set_value('user_name', 'User Name'));
    echo form_input('password', 'Password');
    echo form_input('password2' , 'Confirm Password');
    echo form_submit('submit', 'Create Account');
    echo form_close();
    ?>


<?php echo validation_errors('<p class="errors">'); ?>

</fieldset>