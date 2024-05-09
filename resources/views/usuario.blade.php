<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>CRUD Example</title>
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 20px;
    }
    h1 {
        text-align: center;
    }
    form {
        margin-bottom: 20px;
    }
    label {
        display: block;
        margin-bottom: 5px;
    }
    input[type="text"],
    input[type="number"],
    button {
        padding: 8px;
        margin-bottom: 10px;
    }
    button {
        background-color: #4CAF50;
        color: white;
        border: none;
        cursor: pointer;
    }
    button:hover {
        background-color: #45a049;
    }
    table
    {
width: 100%;
border-collapse: collapse;
}
th, td {
padding: 10px;
border-bottom: 1px solid #ddd;
text-align: left;
}
tr:hover {
background-color: #f5f5f5;
}
</style>

</head>
<body>
    
<h1>CRUD Example</h1>
<!-- Formulario para crear -->
<form>
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required>
    <label for="age">Age:</label>
    <input type="number" id="age" name="age" required>
    <button type="submit">Create</button>
</form>
<!-- Tabla para mostrar registros -->
<table>
    <thead>
        <tr>
            <th>Name</th>
            <th>Age</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <!-- Los registros se cargarán aquí -->
        <tr>
            <td>John</td>
            <td>30</td>
            <td><button>Edit</button></td>
        </tr>
        <tr>
            <td>Jane</td>
            <td>25</td>
            <td><button>Edit</button></td>
        </tr>
        <tr>
            <td>Alice</td>
            <td>35</td>
            <td><button>Edit</button></td>
        </tr>
    </tbody>
</table>
</body>
</html>