<?php

    echo "<table border='1' align='center' width='450px'>";

    echo "<tr>"."<td>"."Name"."</td>"."<td>"."$_POST[name]"."</td>"."</tr>";
    echo "<tr>"."<td>"."Address"."</td>"."<td>"."$_POST[address]"."</td>"."</tr>";
    echo "<tr>"."<td>"."Email"."</td>"."<td>"."$_POST[email]"."</td>"."</tr>";
    echo "<tr>"."<td>"."Gender"."</td>"."<td>"."$_POST[gender]"."</td>"."</tr>";
    echo "<tr><td>DOB</td><td>$_POST[dob]</td></tr>";
    echo "<tr><td>Tel</td><td>$_POST[tel]</td></tr>";
    echo "<tr><td>City</td><td>$_POST[city]</td></tr>";
    echo "<tr><td>Zip Code</td><td>$_POST[code]</td></tr>";
    echo "<tr><td>Qualification</td><td>$_POST[qual]</td></tr>";

    echo "</table>";

?>