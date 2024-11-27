<!DOCTYPE html>
<html lang="en">
<head>
    <?php include './inc/HTMLhead.php'; ?>
    
    <style>
        /* General body styling */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        /* Form container */
        .form-container {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }

        h2 {
            text-align: center;
            color: #333;
        }

        /* Error message */
        .error-message {
            color: red;
            font-size: 14px;
            margin-bottom: 15px;
            text-align: center;
        }

        /* Label and input styling */
        label {
            display: block;
            font-size: 14px;
            color: #333;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="email"] {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
            margin-bottom: 20px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            font-size: 16px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        /* Responsive styling */
        @media screen and (max-width: 600px) {
            .form-container {
                width: 90%;
                padding: 20px;
            }

            input[type="submit"] {
                font-size: 14px;
            }
        }
    </style>
</head>
<body>

<div class="form-container">
    <h2>Registration Form</h2>

    <form id="registration-form">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
        
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="serial_number">Serial Number:</label>
        <input type="text" id="serial_number" name="serial_number" required>

        <input type="submit" value="Register">
    </form>

    <p id="response-message"></p>
</div>

<script>
    const form = document.getElementById('registration-form');
    form.addEventListener('submit', async (event) => {
        event.preventDefault();
        
        const formData = new FormData(form);
        const data = Object.fromEntries(formData.entries());

        try {
            const response = await fetch('http://127.0.0.1:8000/api/register', {
                method: 'POST',
                headers: { 'Content-Type': 'application/json' },
                body: JSON.stringify(data),
            });

            const result = await response.json();
            alert(result.message);
            window.history.back();
        } catch (error) {
            console.error('Error:', error);
        }
    });
</script>



</body>
</html>
