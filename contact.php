<!DOCTYPE html>

<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $from = 'From: Info@metroperccoffee';
    $to = 'info@metroperccoffee.com';
    $subject = 'Info';

    $body = "From: $name\n email:$email\n Message:\n $message\n";

    if ($_POST['submit']) {
        if (mail($to, $subject, $body, $from)) {
            echo "Your Message Has Been Sent!";
        }
    }


?>
<?php include ("header.html"); ?>
<?php include ("nav_menu.html"); ?>

</div>

<div id="container" class="cf">


<h1 class="formTitle">Contact Us</h1>
<form class="contact" method="post" action="contact.php">

    <label for="name">Your Name</label>
    <input name="name" autofocus="autofocus" type="text">

    <label for="email">Email</label>
    <input name="email" type="email">

    <label for="message">Message</label>
    <textarea name="message" placeholder="Type Here"></textarea>

    <input id="submit" name="submit" type="submit" value="Submit">
</form>
</div>
</body>
</html>