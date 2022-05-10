<?php
/**
 * Created by Hemant Potdar.
 * Date: 10-05-2022
 * Time: 03:08 PM
 */

function convert_number($number)
{
$dictionary = array( 1 => "एक",
2 => "दोन",
3 => "तीन",
4 => "चार",
5 => "पाच",
6 => "सहा",
7 => "सात",
8 => "आठ",
9 => "नऊ",
10 => "दहा",
11 => "अकरा",
12 => "बारा",
13 => "तेरा",
14 => "चौदा",
15 => "पंधरा",
16 => "सोळा",
17 => "सतरा",
18 => "अठरा",
19 => "एकोणीस",
20 => "वीस",
21 => "एकवीस",
22 => "बावीस",
23 => "तेवीस",
24 => "चोवीस",
25 => "पंचवीस",
26 => "सहावीस",
27 => "सत्तावीस",
28 => "अठ्ठावीस",
29 => "एकोणतीस",
30 => "तीस",
31 => "एकतीस",
32 => "बत्तीस",
33 => "तेहतीस",
34 => "चौतीस",
35 => "पस्तीस",
36 => "छत्तीस",
37 => "सदोतीस",
38 => "अडोतीस",
39 => "एकोणचाळीस",
40 => "चाळीस",
41 => "एक्केचाळीस",
42 => "बेचाळीस",
43 => "त्रेचाळीस",
44 => "चौरेचाळीस",
45 => "पंचेचाळीस",
46 => "सेहचाळीस",
47 => "सत्तेचाळीस",
48 => "अठ्ठेचाळीस",
49 => "एकोणपन्नास",
50 => "पन्नास",
51 => "एकावन्न",
52 => "बाव्वन्न",
53 => "त्रेपन्न",
54 => "चौपन्न",
55 => "पंचावन्न",
56 => "छप्पन",
57 => "सत्तावन्न",
58 => "अठ्ठावन्न",
59 => "एकोणसाठ",
60 => "साठ",
61 => "एकसष्ट",
62 => "बासष्ट",
63 => "त्रेसष्ट",
64 => "चौसष्ट",
65 => "पासष्ट",
66 => "सहासष्ठ",
67 => "सदुसष्ट",
68 => "अडुसष्ठ",
69 => "एकोणसत्तर",
70 => "सत्तर",
71 => "एकाहत्तर",
72 => "बहात्तर",
73 => "त्र्याहत्तर",
74 => "चौरेहत्तर",
75 => "पंचाहत्तर",
76 => "हात्तर",
77 => "सत्याहत्तर",
78 => "अठ्ठेहत्तर",
79 => "एकोणऐंशी",
80 => "ऐंशी",
81 => "एक्याऐंशी",
82 => "ब्याऐंशी",
83 => "त्र्याऐंशी",
84 => "चौरेऐंशी",
85 => "पंच्याऐशी",
86 => "सह्यांशी",
87 => "सत्तेऐंशी",
88 => "अठ्ठ्याऐंशी",
89 => "एकोणनव्वद",
90 => "नव्वद",
91 => "एक्याण्णव",
92 => "ब्याण्णव",
93 => "त्र्याण्णव",
94 => "चौऱ्याण्णव",
95 => "पंच्याण्णव",
96 => "शह्याण्णव",
97 => "सत्त्याण्णव",
98 => "अठ्ठ्याण्णव",
99 => "नव्व्याण्णव",
100 => "शंभर",
200 => 'दोनशे',
300 => 'तीनशे',
400 => 'चारशे',
500 => 'पाचशे',
600 => 'सहाशे',
700 => 'सातशे',
800 => 'आठशे',
900 => 'नऊशे',
1000 => 'हजार',
100000 => 'लाख',
1000000 => 'दशलक्ष',
1000000000 => 'अब्ज',
1000000000000 => 'ट्रिलियन',
1000000000000000 => 'चतुर्भुज');



if (!empty($dictionary[$number])) {
if (substr($number, 0, 1) == 0) {
$d = "";
} elseif (strlen($number) == 1 || strlen($number) == 2) {
$d = $dictionary[$number];
} else {
if (substr($number, 0, 1) == 1) {
$d = $dictionary[substr($number, 0, 1)] . " " . $dictionary[$number];
} else {
$d = $dictionary[$number];
}
}
return $d;
} else {
if (strlen($number) == 1) {
if (substr($number, 0, 1) == 0) {
$d = "";
} else {
$d = $dictionary[$number];
}
return $d;
} elseif (strlen($number) == 2) {
if (substr($number, 0, 1) == 0) {
$d = "";
$d1 = substr($number, 1, 1);
return $d . " " . convert_number($d1);
} else {
$d = $dictionary[$number];
return $d;
}
} elseif (strlen($number) == 3) {
if (substr($number, 0, 1) == 0) {
$d = "";
} else {
if (substr($number, 0, 1) == 1) {
$d = $dictionary[substr($number, 0, 1)] . " " . $dictionary[substr($number, 0, 1) . "00"];
} else {
$d = $dictionary[substr($number, 0, 1) . "00"];
}
}
return $d . " " . convert_number(substr($number, 1, 2));
} elseif (strlen($number) == 4) {
if (substr($number, 0, 1) == 0) {
$d = "";
} else {
$d = $dictionary[substr($number, 0, 1)] . " " . $dictionary['1000'];
}
return $d . " " . convert_number(substr($number, 1, 3));
} elseif (strlen($number) == 5) {
if (substr($number, 0, 1) == 0) {
$d = "";
$d1 = substr($number, 1, 4);
} else {
$d = $dictionary[substr($number, 0, 2)] . " " . $dictionary['1000'];
$d1 = substr($number, 2, 3);
}
return $d . " " . convert_number($d1);
} elseif (strlen($number) == 6) {
if (substr($number, 0, 1) == 0) {
$d = "";
} else {
$d = $dictionary[substr($number, 0, 1)] . " " . $dictionary['100000'];
}
return $d . " " . convert_number(substr($number, 1, 5));
} elseif (strlen($number) == 7) {
if (substr($number, 0, 1) == 0) {
$d = "";
$d1 = substr($number, 1, 6);
} else {
$d = $dictionary[substr($number, 0, 2)] . " " . $dictionary['100000'];
$d1 = substr($number, 2, 5);
}
return $d . " " . convert_number($d1);
} elseif (strlen($number) == 8) {
if (substr($number, 0, 1) == 0) {
$d = "";
$d1 = substr($number, 1, 7);
} else {
$d = $dictionary[substr($number, 0, 2)] . " " . $dictionary['1000000'];
$d1 = substr($number, 2, 6);
}
return $d . " " . convert_number($d1);
} elseif (strlen($number) == 9) {
if (substr($number, 0, 1) == 0) {
$d = "";
$d1 = substr($number, 1, 8);
} else {
$d = $dictionary[substr($number, 0, 2)] . " " . $dictionary['1000000'];
$d1 = substr($number, 2, 7);
}
return $d . " " . convert_number($d1);
}
}
}





echo convert_number(10000);

?>