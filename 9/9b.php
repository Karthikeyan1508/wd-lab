<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Sender</title>
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f4f7f8;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background-color: #fff;
            padding: 40px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            width: 100%;
            max-width: 500px;
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }
        label {
            font-weight: bold;
            color: #333;
            display: block;
            margin-bottom: 8px;
        }
        input[type="email"], input[type="text"], textarea {
            width: 100%;
            padding: 12px;
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
            box-sizing: border-box;
        }
        button {
            width: 100%;
            padding: 12px;
            background-color: #28a745;
            border: none;
            border-radius: 5px;
            color: white;
            font-size: 18px;
            cursor: pointer;
        }
        button:hover {
            background-color: #218838;
        }
        .result {
            text-align: center;
            margin-top: 20px;
            color: #333;
            font-weight: bold;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Send an Email</h2>
    <form method="POST" action="">
        <label for="to">Recipient Email</label>
        <input type="email" id="to" name="to" placeholder="Enter recipient's email" required>

        <label for="subject">Subject</label>
        <input type="text" id="subject" name="subject" placeholder="Enter subject" required>

        <label for="message">Message</label>
        <textarea id="message" name="message" rows="5" placeholder="Enter your message" required></textarea>

        <button type="submit">Send Email</button>
    </form>

    <div class="result">
        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $to = $_POST['to'];
            $subject = $_POST['subject'];
            $message = $_POST['message'];
            $headers = "From: sender@example.com";

            // Send the email
            if (mail($to, $subject, $message, $headers)) {
                echo "Email successfully sent to $to";
            } else {
                echo "Failed to send email.";
            }
        }
        ?>
    </div>
</div>

</body>
</html>
