<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/cards.css">
    <title>Contact Form</title>
</head>

<body>
    <?php include('../../../Database/Connection.php'); ?>
    <?php include('../components/header.php'); ?>

    <div class="content">
        <h1 style="text-align: center">Contact Us</h1>

        <form action="process_contact_form.php" method="post" class="contact-form">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="message">Message:</label>
            <textarea id="message" name="message" rows="4" required></textarea>

            <button type="submit">Submit</button>
        </form>
    </div>
    <?php include('../components/footer.php'); ?>
</body>

</html>
