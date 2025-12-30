<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CRUD in Laravel</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f6f9;
            padding: 20px;
        }
        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }
        h1 {
            margin: 0;
        }
        .add-btn {
            padding: 10px 16px;
            background: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;

        }
        
        table {
            width: 100%;
            border-collapse: collapse;
            background: #fff;
        }
        th, td {
            padding: 12px;
            border: 1px solid #ddd;
            text-align: left;
        }
        th {
            background: #f1f1f1;
        }
        .btn {
            padding: 6px 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            color: #fff;
        }
        .btn-update {
            background: #28a745;
        }
        .btn-delete {
            background: #dc3545;
        }
    </style>
</head>
<body>

    <!-- Header -->
    <header>
        <h1>CRUD in Laravel</h1>
        
    </header>
        {{-- <button class="add-btn">Add New</button> --}}
        <div class="top-bar">
        <a href="{{ route('crud.add') }}" class="add-btn">Add New</a>

</div>

    <!-- Table -->
    <table id="postTable">
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Author</th>
                <th>Description</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <!-- JS se data ayega -->
        </tbody>
    </table>

<script>
    // Dummy Data
    const posts = [
        {
            id: 1,
            title: "Laravel Basics",
            author: "Noman",
            description: "This is a dummy description for Laravel basics."
        },
        {
            id: 2,
            title: "CRUD Operations",
            author: "Ali",
            description: "Dummy content for CRUD operations in Laravel."
        },
        {
            id: 3,
            title: "JavaScript Integration",
            author: "Ahmed",
            description: "JS integration example with Laravel views."
        }
    ];

    const tableBody = document.querySelector("#postTable tbody");

    posts.forEach(post => {
        const row = `
            <tr>
                <td>${post.id}</td>
                <td>${post.title}</td>
                <td>${post.author}</td>
                <td>${post.description}</td>
                <td>
                    <button class="btn btn-update">Update</button>
                    <button class="btn btn-delete">Delete</button>
                </td>
            </tr>
        `;
        tableBody.innerHTML += row;
    });
</script>

</body>
</html>
