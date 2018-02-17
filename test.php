<?php
require_once 'ereg-wrapper.php';

$subj = "This sentence contains the telnet URL telnet://10.19.21.4";
$pat  = "telnet://([a-z0-9.]+)";

echo "EREG test :\n\n";
if ( ereg ($pat, $subj, $regs) ) {
	print_r ($regs);
}

echo "\nEREGI test :\n\n";
$pat  = "TELNET://([a-z0-9.]+)";
if ( eregi ($pat, $subj, $regs) ) {
	print_r ($regs);
}

echo "\nEREG REPLACE test : ";
$pat  = "telnet://([a-z0-9.]+)";
echo ereg_replace ($pat, "https://\\1", $subj) . "\n";

echo "\nEREGI REPLACE test : ";
$pat  = "TELNET://([a-z0-9.]+)";
echo eregi_replace ($pat, "https://\\1", $subj) . "\n";

echo "\nSPLIT test : ";
$date = "04/30/1973";
list($month, $day, $year) = split('[/.-]', $date);
echo "Month: $month; Day: $day; Year: $year\n";

echo "\nSQL RECASE test : ";
echo sql_regcase("Foo - bar.") . "\n";

?>
