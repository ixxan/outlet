{"changed":true,"filter":false,"title":"resetpassword.php","tooltip":"/Project/pages/UserSystemIncludes/resetpassword.php","value":"<?php\n\nif(isset($_POST[\"reset-password-button\"]))\n{\n    $selecter = $_POST[\"selector\"];\n    $validator = $_POST[\"validator\"];\n    $password = $_POST[\"password\"];\n    $password2 = $_POST[\"password2\"];\n    \n    if(empty($password) || empty($password2))\n    {\n      header(\"Location:/Project/pages/createnewpassword.php?newpassword=empty\");  \n      exit();\n    }\n    else if ($password !== $password2)\n    {\n      header(\"Location:/Project/pages/createnewpassword.php?newpassword=passwordnotmatch\");  \n      exit(); \n    }\n    \n    $currentDate\n}\nelse\n{\n    header(\"Location:/Project/pages/visitorhome.php\");\n}","undoManager":{"mark":-150,"position":100,"stack":[[{"start":{"row":9,"column":38},"end":{"row":9,"column":39},"action":"insert","lines":["w"],"id":149}],[{"start":{"row":9,"column":39},"end":{"row":9,"column":40},"action":"insert","lines":["o"],"id":150}],[{"start":{"row":9,"column":40},"end":{"row":9,"column":41},"action":"insert","lines":["r"],"id":151}],[{"start":{"row":9,"column":41},"end":{"row":9,"column":42},"action":"insert","lines":["d"],"id":152}],[{"start":{"row":9,"column":42},"end":{"row":9,"column":43},"action":"insert","lines":["2"],"id":153}],[{"start":{"row":11,"column":6},"end":{"row":11,"column":56},"action":"insert","lines":["header(\"Location:/Project/pages/visitorhome.php\");"],"id":154}],[{"start":{"row":11,"column":23},"end":{"row":11,"column":53},"action":"remove","lines":["/Project/pages/visitorhome.php"],"id":155},{"start":{"row":11,"column":23},"end":{"row":11,"column":59},"action":"insert","lines":["/Project/pages/createnewpassword.php"]}],[{"start":{"row":11,"column":64},"end":{"row":12,"column":0},"action":"insert","lines":["",""],"id":156},{"start":{"row":12,"column":0},"end":{"row":12,"column":6},"action":"insert","lines":["      "]}],[{"start":{"row":12,"column":6},"end":{"row":12,"column":7},"action":"insert","lines":["e"],"id":157}],[{"start":{"row":12,"column":7},"end":{"row":12,"column":8},"action":"insert","lines":["x"],"id":158}],[{"start":{"row":12,"column":8},"end":{"row":12,"column":9},"action":"insert","lines":["i"],"id":159}],[{"start":{"row":12,"column":9},"end":{"row":12,"column":10},"action":"insert","lines":["t"],"id":160}],[{"start":{"row":12,"column":10},"end":{"row":12,"column":12},"action":"insert","lines":["()"],"id":161}],[{"start":{"row":12,"column":12},"end":{"row":12,"column":13},"action":"insert","lines":[";"],"id":162}],[{"start":{"row":13,"column":5},"end":{"row":14,"column":0},"action":"insert","lines":["",""],"id":163},{"start":{"row":14,"column":0},"end":{"row":14,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":14,"column":4},"end":{"row":14,"column":5},"action":"insert","lines":["e"],"id":164}],[{"start":{"row":14,"column":5},"end":{"row":14,"column":6},"action":"insert","lines":["l"],"id":165}],[{"start":{"row":14,"column":6},"end":{"row":14,"column":7},"action":"insert","lines":["s"],"id":166}],[{"start":{"row":14,"column":7},"end":{"row":14,"column":8},"action":"insert","lines":["e"],"id":167}],[{"start":{"row":14,"column":8},"end":{"row":14,"column":9},"action":"insert","lines":[" "],"id":168}],[{"start":{"row":14,"column":9},"end":{"row":14,"column":10},"action":"insert","lines":["i"],"id":169}],[{"start":{"row":14,"column":10},"end":{"row":14,"column":11},"action":"insert","lines":["f"],"id":170}],[{"start":{"row":14,"column":11},"end":{"row":14,"column":12},"action":"insert","lines":["{"],"id":171}],[{"start":{"row":14,"column":12},"end":{"row":14,"column":13},"action":"insert","lines":["}"],"id":172}],[{"start":{"row":14,"column":11},"end":{"row":15,"column":0},"action":"insert","lines":["",""],"id":173},{"start":{"row":15,"column":0},"end":{"row":15,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":15,"column":5},"end":{"row":17,"column":4},"action":"insert","lines":["","        ","    "],"id":174}],[{"start":{"row":14,"column":11},"end":{"row":14,"column":12},"action":"insert","lines":[" "],"id":175}],[{"start":{"row":14,"column":12},"end":{"row":14,"column":14},"action":"insert","lines":["()"],"id":176}],[{"start":{"row":14,"column":14},"end":{"row":14,"column":15},"action":"insert","lines":["_"],"id":177}],[{"start":{"row":14,"column":14},"end":{"row":14,"column":15},"action":"remove","lines":["_"],"id":178}],[{"start":{"row":14,"column":13},"end":{"row":14,"column":22},"action":"insert","lines":["$password"],"id":179}],[{"start":{"row":14,"column":22},"end":{"row":14,"column":23},"action":"insert","lines":[" "],"id":180}],[{"start":{"row":14,"column":23},"end":{"row":14,"column":24},"action":"insert","lines":["!"],"id":181}],[{"start":{"row":14,"column":24},"end":{"row":14,"column":25},"action":"insert","lines":["="],"id":182}],[{"start":{"row":14,"column":25},"end":{"row":14,"column":26},"action":"insert","lines":["="],"id":183}],[{"start":{"row":14,"column":26},"end":{"row":14,"column":27},"action":"insert","lines":[" "],"id":184}],[{"start":{"row":14,"column":27},"end":{"row":14,"column":37},"action":"insert","lines":["$password2"],"id":185}],[{"start":{"row":11,"column":60},"end":{"row":11,"column":61},"action":"insert","lines":["n"],"id":186}],[{"start":{"row":11,"column":61},"end":{"row":11,"column":62},"action":"insert","lines":["e"],"id":187}],[{"start":{"row":11,"column":62},"end":{"row":11,"column":63},"action":"insert","lines":["w"],"id":188}],[{"start":{"row":11,"column":63},"end":{"row":11,"column":64},"action":"insert","lines":["p"],"id":189}],[{"start":{"row":11,"column":64},"end":{"row":11,"column":65},"action":"insert","lines":["a"],"id":190}],[{"start":{"row":11,"column":65},"end":{"row":11,"column":66},"action":"insert","lines":["s"],"id":191}],[{"start":{"row":11,"column":66},"end":{"row":11,"column":67},"action":"insert","lines":["s"],"id":192}],[{"start":{"row":11,"column":66},"end":{"row":11,"column":67},"action":"remove","lines":["s"],"id":193}],[{"start":{"row":11,"column":65},"end":{"row":11,"column":66},"action":"remove","lines":["s"],"id":194}],[{"start":{"row":11,"column":64},"end":{"row":11,"column":65},"action":"remove","lines":["a"],"id":195}],[{"start":{"row":11,"column":63},"end":{"row":11,"column":64},"action":"remove","lines":["p"],"id":196}],[{"start":{"row":11,"column":62},"end":{"row":11,"column":63},"action":"remove","lines":["w"],"id":197}],[{"start":{"row":11,"column":61},"end":{"row":11,"column":62},"action":"remove","lines":["e"],"id":198}],[{"start":{"row":11,"column":60},"end":{"row":11,"column":61},"action":"remove","lines":["n"],"id":199}],[{"start":{"row":11,"column":59},"end":{"row":11,"column":60},"action":"insert","lines":["?"],"id":200}],[{"start":{"row":11,"column":60},"end":{"row":11,"column":61},"action":"insert","lines":["n"],"id":201}],[{"start":{"row":11,"column":61},"end":{"row":11,"column":62},"action":"insert","lines":["e"],"id":202}],[{"start":{"row":11,"column":62},"end":{"row":11,"column":63},"action":"insert","lines":["w"],"id":203}],[{"start":{"row":11,"column":63},"end":{"row":11,"column":64},"action":"insert","lines":["p"],"id":204}],[{"start":{"row":11,"column":64},"end":{"row":11,"column":65},"action":"insert","lines":["a"],"id":205}],[{"start":{"row":11,"column":65},"end":{"row":11,"column":66},"action":"insert","lines":["s"],"id":206}],[{"start":{"row":11,"column":66},"end":{"row":11,"column":67},"action":"insert","lines":["s"],"id":207}],[{"start":{"row":11,"column":67},"end":{"row":11,"column":68},"action":"insert","lines":["w"],"id":208}],[{"start":{"row":11,"column":68},"end":{"row":11,"column":69},"action":"insert","lines":["o"],"id":209}],[{"start":{"row":11,"column":69},"end":{"row":11,"column":70},"action":"insert","lines":["r"],"id":210}],[{"start":{"row":11,"column":70},"end":{"row":11,"column":71},"action":"insert","lines":["d"],"id":211}],[{"start":{"row":11,"column":71},"end":{"row":11,"column":72},"action":"insert","lines":["="],"id":212}],[{"start":{"row":11,"column":72},"end":{"row":11,"column":73},"action":"insert","lines":["e"],"id":213}],[{"start":{"row":11,"column":73},"end":{"row":11,"column":74},"action":"insert","lines":["m"],"id":214}],[{"start":{"row":11,"column":74},"end":{"row":11,"column":75},"action":"insert","lines":["p"],"id":215}],[{"start":{"row":11,"column":75},"end":{"row":11,"column":76},"action":"insert","lines":["t"],"id":216}],[{"start":{"row":11,"column":76},"end":{"row":11,"column":77},"action":"insert","lines":["y"],"id":217}],[{"start":{"row":16,"column":7},"end":{"row":17,"column":13},"action":"insert","lines":["header(\"Location:/Project/pages/createnewpassword.php?newpassword=empty\");  ","      exit();"],"id":218}],[{"start":{"row":16,"column":6},"end":{"row":16,"column":7},"action":"remove","lines":[" "],"id":219}],[{"start":{"row":16,"column":72},"end":{"row":16,"column":77},"action":"remove","lines":["empty"],"id":220}],[{"start":{"row":16,"column":72},"end":{"row":16,"column":73},"action":"insert","lines":["p"],"id":221}],[{"start":{"row":16,"column":73},"end":{"row":16,"column":74},"action":"insert","lines":["a"],"id":222}],[{"start":{"row":16,"column":72},"end":{"row":16,"column":74},"action":"remove","lines":["pa"],"id":223},{"start":{"row":16,"column":72},"end":{"row":16,"column":80},"action":"insert","lines":["password"]}],[{"start":{"row":16,"column":80},"end":{"row":16,"column":81},"action":"insert","lines":["n"],"id":224}],[{"start":{"row":16,"column":81},"end":{"row":16,"column":82},"action":"insert","lines":["o"],"id":225}],[{"start":{"row":16,"column":82},"end":{"row":16,"column":83},"action":"insert","lines":["t"],"id":226}],[{"start":{"row":16,"column":83},"end":{"row":16,"column":84},"action":"insert","lines":["m"],"id":227}],[{"start":{"row":16,"column":84},"end":{"row":16,"column":85},"action":"insert","lines":["a"],"id":228}],[{"start":{"row":16,"column":85},"end":{"row":16,"column":86},"action":"insert","lines":["t"],"id":229}],[{"start":{"row":16,"column":86},"end":{"row":16,"column":87},"action":"insert","lines":["c"],"id":230}],[{"start":{"row":16,"column":87},"end":{"row":16,"column":88},"action":"insert","lines":["h"],"id":231}],[{"start":{"row":16,"column":88},"end":{"row":16,"column":89},"action":"insert","lines":["e"],"id":232}],[{"start":{"row":16,"column":89},"end":{"row":16,"column":90},"action":"insert","lines":["d"],"id":233}],[{"start":{"row":16,"column":89},"end":{"row":16,"column":90},"action":"remove","lines":["d"],"id":234}],[{"start":{"row":16,"column":88},"end":{"row":16,"column":89},"action":"remove","lines":["e"],"id":235}],[{"start":{"row":18,"column":5},"end":{"row":19,"column":0},"action":"insert","lines":["",""],"id":236},{"start":{"row":19,"column":0},"end":{"row":19,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":19,"column":4},"end":{"row":20,"column":0},"action":"insert","lines":["",""],"id":237},{"start":{"row":20,"column":0},"end":{"row":20,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":20,"column":4},"end":{"row":20,"column":5},"action":"insert","lines":["$"],"id":238}],[{"start":{"row":20,"column":5},"end":{"row":20,"column":6},"action":"insert","lines":["c"],"id":239}],[{"start":{"row":20,"column":6},"end":{"row":20,"column":7},"action":"insert","lines":["u"],"id":240}],[{"start":{"row":20,"column":7},"end":{"row":20,"column":8},"action":"insert","lines":["r"],"id":241}],[{"start":{"row":20,"column":8},"end":{"row":20,"column":9},"action":"insert","lines":["r"],"id":242}],[{"start":{"row":20,"column":9},"end":{"row":20,"column":10},"action":"insert","lines":["e"],"id":243}],[{"start":{"row":20,"column":10},"end":{"row":20,"column":11},"action":"insert","lines":["n"],"id":244}],[{"start":{"row":20,"column":11},"end":{"row":20,"column":12},"action":"insert","lines":["t"],"id":245}],[{"start":{"row":20,"column":12},"end":{"row":20,"column":13},"action":"insert","lines":["D"],"id":246}],[{"start":{"row":20,"column":13},"end":{"row":20,"column":14},"action":"insert","lines":["a"],"id":247}],[{"start":{"row":20,"column":14},"end":{"row":20,"column":15},"action":"insert","lines":["t"],"id":248}],[{"start":{"row":20,"column":15},"end":{"row":20,"column":16},"action":"insert","lines":["e"],"id":249}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":20,"column":16},"end":{"row":20,"column":16},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":27,"mode":"ace/mode/php"}},"timestamp":1551128067728}