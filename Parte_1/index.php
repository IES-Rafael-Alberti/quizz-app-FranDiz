<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Quiz</title>
    <link rel="stylesheet" href="quizz.css">
</head>
<body>
    <form method="post" action="quizz.php">
        <h1>PHP Quiz</h1>
        <div class="question">
            <p>1. What does PHP stand for?</p>
            <label><input type="radio" name="q1" value="a"> a) Personal Home Page</label>
            <label><input type="radio" name="q1" value="b"> b) PHP: Hypertext Preprocessor</label>
            <label><input type="radio" name="q1" value="c"> c) PHP Hyper Markup Language</label>
        </div>

        <div class="question">
            <p>2. What is the result of 2 + 2 in PHP?</p>
            <label><input type="radio" name="q2" value="a"> a) 3</label>
            <label><input type="radio" name="q2" value="b"> b) 4</label>
            <label><input type="radio" name="q2" value="c"> c) 5</label>
        </div>

        <div class="question">
            <p>3. ¿Cómo se define una variable en PHP?</p>
            <label><input type="radio" name="q3" value="a"> a) var variableName;</label>
            <label><input type="radio" name="q3" value="b"> b) let variableName;</label>
            <label><input type="radio" name="q3" value="c"> c) $variableName;</label>
        </div>

        <div class="question">
            <p>4. ¿Cómo se crea un bucle for en PHP?</p>
            <label><input type="radio" name="q4" value="a"> a) for (i = 0; i < 10; i++) {}</label>
            <label><input type="radio" name="q4" value="b"> b) for ($i = 0; $i < 10; $i++) {}</label>
            <label><input type="radio" name="q4" value="c"> c) for i in range(0, 10) {}</label>
        </div>

        <div class="question">
            <p>5. ¿Cómo se define una función en PHP?</p>
            <label><input type="radio" name="q5" value="a"> a) function functionName() {}</label>
            <label><input type="radio" name="q5" value="b"> b) def functionName() {}</label>
            <label><input type="radio" name="q5" value="c"> c) func functionName() {}</label>
        </div>

        <div class="question">
            <p>6. ¿Cómo se accede a un valor de matriz en PHP?</p>
            <label><input type="radio" name="q6" value="a"> a) arrayName[index]</label>
            <label><input type="radio" name="q6" value="b"> b) arrayName(index)</label>
            <label><input type="radio" name="q6" value="c"> c) arrayName->index</label>
        </div>

        <div class="question">
            <p>7. ¿Cómo se maneja un formulario con el método POST en PHP?</p>
            <label><input type="radio" name="q7" value="a"> a) $_POST['fieldName']</label>
            <label><input type="radio" name="q7" value="b"> b) $_GET['fieldName']</label>
            <label><input type="radio" name="q7" value="c"> c) $_REQUEST['fieldName']</label>
        </div>

        <div class="question">
            <p>8. ¿Cómo se valida un formulario en PHP?</p>
            <label><input type="radio" name="q8" value="a"> a) Usando la función validate()</label>
            <label><input type="radio" name="q8" value="b"> b) Usando la función form_validate()</label>
            <label><input type="radio" name="q8" value="c"> c) Usando la función filter_input()</label>
        </div>

        <div class="question">
            <p>9. ¿Cómo se crea una clase en PHP?</p>
            <label><input type="radio" name="q9" value="a"> a) class ClassName {}</label>
            <label><input type="radio" name="q9" value="b"> b) new ClassName {}</label>
            <label><input type="radio" name="q9" value="c"> c) ClassName {}</label>
        </div>
        
        <div class="question">
            <p>10. ¿Cuál de los siguientes se utiliza para crear un objeto en PHP?</p>
            <label><input type="radio" name="q10" value="a"> a) new </label>
            <label><input type="radio" name="q10" value="b"> b) objeto</label>
            <label><input type="radio" name="q10" value="c"> c) crear</label>
        </div>
        <input type="submit" value="Submit">
    </form>
</body>
</html>