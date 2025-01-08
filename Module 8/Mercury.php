<?php
namespace Jupiter ;
include "Planet.php" ;
include "Venus.php" ;
$planet = new \Jupiter\Planets\Planet() ;
$earth = new \Jupiter\Planets\Venus() ;
$planet -> sayHi() ;
$earth -> sayHi() ;

// Output : Planet
//          Earth