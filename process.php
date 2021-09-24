<?php include 'connect.php'; ?>

<?php

    // print_r($_POST);
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $position = $_POST['position'];
    $email= $_POST['email'];

    mysqli_query($connect, "INSERT INTO student(first_name, last_name, position, email)
                            VALUES ('$first_name', '$last_name', '$position', '$email')");

    if(mysqli_affected_rows($connect) > 0){
        echo '<p>Student Added</p>';
        echo '<a href = "index.html">Back to Homepage</a>';
    } else {
        echo 'Student not added';
        echo mysqli_error($connect);
    }

?>