<!DOCTYPE html>
<html>
<head>
    <title>Create Quiz - NeoLearn</title>
    <script type="text/javascript">
        function addQuestion() {
            var questionContainer = document.getElementById("questionContainer");
            var questionNumber = questionContainer.children.length + 1;
            var html = '<div id="question' + questionNumber + '">' +
                '<label for="question' + questionNumber + '">Question ' + questionNumber + ':</label>' +
                '<input type="text" name="questions[]" required><br>' +
                '<input type="text" name="options[' + questionNumber + '][]" required> <input type="radio" name="answers[' + questionNumber + ']" value="1" required><br>' +
                '<input type="text" name="options[' + questionNumber + '][]" required> <input type="radio" name="answers[' + questionNumber + ']" value="2"><br>' +
                '<input type="text" name="options[' + questionNumber + '][]" required> <input type="radio" name="answers[' + questionNumber + ']" value="3"><br>' +
                '<input type="text" name="options[' + questionNumber + '][]" required> <input type="radio" name="answers[' + questionNumber + ']" value="4"><br><br>' +
                '</div>';
            questionContainer.innerHTML += html;
        }
    </script>
</head>
<body>
    <h1>Create a New Quiz</h1>
    <form action="save-quiz.php" method="post">
        <div id="questionContainer">
            <!-- Questions will be added here dynamically -->
        </div>
        <button type="button" onclick="addQuestion()">Add Question</button><br><br>
        <input type="submit" value="Create Quiz">
    </form>
</body>
</html>
