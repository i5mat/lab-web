<?php require_once ('header.php'); ?>

<?php

    $success_message = false;
    
    if ($_POST)
    {
        $sql = "UPDATE golfer SET golfer='" .$_POST['golfer']. "', score='" .$_POST['score']. "', par='" .$_POST['par']. "', net='" .$_POST['net']. "', scoreround='" .$_POST['scoreround']. "', netround='" .$_POST['netround']. "' WHERE id='" . $_GET['id'] . "'";

        if ($conn->query($sql) === TRUE)
        {
            $success_message = true;
        }
    }

    $sql = "SELECT * FROM golfer where id='" . $_GET['id'] . "'";

    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
?>

<h1 class="text-center">Golfer Profile</h1>

<?php if ($success_message === true) : ?>
    <div style="text-align: center; margin-bottom: 15px">
        <label class="validation-success">Golfer Profile successfully updated.</label>
    </div>
<?php endif; ?>


<form action="golfer-update-record.php?id=<?= $_GET['id']; ?>" method="post">
    <table align= center >
        <tr>
            <td> <label><b>Golfer</b></label></td>
            <td> <input type="text" name="golfer" id="golfer" value="<?= $row['golfer']; ?>" placeholder="Enter Golfer" required></td>
        </tr>
        <tr>
            <td> <label><b>Score</b></label></td>
            <td> <input type="number" name="score" id="score" value="<?= $row['score']; ?>" placeholder="Enter Score" required></td>
        </tr>
        <tr>
            <td> <label><b>Par</b></label></td>
            <td> <input type="number" name="par" id="par" value="<?= $row['par']; ?>" placeholder="Enter Par" required></td>
        </tr>
        <tr>
            <td> <label><b>Net</b></label></td>
            <td> <input type="number" name="net" id="net" value="<?= $row['net']; ?>" placeholder="Enter Net" required></td>
        </tr>
        <tr>
            <td> <label><b>Score Through Round</b></label></td>
            <td> <input type="number" name="scoreround" id="scoreround" value="<?= $row['scoreround']; ?>" placeholder="Enter Through Round" required></td>
        </tr>
        <tr>
            <td> <label><b>Net Through Round</b></label></td>
            <td> <input type="number" name="netround" id="netround" value="<?= $row['netround']; ?>" placeholder="Enter Net Through Round" required></td>
        </tr>
        <tr>
            <th colspan="2">
                <button type="submit" name="submit">INSERT RESULT</button> 
                <button type="reset" name="clear" onclick="myFunction()">CLEAR RESULT</button>
                <button type="button"><a href="golfer-view-record.php" style="text-decoration: none;">BACK</a></button>
            </th>
        </tr>
    </table>
</form>

<script>
function myFunction() {
  document.getElementById("golfer").defaultValue = "";
  document.getElementById("score").defaultValue = "";
  document.getElementById("par").defaultValue = "";
  document.getElementById("net").defaultValue = "";
  document.getElementById("scoreround").defaultValue = "";
  document.getElementById("netround").defaultValue = "";
}
</script>

<?php require_once ('footer.php'); ?>