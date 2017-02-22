# FitnessPal
This is a web application aimed to enhance the user's fitness and health lifestyle.
This application tells the user their BMI, BMR, the total calories they need to consume, the total calories they burn after a certain activity for period of time, target heart rate when exercising, and gives them a wide range of exercises to do.
It also gives advice and tips on how to become or remain fit and healthy.

PLEASE READ THESE INSTRUCTIONS

Please have XAMPP installed as the program runs on the localhost.
On XAMPP, activate Apache and MySQL

NOTE: If you encounter an error trying to activate the servers, it is most likely an issue with available ports.
The default port Apache uses is 80, but port 80 may already be used by another program on your system.
To change the port Apache uses, click the 'Config' button under actions for Apache. A list will appear, and click the first item, 'Apache (httpd.conf)'
In that file, press Ctrl+F and replace any instance where it says 80 with any different number, as long as that port is not used by another program (I used 8080).
Close the file and try run the servers again.

Download the FitnessPal.zip file.
Unzip that file in the 'htdocs' folder in the xampp folder on your system. If you used the default installation location, the path of that folder should be C:\xampp\htdocs
Therefore, the path for the index.php file should be C:\xampp\htdocs\FitnessPal\index.php

Download the database.sql file
Import the database.
To import the database, click the 'Admin' button under actions for MySQL, or enter the URL http://localhost:8080/phpmyadmin (8080 is the port Apache is listening through. If the port it is listening through on your system is differet, replace 8080 with that port.)
On the left of the page, click the 'New' button. Enter the name of the database as 'fitness_pal'. Please enter it word for word, then click 'Create'.
After that, click the 'Import' button on the toolbar at the top of the page. Simply upload the database.sql file and click 'Go'.
This should import the tables of the database into the database.

In your web browser, preferrably Google Chrome, enter the URL http://localhost:8080/FitnessPal/ (Again, 8080 is the port Apache is listening through. If the port it is listening through on your system is differet, replace 8080 with that port.)
