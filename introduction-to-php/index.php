<?php
/*
+---+
| 1 | 
+---+
Print the sentence: <strong><em>Welcome to PHP!</strong></em>
*/ 
echo "<strong><em>Welcome to PHP!</em></strong>";

// task separator
echo "<hr style=\"margin 1rem 0\"&gt;>";

/* 
+---+
| 2 | 
+---+
Print the sentence: <strong><em>PHP stands for "Hypertext Preprocessor"!</strong></em>
*/

echo " <strong><em>PHP stands for 'Hypertext Preprocessor'! </em></strong>";

// task separator
echo "<hr style=\"margin 1rem 0\"&gt;>";
    
/* 
+---+
| 3 | 
+---+
Print the following sentence as a paragraph: <strong><em>PHP stands for "Hypertext Preprocessor"!</strong></em>
*/
echo "<p><strong><em>PHP stands for 'Hypertext Preprocessor'!</em></strong></p>";

// task separator
echo "<hr style=\"margin 1rem 0\"&gt;>";
    
/* 
+---+
| 4 | 
+---+
Print the following acronyms - every acronym in a new line:
<strong><em>
HTML - Stands for Hypertext Markup Language
CSS - Stands for Cascading Stylesheet
JS - Stands for JavaScript
PHP - Stands for Hypertext Preprocessor
SQL - Stands for Structural Query Language</em></strong>
*/
echo "
<p><strong><em>HTML - Stands for Hypertext Markup Language</em></strong></p>
<p><strong><em>CSS - Stands for Cascading Stylesheet</em></strong></p>
<p><strong><em>JS - Stands for JavaScript</em></strong></p>
<p><strong><em>PHP - Stands for Hypertext Preprocessor</em></strong></p>
<p><strong><em>SQL - Stands for Structural Query Language</em></strong></p>";

// task separator
echo "<hr style=\"margin 1rem 0\"&gt;>";
    
/* 
+---+
| 5 | 
+---+
Print the following acronyms in unordered list - &lt;ul&gt; ... &lt;/ul&gt;:
<strong><em>
HTML - Stands for Hypertext Markup Language
CSS - Stands for Cascading Stylesheet
JS - Stands for JavaScript
PHP - Stands for Hypertext Preprocessor
SQL - Stands for Structural Query Language</em></strong>
*/
echo "<ul><strong><em>
            <li>HTML - Stands for Hypertext Markup Language</li>
            <li>CSS - Stands for Cascading Stylesheet</li>
            <li>JS - Stands for JavaScript </li>
            <li>PHP - Stands for Hypertext Preprocessor</li> 
            <li>SQL - Stands for Structural Query Language</li>
    </em></strong></ul>";

// task separator
echo "<hr style=\"margin 1rem 0\"&gt;>";
?>