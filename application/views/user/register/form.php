<?php echo Form::open('register');?>
<ul>
    <li>
        <label for="username">Username:</label><input type="text" value="" name="username"/>
    </li>
    <li>
        <label for="password">Password</label><input type="password" value="" name="password"/>
    </li>
    <li>
        <label for="repassword">Password again</label><input type="password" value="" name="password_confirm"/>
    </li>
    <li>
        <label for="email">email</label><input type="text" value="" name="email"/>
    </li>
    <li>
        <label for="first">Firstname</label><input type="text" value="" name="firstname"/>
    </li>
    <li>
        <label for="lastname">Lastname</label><input type="text" value="" name="lastname"/>
    </li>
    <li>
        <input type="submit" value="submit" />
    </li>
</ul>
<?php echo Form::close();?>
