<?php
include 'connect.php'; // Ensure you have created this file

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Debugging: Uncomment the line below to see the structure of received POST data
    // var_dump($_POST);

    $questions = $_POST['questions'] ?? [];
    $options = $_POST['options'] ?? [];
    $answers = $_POST['answers'] ?? [];

    // Begin a transaction
    $conn->begin_transaction();

    try {
        foreach ($questions as $index => $questionText) {
            // Insert question into the database and get its ID
            $sql = "INSERT INTO questions (question_text) VALUES (?)";
            $stmt = $conn->prepare($sql);
            if (!$stmt) {
                throw new Exception("Prepare failed: " . $conn->error);
            }

            $stmt->bind_param("s", $questionText);
            if (!$stmt->execute()) {
                throw new Exception("Execute failed: " . $stmt->error);
            }
            $question_id = $stmt->insert_id;
            $stmt->close();

            if (isset($options[$index]) && is_array($options[$index])) {
                foreach ($options[$index] as $optionIndex => $optionText) {
                    $is_correct = isset($answers[$index]) && $answers[$index] == $optionIndex + 1 ? 1 : 0;
                    
                    // Insert options into the database
                    $sql = "INSERT INTO options (question_id, option_text, is_correct) VALUES (?, ?, ?)";
                    $stmt = $conn->prepare($sql);
                    if (!$stmt) {
                        throw new Exception("Prepare failed: " . $conn->error);
                    }

                    $stmt->bind_param("isi", $question_id, $optionText, $is_correct);
                    if (!$stmt->execute()) {
                        throw new Exception("Execute failed: " . $stmt->error);
                    }
                    $stmt->close();
                }
            } else {
                // Debugging: Uncomment the line below to see which question index has no options
                // echo "No options for question index: $index<br>";
            }
        }

        // Commit the transaction
        $conn->commit();
        echo "Quiz created successfully!";
    } catch (Exception $e) {
        // An error occurred, roll back the transaction and display the error
        $conn->rollback();
        echo "Error: " . $e->getMessage();
    }

    $conn->close();
}
?>
