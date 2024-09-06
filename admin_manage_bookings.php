<?php
include 'database.php';
session_start();

// Provjerite postoji li ključ "u_id" u sesiji i ima li vrijednost
if (isset($_SESSION['id'])) {
  $u_id = $_SESSION['id'];
  // Sada možete koristiti $aid
} else {
  // Ključ "u_id" nije postavljen u sesiji, pa trebate obraditi ovu situaciju
  // Na primjer, preusmjerite korisnika ili izvedite neku drugu radnju
}

if (isset($_SESSION["user"])) {
  // Korisnik je prijavljen
  $isLoggedIn = true;
} else {
  // Korisnik nije prijavljen
  $isLoggedIn = false;
}
?>
<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="styles/style_my.css">
  <link rel="stylesheet" href="styles/style_admin.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha384-... " crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <?php include 'nav2.php'; ?>
</head>

<body class="other-body">
  <p class="dashboard-link"><a href="admin_dashboard.php"><i class="fa-solid fa-house"></i> Admin panel</a></p>
  <h1>Upravljanje rezervacijama</h1>

  <a href="" class="new-termin-a">
    <p class="new-termin">Dodaj novi termin</p>
  </a>
  <table class="user-table">
    <thead>
      <tr>
        <th>Aktivnost</th>
        <th>Cijena</th>
        <th>Konj</th>
        <th>Voditelj aktivnosti</th>
        <th>Datum</th>
        <th>Vrijeme</th>
        <th>Status</th>
      </tr>
    </thead>

    <tbody>
      <?php

      $ret = "SELECT * FROM reservation where status = 'Confirmed' || status = 'Available' "; //get all bookings
      $stmt = $conn->prepare($ret);
      $stmt->execute(); //ok
      $res = $stmt->get_result();
      $cnt = 1;
      while ($row = $res->fetch_object()) {
      ?>
        <tr>
          <td><?php echo $row->activity_name; ?></td>
          <td><?php echo $row->price; ?></td>
          <td><?php echo $row->horse_name; ?></td>
          <td><?php echo $row->trainer; ?></td>
          <td><?php echo $row->date; ?></td>
          <td><?php echo $row->time; ?></td>
          <td><?php
              echo '<span class = "badge badge-success">' . $row->status . '</span>';
              ?></td>
          <td>
            <a href="admin-delete-booking.php?u_id=<?php echo $row->u_id; ?>" class="badge badge-danger"><i class="fa fa-trash"></i> Delete</a>
            </i>
          </td>
        </tr>
      <?php $cnt = $cnt + 1;
      } ?>
    </tbody>
  </table>
</body>

</html>