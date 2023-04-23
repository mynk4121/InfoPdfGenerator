<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="index.css" />
  </head>
  <body>
    <div class="container">
      <form id="contact" action="pdf.php" method="POST">
        <h3>WorkCtrl Media & IT Solutions</h3>
        <h4>This is a assignment by Mayank Agarwal</h4>
        <fieldset>
          <input
            placeholder="First Name"
            type="text"
            tabindex="1"
            required
            autofocus
            name="firstname"
          />
          <input
            placeholder="Last name"
            type="text"
            tabindex="2"
            required
            name="lastname"
          />
        </fieldset>
        <fieldset>
          <input
            placeholder="Your Phone Number"
            type="tel"
            tabindex="3"
            required
            name="phone"
          />
        </fieldset>
        <fieldset>
          <input
            placeholder="Your City"
            type="text"
            tabindex="4"
            required
            name="city"
          />
        </fieldset>
        <fieldset>
          <button
            type="submit"
            id="contact-submit"
            data-submit="...Sending"
            name="submit"
          >
            Submit
          </button>
        </fieldset>
      </form>
    </div>
  </body>
</html>
