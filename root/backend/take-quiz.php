<?php
include 'connect.php'; // Database connection file

// Fetch quiz data from the database
$sql = "SELECT q.question_id, q.question_text, o.option_text, o.option_id FROM questions q INNER JOIN options o ON q.question_id = o.question_id";
$result = $conn->query($sql);

$quizData = [];
while ($row = $result->fetch_assoc()) {
    $quizData[$row['question_id']]['question_text'] = $row['question_text'];
    $quizData[$row['question_id']]['options'][] = $row;
}

$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Take Quiz - NeoLearn</title>
    <!-- Add CSS and JavaScript if needed -->
</head>
<body>
    <h1>Take Quiz</h1>
    <form action="submit-quiz.php" method="post">
        <?php foreach ($quizData as $questionId => $questionData): ?>
            <div>
                <p><?php echo htmlspecialchars($questionData['question_text']); ?></p>
                <?php foreach ($questionData['options'] as $option): ?>
                    <label>
                        <input type="radio" name="answers[<?php echo $questionId; ?>]" value="<?php echo $option['option_id']; ?>">
                        <?php echo htmlspecialchars($option['option_text']); ?>
                    </label><br>
                <?php endforeach; ?>
            </div>
        <?php endforeach; ?>
        <input type="submit" value="Submit Quiz">
    </form>
</body>
</html>
