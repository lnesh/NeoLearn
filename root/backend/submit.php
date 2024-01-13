<?php
include 'connect.php'; // Database connection file

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $studentAnswers = $_POST['answers'];

    // Fetch correct answers from the database
    $sql = "SELECT option_id, question_id, is_correct FROM options WHERE is_correct = 1";
    $result = $conn->query($sql);

    $correctAnswers = [];
    while ($row = $result->fetch_assoc()) {
        $correctAnswers[$row['question_id']] = $row['option_id'];
    }

    // Check student's answers
    $score = 0;
    foreach ($studentAnswers as $questionId => $answerId) {
        if (isset($correctAnswers[$questionId]) && $correctAnswers[$questionId] == $answerId) {
            $score++;
            echo "Question $questionId: Correct!<br>";
        } else {
            echo "Question $questionId: Incorrect.<br>";
        }
    }

    echo "<br>Your Score: $score";

    $conn->close();
}
?>
