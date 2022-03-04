<?php
$url = array(
"https://i.imgur.com/zg6hfh6.gif",
"https://i.imgur.com/T7LBxHE.gif",
"https://i.imgur.com/jz4rHDF.gif",
"https://i.imgur.com/nzULtQ0.gif",
"https://i.imgur.com/X0gvigo.gif",
"https://i.imgur.com/vIvQPDF.gif",
"https://i.imgur.com/aAISpZO.gif"
);
$rd = array_rand($url);
$cc = $url [$rd];
$kiss = array(
"url" => $cc,
"author" => "Trần khương",
"success" => "true",
);
$rdimg = json_encode($kiss);

$i = ['\/v\/','\/','L\u00ea C\u00f4ng Quy\u1ec1n'];
$t = ['/v/','/','Trần khương'];
$j = str_replace($i, $t, $rdimg);
echo $j;
