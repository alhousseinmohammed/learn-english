<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @livewireStyles()
    <style>
        /* General Page Styles */
        .curriculum body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f6f9;
            margin: 0;
            padding: 20px;
        }

        /* Container Styles */
        .curriculum div {
            max-width: 800px;
            margin: 40px auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        div.curriculum {
            max-width: 90%;
            min-width: 50%;
            margin: 40px auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .curriculum table {
            animation:
        }

        /* Header */
        .curriculum h1 {
            text-align: center;
            color: #2c3e50;
            font-weight: 600;
            margin-bottom: 20px;
        }

        /* Add Themes Button */
        .curriculum a {
            display: inline-block;
            margin-bottom: 15px;
            padding: 10px 20px;
            background-color: #3498db;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-size: 14px;
            transition: background-color 0.3s;
        }

        .curriculum a:hover {
            background-color: #2980b9;
        }

        /* Table Styles */
        .curriculum table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }

        .curriculum thead tr {
            background-color: #34495e;
            color: white;
            text-align: left;
        }

        .curriculum th,
        .curriculum td {
            padding: 12px 15px;
            border: 1px solid #ddd;
        }

        .curriculum tbody tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        .curriculum tbody tr:nth-child(odd):hover {
            background-color: #e8f6ff;
        }

        /* Inline Editing Paragraph */
        .curriculum p {
            margin: 0;
            cursor: pointer;
            padding: 8px;
        }

        /* Input Field Styles */
        .curriculum input {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            c border-radius: 4px;
            box-sizing: border-box;
        }

        /* Button Styles */
        .curriculum button {
            padding: 8px 12px;
            background-color: #e74c3c;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 14px;
            transition: background-color 0.3s;
        }

        .curriculum :hover {
            /* background-color: #c0392b; */
        }

        /* Form Inline Style */
        .curriculum form {
            display: inline-block;
        }
    </style>

    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .filter-container {
            border: 1px solid #ccc;
            border-radius: 8px;
            padding: 20px;
            margin: 20px;
            background-color: #f9f9f9;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }

        .filter-title {
            margin-bottom: 15px;
            font-size: 1.5em;
            color: #333;
        }

        .filter-form {
            display: flex;
            flex-direction: column;
        }

        .filter-group {
            margin-bottom: 15px;
        }

        .filter-group label {
            display: block;
            margin-bottom: 5px;
            color: #555;
        }

        .filter-group input[type="range"] {
            width: 100%;
        }

        .price-value {
            display: block;
            margin-top: 5px;
            color: #666;
        }

        .checkbox-group {
            display: flex;
            flex-direction: column;
        }

        .checkbox-group label {
            margin-bottom: 5px;
        }

        .filter-button {
            padding: 10px 15px;
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .filter-button:hover {
            background-color: #218838;
        }
    </style>

    <style>
        .filter-group:not(:has(.checkbox-group)) {
            display: inline-block;
        }
    </style>

    <style>

    </style>
</head>

<body>
    @livewire('users')
    @livewireScripts()
</body>

</html>
