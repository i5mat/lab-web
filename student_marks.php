<?php require_once ('header.php'); ?>

<form>
    <table border="1">
        <tr>
            <th>Name</th>
            <th>Student ID</th>
            <th>Carry Mark (70%)</th>
            <th>Final Exam Mark (30%)</th>
            <th>Total Mark (100%)</th>
        </tr>
        <tr>
            <td>Aisyah Najwa Binti Abu Bakar</td>
            <td>001</td>
            <td><input type="number" id="cm1" size="4" min="0" max="70"></td>
            <td><input type="number" id="fe1" size="4" min="0" max="30"></td>
            <td><input type="number" id="total1" size="4" disabled></td>
        </tr>
        <tr>
            <td>Fitriah Binti Samad</td>
            <td>002</td>
            <td><input type="number" id="cm2" size="4" min="0" max="70"></td>
            <td><input type="number" id="fe2" size="4" min="0" max="30"></td>
            <td><input type="number" id="total2" size="4" disabled></td>
        </tr>
        <tr>
            <td>Mohd Ashraf Bin Azmi</td>
            <td>003</td>
            <td><input type="number" id="cm3" size="4" min="0" max="70"></td>
            <td><input type="number" id="fe3" size="4" min="0" max="30"></td>
            <td><input type="number" id="total3" size="4" disabled></td>
        </tr>
    </table>
    <p>
        <input type="button" id="bt" value="Show Result" onclick
    ="showTotalMark()" />
    </p>
    <p>
        Average Mark: <input type="text" id="average">
    </p>
    <p>
        Highest Mark: <input type="text" id="highest">
    </p>
    <p>
        Lowest Mark: <input type="text" id="lowest">
    </p>
</form>

<script>
function showTotalMark() {

  // TOTAL MARKS FOR AISHAH
  const aishah = document.getElementById("cm1").value
  const aishah1 = document.getElementById("fe1").value
  const tot = parseInt(aishah) + parseInt(aishah1)

  // TOTAL MARKS FOR FITRIAH
  const fitriah = document.getElementById("cm2").value
  const fitriah1 = document.getElementById("fe2").value
  const tot1 = parseInt(fitriah) + parseInt(fitriah1)

  // TOTAL MARKS FOR ASHRAF
  const ashraf = document.getElementById("cm3").value
  const ashraf1 = document.getElementById("fe3").value
  const tot2 = parseInt(ashraf) + parseInt(ashraf1)
  
  // DISPLAY VALUE IN INPUT FIELD
  document.getElementById("total1").defaultValue = tot
  document.getElementById("total2").defaultValue = tot1
  document.getElementById("total3").defaultValue = tot2

  // FIND AVERAGE
  const purata = (tot + tot1 + tot2) / 3
  document.getElementById("average").defaultValue = purata

  // FIND HIGHEST
  const high = Math.max(tot, tot1, tot2)
  document.getElementById("highest").defaultValue = high

  // FIND LOWEST
  const low = Math.min(tot, tot1, tot2)
  document.getElementById("lowest").defaultValue = low

}
</script>

<?php require_once ('footer.php'); ?>