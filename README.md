jsonHtml
========

About flow from javascript to php using json

This flow is for those coders who want to sent data in JSON format from Javascript using Ajax ,want to manipulate the json data on php page, and again receive the data in Javascript in JSON format

Step1: Data is stored in array in using javascript on Index.php

Step2: Array is converted into json format using JSON.strignify on Index.php

Step3: Converted String is sent to manipulate.php using AJAX : datatype as JSON.
       Here datatype 'JSON' means , data sent and recieved must be in json formatted string. 
       
Step4: String sent using AJAX is accessed on manipulate.php.

Step 5: String is decoded into simple Array using PHP.

Step 6: Now some changes are made in the array content and again converted into associative array.

Step 7: Asscociative array is again encoded into json format and returned.

Step 8: Now returned Json string could be accessed on Index.php.
        Returned string could only be in json format as datatype 'JSON' has been declared in AJAX function.
        
Library Support: Google API Libraries
