<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Information Form</title>
    <style>
        body { font-family: sans-serif; margin: 40px; line-height: 1.6; }
        form { max-width: 400px; }
        div { margin-bottom: 15px; }
        label { font-weight: bold; }
        input[type="text"], input[type="number"], textarea {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box; /* Ensures padding doesn't affect width */
        }
        button {
            background-color: #007BFF;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        button:hover { background-color: #0056b3; }
    </style>
</head>
<body>

    <h2>Input information</h2>
    
    <form method="get">
        <!-- Name Field -->
        <div>
            <label for="name">Full Name:</label>
            <input type="text" id="name" name="name" placeholder="John Doe" required>
        </div>

        <!-- Age Field -->
        <div>
            <label for="age">Age:</label>
            <input type="number" id="age" name="age" min="0" max="120">
        </div>

        <!-- Sex/Gender Field -->
        <div>
            <label>Sex:</label><br>
            <input type="radio" id="male" name="sex" value="male">
            <label for="male">Male</label>
            <input type="radio" id="female" name="sex" value="female">
            <label for="female">Female</label>
            <input type="radio" id="other" name="sex" value="other">
            <label for="other">Other</label>
        </div>

        <!-- Address Field -->
        <div>
            <label for="address">Address:</label>
            <textarea id="address" name="address" rows="4" placeholder="123 Street, City, Country"></textarea>
        </div>

        <!-- Submit Button -->
        <button type="submit">Submit Information</button>
    </form>

</body>
</html>

