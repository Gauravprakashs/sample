<!DOCTYPE html>
<html>
<head>
    <title>Sum of Numbers</title>
</head>
<body>
    <h1>Enter two numbers to find their sum</h1>
    
    <form action="{{ route('sum.calculate') }}" method="POST">
        @csrf
        <label for="number1">Number 1:</label>
        <input type="text" name="number1" id="number1" required><br><br>

        <label for="number2">Number 2:</label>
        <input type="text" name="number2" id="number2" required><br><br>

        <button type="submit">Calculate Sum</button>
    </form>
</body>
</html>
