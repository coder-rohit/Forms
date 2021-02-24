<?php

    echo "<table border='1' align='center' width='450px'>";

    echo "<tr>"."<td>"."Name"."</td>"."<td>"."$_POST[fname]"."</td>"."</tr>";
    echo "<tr>"."<td>"."Email"."</td>"."<td>"."$_POST[email]"."</td>"."</tr>";
    echo "<tr><td>Tel</td><td>$_POST[tel]</td></tr>";
    echo "<tr><td>Subject</td><td>$_POST[subject]</td></tr>";

    echo "</table>";

?>