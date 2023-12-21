<!-- subscribe-get.php?email=abc%40gmail.com&pswd=123456&subscribe=subscribe%21 -->
Your email is: <?php echo $_POST['email'] ?> <br>
Your password  is: <?php echo $_POST['pswd'] ?> <br>
<pre>
<?php var_dump($_REQUEST); ?>
</pre>
<pre>
<?php echo $_SERVER['REQUEST_METHOD']; ?>
</pre>