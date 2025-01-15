<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the text from the POST request
    $updatedText = $_POST['text'] ?? '';

    // File path to save the content
    $filePath = 'sample.txt';

    // Save the text to the file
    if (file_put_contents($filePath, $updatedText) !== false) {
        echo "File saved successfully.";
    } else {
        echo "Error saving the file.";
    }
} else {
    echo "Invalid request.";
}