<?php

//
//$dom = new DOMDocument();
//
//$dom->loadHTML($html);
//
//$xpath = new DOMXPath($dom);
//$termDescription = [];
//$elements = $xpath->query('//div[@class="section_title"]');
//if (!is_null($elements)) {
//    foreach ($elements as $element) {
//        $nodes = $element->childNodes;
//        foreach ($nodes as $node) {
//            $shortDescription = '';
//            $bracket = explode('(', $node->nodeValue);
//            $term = $bracket[0];
//            if(strpos(end($bracket), ')')) {
//                $shortDescription = explode(')', end($bracket))[0];
//            }
//            $termstr = $term.'~~'.$shortDescription;
//            array_push($termDescription, $termstr);
//        }
//    }
//}
//
//$lines = [];
//
//$elements2 = $xpath->query('//div[@class="section_content sub_divider"]');
//if (!is_null($elements2)) {
//    $i = 0;
//    foreach ($elements2 as $element2) {
//        $line = $termDescription[$i].'~~'.$element2->nodeValue;
//        array_push($lines, $line);
//        $i++;
//    }
//}


//$file = fopen("entries.docs","w");
//
//foreach ($lines as $singleLine)
//{
//    fputcsv($file, explode('~~',$singleLine));
//}
//
//fclose($file);
$file = fopen("entries.docs","w");
echo fwrite($file,"Hello World. Testing!");
fclose($file);
?>