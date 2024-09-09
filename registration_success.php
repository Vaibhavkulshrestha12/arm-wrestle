<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Successful</title>
    <link rel="stylesheet" href="./src/css/styles.css">
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            color: white;
            overflow: hidden;
            background-color: #10141c; 
        }

        .poster-container {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #10141c;
        }

        .popup {
            background-color: rgba(0, 0, 0, 0.8); 
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.6);
            text-align: center;
            display: none;
            color: white;
        }

        .popup h2 {
            margin: 0;
            font-size: 24px;
            font-weight: bold;
        }
    </style>
</head>
<body>

<div class="poster-container">
    <div id="successPopup" class="popup">
        <h2>Registration Successful!</h2>
    </div>
</div>

<script>
  window.onload = function() {
    const popup = document.getElementById('successPopup');
    
    // Show the popup
    popup.style.display = 'block';
    
    
    setTimeout(function() {
      popup.style.opacity = '0'; 
      setTimeout(function() {
        popup.style.display = 'none'; 
        window.location.href = "index.html"; 
      }, 500); 
    }, 3000);
  }
</script>

</body>
</html>
