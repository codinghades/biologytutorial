<?php

$rooms = [
    "NARRA" => 300,
    "MOLAVE" => 250,
    "MULAWIN" => 150
];

$message = "";


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $selectedRoom = $_POST['room']; // Selected room from combo box
    $peopleCount = (int) $_POST['people']; // Number of people attending

    
    if (isset($rooms[$selectedRoom])) {
        $roomCapacity = $rooms[$selectedRoom];

        
        if ($peopleCount <= $roomCapacity) {
            
            $availableSpace = $roomCapacity - $peopleCount;
            $message = "Room is available! You can still add $availableSpace more people.";
        } else {
            
            $excessPeople = $peopleCount - $roomCapacity;
            $message = "Room is overbooked by $excessPeople people. Please reduce the number of attendees.";
        }
    } else {
        $message = "Please select a valid room.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Room Availability Check</title>
</head>
<body>

<h2>Check Room Availability</h2>

<form action="" method="POST">
    <label for="room">Select Room:</label>
    <select name="room" id="room" required>
        <option value="NARRA">Narra (300 people)</option>
        <option value="MOLAVE">Molave (250 people)</option>
        <option value="MULAWIN">Mulawin (150 people)</option>
    </select><br><br>

    <label for="people">Number of People:</label>
    <input type="number" name="people" id="people" required><br><br>

    <button type="submit">Check Availability</button>
</form>

<?php

if ($message) {
    echo "<p>$message</p>";
}
?>

</body>
</html>
