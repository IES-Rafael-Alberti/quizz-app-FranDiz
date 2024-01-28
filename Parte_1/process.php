<?php
class Quiz
{
    private $questions = array(
        1 => array('correct' => 'b'),
        2 => array('correct' => 'c'),
        3 => array('correct' => 'b'),
        4 => array('correct' => 'a'),
        5 => array('correct' => 'd'),
        6 => array('correct' => 'c'),
        7 => array('correct' => 'b'),
        8 => array('correct' => 'b'),
        9 => array('correct' => 'a'),
        10 => array('correct' => 'a')
    );

    public function processAnswers($answers)
    {
        $score = 0;
        $results = array();

        foreach ($answers as $questionNumber => $userAnswer) {
            if (isset($this->questions[$questionNumber])) {
                $correctAnswer = $this->questions[$questionNumber]['correct'];

                if ($userAnswer === $correctAnswer) {
                    $score++;
                }

                $results[$questionNumber] = array(
                    'userAnswer' => $userAnswer,
                    'correctAnswer' => $correctAnswer,
                );
            }
        }

        return array('score' => $score, 'results' => $results);
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $quiz = new Quiz();
    $answers = $_POST;

    foreach ($quiz->questions as $questionNumber => $data) {
        if (!isset($answers["q$questionNumber"])) {
            die("Error: Debes responder la pregunta $questionNumber.");
        }
    }

    $results = $quiz->processAnswers($answers);
    $score = $results['score'];
    $resultsData = $results['results'];
} else {
    die("Error: Se esperaba una solicitud POST.");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Quiz Results</title>
    <link rel="stylesheet" href="quiz.css">
</head>
<body>
    <h1>Resultados del Cuestionario PHP</h1>

    <p>Tu puntuación es: <?php echo $score; ?>/10</p>

    <h2>Detalles de las respuestas:</h2>
    <ul>
        <?php foreach ($resultsData as $questionNumber => $result): ?>
            <li>
                <strong>Pregunta <?php echo $questionNumber; ?>:</strong><br>
                Tu respuesta: <?php echo $result['userAnswer']; ?><br>
                Respuesta correcta: <?php echo $result['correctAnswer']; ?><br>
                Comentario: <?php echo $result['comment']; ?>
            </li>
        <?php endforeach; ?>
    </ul>

    <a href="index.html">Cuestionario</a>
</body>
</html>