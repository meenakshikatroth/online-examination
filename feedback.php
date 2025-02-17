<?php
// Database connection
$servername = "localhost";
$username = "root"; // Change if necessary
$password = ""; // Change if necessary
$dbname = "majorproject";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle Form Submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $conn->real_escape_string($_POST['name']);
    $email = $conn->real_escape_string($_POST['email']);
    $subject = $conn->real_escape_string($_POST['subject']);
    $feedback = $conn->real_escape_string($_POST['feedback']);
    $date = date("Y-m-d"); // Current date
    $time = date("H:i:s"); // Current time

    $sql = "INSERT INTO feedback (name, email, subject, feedback, date, time) 
            VALUES ('$name', '$email', '$subject', '$feedback', '$date', '$time')";
    
    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Feedback submitted successfully!'); window.location.href='feedback.php';</script>";
    } else {
        echo "<script>alert('Error: " . $conn->error . "');</script>";
    }
}

// Fetch existing feedbacks
$sql = "SELECT name, subject, feedback, date, time FROM feedback ORDER BY id DESC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            text-align: center;
            margin: 50px;
        }
        .container {
            width: 50%;
            background: white;
            padding: 20px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            margin: auto;
        }
        input, textarea {
            width: 90%;
            margin: 10px 0;
            padding: 10px;
            border: 1px solid #ccc;
        }
        button {
            background: #28a745;
            color: white;
            padding: 10px;
            border: none;
            cursor: pointer;
        }
        button:hover {
            background: #218838;
        }
        ul {
            list-style-type: none;
            padding: 0;
        }
        li {
            background: #e9ecef;
            margin: 10px;
            padding: 10px;
            border-radius: 5px;
            text-align: left;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Feedback Form</h2>
    <form id="feedbackForm" method="POST">
        <input type="text" name="name" id="name" placeholder="Your Name" required>
        <input type="email" name="email" id="email" placeholder="Your Email" required>
        <input type="text" name="subject" id="subject" placeholder="Subject" required>
        <textarea name="feedback" id="feedback" placeholder="Your Feedback" required></textarea>
        <button type="submit">Submit</button>
    </form>
    <p id="responseMessage"></p>

    <h2>Feedbacks</h2>
    <?php if ($result->num_rows > 0) { ?>
        <ul>
            <?php while($row = $result->fetch_assoc()) { ?>
                <li>
                    <strong><?php echo $row["name"]; ?></strong> (<?php echo $row["date"] . " " . $row["time"]; ?>)
                    <br><strong>Subject:</strong> <?php echo $row["subject"]; ?>
                    <br><?php echo $row["feedback"]; ?>
                </li>
            <?php } ?>
        </ul>
    <?php } else { echo "<p>No feedback available.</p>"; } ?>
</div>

<script>
document.getElementById("feedbackForm").addEventListener("submit", function (event) {
    let name = document.getElementById("name").value.trim();
    let email = document.getElementById("email").value.trim();
    let subject = document.getElementById("subject").value.trim();
    let feedback = document.getElementById("feedback").value.trim();
    
    if (name === "" || email === "" || subject === "" || feedback === "") {
        event.preventDefault();
        alert("All fields are required!");
    }
});
</script>

</body>
</html>

<?php $conn->close(); ?>
