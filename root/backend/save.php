<?php
include 'connect.php'; // Ensure your connect.php file has the correct database connection details

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    foreach ($_POST['questions'] as $index => $questionText) {
        // Insert question into the database
        $stmt = $conn->prepare("INSERT INTO quiz_questions (question) VALUES (?)");
        $stmt->bind_param("s", $questionText);
        $stmt->execute();
        $questionId = $stmt->insert_id;

        // Insert options for this question
        foreach ($_POST['options'][$index] as $optionIndex => $optionText) {
            $isCorrect = ($optionIndex + 1) == $_POST['answers'][$index]; // Check if this option is the correct answer
            $isCorrectVal = $isCorrect ? 1 : 0; // Convert boolean to int for SQL

            $stmt = $conn->prepare("INSERT INTO quiz_options (question_id, option_text, is_correct) VALUES (?, ?, ?)");
            $stmt->bind_param("isi", $questionId, $optionText, $isCorrectVal);
            $stmt->execute();
        }
    }

    $conn->close();
    echo "Quiz saved successfully!";
}
?>
