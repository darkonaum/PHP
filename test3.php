<?php



 $latinica = array(
 	"q" => "љ",
 	"w" => "њ",
 	"e" => "е",
 	"r" => "р",
 	"t" => "т",
 	"y" => "ѕ",
 	"u" => "у",
 	"i" => "и",
 	"o" => "о",
 	"p" => "п",
 	"[" => "ш",
 	"]" => "ѓ",
 	" \ " => "ж",
 	"a" => "а",
 	"s" => "с",
 	"d" => "д",
 	"f" => "ф",
 	"g" => "г",
 	"h" => "х",
 	"j" => "ј",
 	"k" => "к",
 	"l" => "л",
 	";" => "ч",
 	"'" => "ќ",
 	"z" => "з",
 	"x" => "џ",
 	"c" => "ц",
 	"v" => "в",
 	"b" => "б",
 	"n" => "н",
 	"m" => "м",
 	","  => ",",
 	"."  => ".",
 	"/"  => "/",
 );


$tekst = "jas sum darko i ucam vo semos";
echo strtr($tekst,$latinica);



