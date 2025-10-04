<?php
// index.php - Static School Dashboard
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>School Dashboard</title>
    <style>
        body { font-family: Arial, sans-serif; background: #f4f6f8; margin: 0; }
        .header { background: #2d3e50; color: #fff; padding: 20px; text-align: center; }
        .container { max-width: 900px; margin: 30px auto; background: #fff; padding: 30px; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.1);}
        .cards { display: flex; gap: 20px; margin-bottom: 30px; }
        .card { flex: 1; background: #e9ecef; padding: 20px; border-radius: 6px; text-align: center; }
        .card h2 { margin: 0 0 10px; font-size: 2em; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { padding: 10px; border-bottom: 1px solid #ddd; text-align: left; }
        th { background: #f1f3f5; }
    </style>
</head>
<body>
    <div class="header">
        <h1>My School Dashboard</h1>
        <p>Welcome to your school overview</p>
    </div>
    <div class="container">
        <div class="cards">
            <div class="card">
                <h2>350</h2>
                <p>Students</p>
            </div>
            <div class="card">
                <h2>25</h2>
                <p>Teachers</p>
            </div>
            <div class="card">
                <h2>12</h2>
                <p>Courses</p>
            </div>
        </div>
        <h3>Upcoming Events</h3>
        <table>
            <tr>
                <th>Date</th>
                <th>Event</th>
                <th>Location</th>
            </tr>
            <tr>
                <td>2025-10-04</td>
                <td>PHP</td>
                <td><a href="./tp1/tp1.php">TP1</a></td>
            </tr>
            <tr>
                <td>2024-06-20</td>
                <td>Sports Day</td>
                <td>Sports Ground</td>
            </tr>
            <tr>
                <td>2024-07-01</td>
                <td>Parent-Teacher Meeting</td>
                <td>Room 101</td>
            </tr>
        </table>
    </div>
</body>
</html>
