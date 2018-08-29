<?php

  define ('__CONFIG__', true);
  require_once "inc/config.php";

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="robots" content="follow">

    <title>Login</title>

    <!--<base href="/" />-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.24/css/uikit.min.css" />
  </head>

  <body>

  	<div class="uk-section uk-container">
  		<div class="uk-grid uk-child-width-1-3@s uk-child-width-1-1" uk-grid>
			<form class="uk-form-stacked js-login">

          <H1>Welcome</H1>

			    <div class="uk-margin">
			        <label class="uk-form-label" for="form-stacked-text">Email address</label>
			        <div class="uk-form-controls">
			            <input class="uk-input" id="email" type="email" required='required' placeholder="email@email.com">
			        </div>
			    </div>

			    <div class="uk-margin">
			        <label class="uk-form-label" for="form-stacked-text">Password</label>
			        <div class="uk-form-controls">
			            <input class="uk-input" id="password" type="password" required='required' placeholder="Your Password">
			        </div>
			    </div>

			    <div class="uk-margin">
			        <button class="uk-button uk-button-default" type="submit">Login</button>
			    </div>

			</form>
  		</div>
  	</div>

    <div class="uk-section uk-container">
      <p>
        <a href="./index.php">Back to main site</a>
      </p>
    </div>

  <?php
  require_once "inc/footer.php";
  ?>

  </body>
</html>
