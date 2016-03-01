<div class="login_form">
    <h2>LOGIN</h2>
    <?php
    echo form_open('login/validate_cred');
    ?> 
    <label>User Name:</label> 
    <?php
    echo form_input('username', 'Username');
    ?> 
    <label>Password:</label>
    <?php
    echo form_password('password', 'Password');
    echo form_submit('submit', 'Submit');
    echo anchor('login/signup_user', 'Create Account');

    echo form_close();
    ?>
</div>