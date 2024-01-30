<?php
// Inicializar el contador de preguntas y preguntas respondidas
$totalQuestions = 10;
$answeredQuestions = 0;

// Recorrer cada pregunta
for ($i = 1; $i <= $totalQuestions; $i++) {
    $question = 'q' . $i;

    // Si la pregunta ha sido respondida
    if (isset($_POST[$question]) && $_POST[$question] != '') {
        $answeredQuestions++;
    }
}

// Verificar si todas las preguntas han sido respondidas
if ($totalQuestions == $answeredQuestions) {
    echo "Todas las preguntas han sido respondidas.\n";
} else {
    echo "No todas las preguntas han sido respondidas.\n";
}


// Inicializar el contador de preguntas y preguntas respondidas
$totalQuestions = 10;
$answeredQuestions = 0;

// Recorrer cada pregunta
for ($i = 1; $i <= $totalQuestions; $i++) {
    $question = 'q' . $i;

    // Si la pregunta ha sido respondida
    if (isset($_POST[$question]) && $_POST[$question] != '') {
        $answeredQuestions++;
    }
}

// Verificar si todas las preguntas han sido respondidas
if ($totalQuestions == $answeredQuestions) {
    echo "Todas las preguntas han sido respondidas.\n";
} else {
    echo "No todas las preguntas han sido respondidas.\n";
}

class Quiz
{
    private $questions = [];

    public function addQuestion($question, $options, $correctAnswer)
    {
        $this->questions[] = [
            'question' => $question,
            'options' => $options,
            'correctAnswer' => $correctAnswer
        ];
    }

    public function getQuestions()
    {
        return $this->questions;
    }

    public function calculateScore($answers)
    {
        $score = 0;
        foreach ($this->questions as $index => $question) {
            if (isset($answers[$index]) && $answers[$index] == $question['correctAnswer']) {
                $score++;
            }
        }
        return $score;
    }

    public function generateFeedback($answers)
    {
        $feedback = [];
        foreach ($this->questions as $index => $question) {
            if (isset($answers[$index]) && $answers[$index] == $question['correctAnswer']) {
                $feedback[] = "La pregunta {$question['question']} fue respondida correctamente.";
            } else {
                $feedback[] = "La pregunta {$question['question']} fue respondida incorrectamente. La respuesta correcta es {$question['correctAnswer']}.";
            }
        }
        return $feedback;
    }
}


?>


