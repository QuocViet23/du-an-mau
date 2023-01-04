<?php
    $s = "Hello\nWorld";
    echo $s;
    $s = 'It\'s\n' ; //It's
    echo "\nHello<br>World";
    echo "\u{00C2A9}"; 
    echo "\u{C2A9}<br>";
?>
<?php
    $a = 'hello';
    $$a = 'world';
    echo "$a ${$a}";
?>