<?php
    include('../dbCon.php');
    $sid = $_GET['sid'];
    $tid = $_GET['tid'];

    $sql = "delete from booktb where sid=$sid and tid=$tid";
    $res = mysqli_query($con, $sql);
    $count = mysqli_affected_rows($con);

    if($count > 0)
    {
        ?>
            <script>
                alert("Student Removed...");
                window.location.replace('tutorHome.php');
            </script>
        <?php
    }
    else
    {
        ?>
            <script>
                alert("Something went wrong...");
                window.location.replace('tutorHome.php');
            </script>
        <?php
    }
?>