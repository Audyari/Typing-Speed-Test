<?php
$texts = [
    "Rubah coklat cepat melompati anjing malas",
    "Tes kecepatan mengetik berguna untuk meningkatkan keterampilan mengetik Anda",
    "Latihan membuat sempurna ketika datang untuk mengetik",
    "Akurasi sama pentingnya dengan kecepatan dalam mengetik",
    "Terus berlatih untuk meningkatkan kecepatan dan akurasi"
];

if (isset($_GET['action']) && $_GET['action'] == 'random-text') {
    $randomText = $texts[array_rand($texts)];
    echo json_encode(['text' => $randomText]);
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Typing Speed Test</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 50px;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
        }

        .text-display {
            margin-bottom: 20px;
            font-size: 18px;
        }

        .results {
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Typing Speed Test</h1>
        <div class="text-display" id="text-display">Loading text...</div>
        <textarea id="text-input" rows="4" cols="50" disabled></textarea>
        <br>
        <button id="start-button">Start Test</button>
        <button id="submit-button" disabled>Submit Test</button>
        <div class="results" id="results"></div>
    </div>

    <script>
        let testText = '';
        let startTime;
        let typedCharacters = 0;

        document.getElementById('start-button').addEventListener('click', startTest);
        document.getElementById('submit-button').addEventListener('click', submitTest);

        function startTest() {
            fetch('?action=random-text')
                .then(response => response.json())
                .then(data => {
                    testText = data.text;
                    document.getElementById('text-display').textContent = testText;
                    document.getElementById('text-input').disabled = false;
                    document.getElementById('text-input').value = '';
                    document.getElementById('text-input').focus();
                    document.getElementById('start-button').disabled = true;
                    document.getElementById('submit-button').disabled = false;
                    startTime = new Date();
                });
        }

        function submitTest() {
            const elapsedTime = (new Date() - startTime) / 1000;
            const typedText = document.getElementById('text-input').value;
            const speed = (typedText.length / elapsedTime) * 60; // characters per minute
            const accuracy = (100 * typedText.length / testText.length).toFixed(2);

            document.getElementById('results').innerHTML = `
        <p>Speed: ${speed.toFixed(2)} CPM</p>
        <p>Accuracy: ${accuracy}%</p>
      `;

            document.getElementById('text-input').disabled = true;
            document.getElementById('submit-button').disabled = true;
            document.getElementById('start-button').disabled = false;
        }
    </script>
</body>

</html>