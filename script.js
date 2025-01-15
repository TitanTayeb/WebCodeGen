// Select the HTML box
const textBox = document.getElementById("text-box");

// Fetch the content of the text file
fetch("sample.txt")
    .then(response => {
        if (!response.ok) {
            throw new Error("Failed to load the text file.");
        }
        return response.text();
    })
    .then(data => {
        textBox.textContent = data; // Insert the text into the box
    })
    .catch(error => {
        textBox.textContent = "Error: " + error.message; // Display error message
    });