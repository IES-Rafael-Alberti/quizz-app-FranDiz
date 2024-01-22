<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $preguntas = ["q1", "q2", "q3", "q4", "q5", "q6", "q7", "q8", "q9"];

    $preguntasSinResponder = [];
    foreach ($preguntas as $pregunta) {
        if (empty($_POST[$pregunta])) {
            $preguntasSinResponder[] = $pregunta;
        }
    }
    if (!empty($preguntasSinResponder)) {
        echo "Falta responder las siguientes preguntas: " . implode(", ", $preguntasSinResponder);
    } else {
    }
}
?>