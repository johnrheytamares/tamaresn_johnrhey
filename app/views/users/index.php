<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Students Info</title>
    <style>
        body {
            font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #667eea, #764ba2);
            min-height: 100vh;
            margin: 0;
            padding: 20px;
            color: #333;
        }

        h1 {
            text-align: center;
            color: #fff;
            margin-bottom: 30px;
            font-size: 32px;
            font-weight: 700;
            letter-spacing: 1px;
        }

        table {
            width: 90%;
            margin: 0 auto 25px;
            border-collapse: collapse;
            background: #fff;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 8px 20px rgba(0,0,0,0.2);
        }

        th, td {
            padding: 14px 16px;
            text-align: left;
        }

        th {
            background: blue;
            color: #fff;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            font-size: 14px;
        }

        td {
            font-size: 15px;
            color: #444;
            border-bottom: 1px solid #eee;
        }

        tr:last-child td {
            border-bottom: none;
        }

        tr:hover {
            background-color: #f7f9fc;
            transition: background-color 0.3s ease;
        }

        /* Action links */
        a {
            margin: 0 6px;
            text-decoration: none;
            font-weight: 600;
            font-size: 14px;
            padding: 6px 10px;
            border-radius: 6px;
            transition: all 0.3s ease;
        }

        a[href*="update"] {
            color: #fff;
            background: #17a2b8;
        }

        a[href*="update"]:hover {
            background: #138496;
        }

        a[href*="delete"] {
            color: #fff;
            background: #dc3545;
        }

        a[href*="delete"]:hover {
            background: #b02a37;
        }

        /* Button container */
        .button-container {
            width: 100%;
            text-align: center;
            margin-top: 15px;
        }

        /* Create button */
        .btn-create {
            display: inline-block;
            padding: 12px 22px;
            background: linear-gradient(to right, #28a745, #20c997);
            color: white;
            text-decoration: none;
            border-radius: 8px;
            font-weight: 600;
            font-size: 15px;
            transition: all 0.3s ease;
        }

        .btn-create:hover {
            background: linear-gradient(to right, #218838, #198754);
            transform: translateY(-2px);
        }

        /* Responsive */
        @media (max-width: 768px) {
            table {
                width: 100%;
                font-size: 14px;
            }

            th, td {
                padding: 10px;
            }

            .btn-create {
                width: 90%;
            }
        }
    </style>
</head>
<body>
    <h1>Students Info</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Action</th>
        </tr>
        <?php foreach (html_escape($users) as $user): ?>
        <tr>
            <td><?=$user['id']; ?></td>
            <td><?=$user['username']; ?></td>
            <td><?=$user['email']; ?></td>
            <td>
                <a href="<?=site_url('/users/update/'.$user['id']);?>">Update</a>
                <a href="<?=site_url('/users/delete/'.$user['id']);?>">Delete</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>

    <div class="button-container">
        <a href="<?=site_url('users/create'); ?>" class="btn-create">+ Create New User</a>
    </div>
</body>
</html>
