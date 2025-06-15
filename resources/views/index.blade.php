<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Test API CORS</title>
</head>
<body>
  <h1>Testing API CORS</h1>
  <button id="testApi">Test API</button>
  <pre id="output"></pre>

  <script>
    document.getElementById('testApi').addEventListener('click', async () => {
      const output = document.getElementById('output');
      output.textContent = 'Testing...';

      try {
        const response = await fetch('http://127.0.0.1:8000/api/admin/show/rounds', {
          method: 'GET',
          headers: {
            'Content-Type': 'application/json',
            
          },
        });

        const data = await response.json();
        output.textContent = `Success: ${JSON.stringify(data, null, 2)}`;
      } catch (error) {
        output.textContent = `Error: ${error.message}`;
      }
    });
</script>

</body>
</html>
