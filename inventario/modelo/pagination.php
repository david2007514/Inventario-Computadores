<?php
function paginate($recargar, $pagina, $tpages, $adjacents)
{
    $prevlabel = "&lsaquo; Prev";
    $nextlabel = "Next &rsaquo;";
    $out       = '<ul class="pagination pagination-large">';

    // previous label

    if ($pagina == 1) {
        $out .= "<li class='disabled'><span><a>$prevlabel</a></span></li>";
    } else if ($pagina == 2) {
        $out .= "<li><span><a href='javascript:void(0);' onclick='load(1)'>$prevlabel</a></span></li>";
    } else {
        $out .= "<li><span><a href='javascript:void(0);' onclick='load(" . ($pagina - 1) . ")'>$prevlabel</a></span></li>";

    }

    // first label
    if ($pagina > ($adjacents + 1)) {
        $out .= "<li><a href='javascript:void(0);' onclick='load(1)'>1</a></li>";
    }
    // interval
    if ($pagina > ($adjacents + 2)) {
        $out .= "<li><a>...</a></li>";
    }

    // pages

    $pmin = ($pagina > $adjacents) ? ($pagina - $adjacents) : 1;
    $pmax = ($pagina < ($tpages - $adjacents)) ? ($pagina + $adjacents) : $tpages;
    for ($i = $pmin; $i <= $pmax; $i++) {
        if ($i == $pagina) {
            $out .= "<li class='active'><a>$i</a></li>";
        } else if ($i == 1) {
            $out .= "<li><a href='javascript:void(0);' onclick='load(1)'>$i</a></li>";
        } else {
            $out .= "<li><a href='javascript:void(0);' onclick='load(" . $i . ")'>$i</a></li>";
        }
    }

    // interval

    if ($pagina < ($tpages - $adjacents - 1)) {
        $out .= "<li><a>...</a></li>";
    }

    // last

    if ($pagina < ($tpages - $adjacents)) {
        $out .= "<li><a href='javascript:void(0);' onclick='load($tpages)'>$tpages</a></li>";
    }

    // next

    if ($pagina < $tpages) {
        $out .= "<li><span><a href='javascript:void(0);' onclick='load(" . ($pagina + 1) . ")'>$nextlabel</a></span></li>";
    } else {
        $out .= "<li class='disabled'><span><a>$nextlabel</a></span></li>";
    }

    $out .= "</ul>";
    return $out;
}
