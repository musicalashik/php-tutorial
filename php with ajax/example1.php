<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AJAX with JSON Example</title>
</head>
<body>

<div id="result"></div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Function to make AJAX request
        function fetchData() {
            var xhr = new XMLHttpRequest();

            // Configure it: GET-request to the URL /api/data
            xhr.open('GET', 'example1-backend.php', true);
            xhr.setRequestHeader('Content-Type', 'application/json');

            // This function will be called when the request is completed successfully
            xhr.onload = function() {
                if (xhr.status == 200) {
                    // Parse the JSON response
                    var data = JSON.parse(xhr.responseText);

                    // Example: Display data in the result div
                    document.getElementById('result').innerHTML = '<h2>Title: ' + data.title + '</h2>' +
                                                                    '<p>Completed: ' + (data.completed ? 'Yes' : 'No') + '</p>';
                } else {
                    // Handle errors here
                    console.error('Error fetching data:', xhr.statusText);
                }
            };

            // Handle network errors
            xhr.onerror = function() {
                console.error('Network error occurred');
            };

            // Send the request
            xhr.send();
        }

        // Call the fetchData function when the page is ready
        fetchData();
    });
</script>

</body>
</html>
