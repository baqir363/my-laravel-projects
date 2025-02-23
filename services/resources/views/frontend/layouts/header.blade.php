<?php
// require_once("confg.php");
// $result = mysqli_query($db, "SELECT * FROM dynamic");
// while ($row = mysqli_fetch_assoc($result)) {
//     $userid = $row['id'];
// }
?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <img src="{{url('frontend/assets/img/images (1).png')}}" alt="image" height="100px" width="100px"><br>
    <a class="navbar-brand" href="{{url('/index')}}">Dynamic Letter</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="{{url('/home')}}">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="{{url('/compose')}}">Compose Letter</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="{{url('/history')}}">Letter History</a>
            </li>
        </ul>
        <span class="navbar-text">
           <p> Logged in as </p>
             <?php
            // echo $_SESSION['username'];
            // echo $_SESSION['department'];
            ?>
        </span>
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="logout.php">Logout</a>
            </li>
        </ul>
    </div>
</nav>
