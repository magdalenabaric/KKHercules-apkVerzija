<?php
include 'database.php';
session_start();

if (isset($_SESSION['user_id']) && isset($_GET['reservation_id'])) {
    $user_id = $_SESSION['user_id'];
    $reservation_id = $_GET['reservation_id'];

    // Provjerite je li datum rezervacije prošao
    $currentDate = date("Y-m-d");
    $query = "SELECT date FROM reservation WHERE user_id = ? AND id_reservacije = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param('ii', $user_id, $reservation_id);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($bookingDate);
        $stmt->fetch();

        if ($bookingDate >= $currentDate) {
            // Datum rezervacije još nije prošao
            // Ažurirajte rezervaciju postavljanjem user_id na 0 i statusa na "Available"
            $updateQuery = "UPDATE reservation SET user_id = 0, status = 'Available' WHERE user_id = ? AND id_reservacije = ?";
            $updateStmt = $conn->prepare($updateQuery);
            $updateStmt->bind_param('ii', $user_id, $reservation_id);
            $updateResult = $updateStmt->execute();

            if ($updateResult) {
                // Rezervacija je uspješno ažurirana
                header("Location: user_dashboard.php");
            } else {
                // Došlo je do pogreške prilikom ažuriranja
                echo "Error updating reservation. Please try again later.";
            }
        } else {
            // Datum rezervacije je prošao
            echo "Cannot cancel booking. Reservation date has already passed.";
        }
    } else {
        // Rezervacija ne postoji ili nije korisnikova rezervacija
        echo "Reservation not found or not owned by the user.";
    }
} else {
    // Nedostaju potrebni podaci u URL-u
    echo "Invalid request.";
}
