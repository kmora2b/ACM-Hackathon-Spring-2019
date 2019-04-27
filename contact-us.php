<?php
    include("base.php"); 
    include('form_process.php');
?>

<div class="contactGrid"> 
  <form class ="contact" action="<?= htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
    <h2 class = "title">Contact Us</h2>
    <div class="wDivider"></div>
    <h4 class = "contactAside">Contact us with comments, questions, or to report bugs on this site, we would love to hear from you!</h4>
    <fieldset>
      <input class = "field" placeholder="Name" type="text" name="name" value="<?= $name ?>" tabindex="1" autofocus>
      <span class="error"><?= $name_error ?></span>
    </fieldset>
    <fieldset>
      <input class = "field" placeholder="Email" type="text" name="email" value="<?= $email ?>" tabindex="2">
      <span class="error"><?= $email_error ?></span>
    </fieldset>
    <fieldset>
      <input class = "field" placeholder="Phone" type="text" name="phone" value="<?= $phone ?>" tabindex="3">
      <span class="error"><?= $phone_error ?></span>
    </fieldset>
    <fieldset>
      <input class = "field" placeholder="Subject" type="text" name="subject" value="<?= $subject ?>" tabindex="4" >
      <span class="error"><?= $subject_error ?></span>
    </fieldset>
    <fieldset>
      <textarea class = "field" placeholder = "Message" value="<?= $message ?>" name="message" tabindex="5"></textarea>
    </fieldset>
    <fieldset>
      <button class = "submitButton" name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
    </fieldset>
    <div class="success"><?= $success ?></div>
  </form>
</div>

