<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello Laravel</title>


<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #a8ede9;
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
    }

    .container {
        background-color: #60959d;
        padding: 40px;
        border-radius: 12px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        text-align: center;
        max-width: 600px;
        width: 90%;
    }

    h1 {
        color: #f1f8c3;
        margin-bottom: 10px;
    }

    h2 {
        color: #333333;
        margin-bottom: 25px;
    }

    .info {
        text-align: left;
        line-height: 1.8;
        color: #f1f8c3;
    }

    .label {
        font-weight: bold;
        color: #222222;
    }

    .date {
        margin-top: 20px;
        color: #666;
    }
</style>


</head>

<body>
    <div class="container">
        <h1>Hello Laravel!</h1>

^_^
    <h2>Welcome to Client-Server Technologies.</h2>

    <div class="info">
        <p><span class="label">Student Name:</span> Marc Cabalo</p>
        <p><span class="label">Student Number:</span> 0124-0550</p>
        <p><span class="label">Course:</span> BSIT</p>
        <p><span class="label">Section:</span> 3B</p>
        <p><span class="label">Subject:</span> ITST 302 – Client-Server Technologies</p>
        <p class="date">
            <span class="label">Current Date:</span>
            {{ date('F d, Y') }}
        </p>
    </div>
</div>


</body>
</html>
