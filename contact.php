<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio of Moin</title>
    <link rel="shortcut icon" href="images/home.png">

    <!-- box icons -->
    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css">

    <!-- custom css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <section class="contact" id="contact">
        <h2 class="heading">Contact <span>Me!</span></h2>

        <form method="post" name="contact-form">
            <div class="input-box">
                <input type="text" placeholder="Full Name" name="Name" id="name">
                <input type="email" placeholder="Email Address" name="Email" id="email">
            </div>

            <div class="input-box">
                <input type="number"  placeholder="Mobile Number" name="Number" id="number">
                <input type="text" placeholder="Email Subject" name="Subject" id="subject">
            </div>
            <textarea name="Message" id="message" cols="30" rows="10"></textarea>
            
            <input type="submit" value="Send Message" class="btn">
        </form>
    </section>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $con = new mysqli("localhost", "root", "", "portfolio");

        if ($con->connect_error) {
            die("Connection failed: " . $con->connect_error);
        }

        // Retrieve form data
        $full_name = $_POST['Name'];
        $email_address = $_POST['Email'];
        $mobile_number = $_POST['Number'];
        $email_subject = $_POST['Subject'];
        $message_text = $_POST['Message'];

        // Prepare SQL statement
        $stmt = $con->prepare("INSERT INTO contact_messages (full_name, email_address, mobile_number, email_subject, message_text) VALUES (?, ?, ?, ?, ?)");

        // Bind parameters
        $stmt->bind_param("ssiss", $full_name, $email_address, $mobile_number, $email_subject, $message_text);

        // Execute the statement
        if ($stmt->execute()) {
            echo "<script>alert('Message sent successfully!');</script>";
        } else {
            echo "<script>alert('Error: " . $con->error . "');</script>";
        }

        // Close the statement and database connection
        $stmt->close();
        $con->close();
    }
    ?>
</body>
</html>
