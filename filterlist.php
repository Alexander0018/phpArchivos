<?php


print "<table>";
print "<tr>";
print "<td>Nombre</td>";
print "<td>ID</td>";
print "</tr>";

foreach (filter_list() as $id => $filtro) {
    print "<tr>";
    print "<td>".$filtro."</td>";
    print "<td>".filter_id($filtro)."</td>";
    print "</tr>";

    print "</tr>";
}

print "</table>";
?>