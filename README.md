# HealthCare-Project

Hospital Management System
Hospital Management System using MySQL, Php and Bootstrap

# Need to work on:

1.Ability to accept the appointment by the doctor to acknowledge the patient that their appointment has been approved.
2.User should not be allowed to register if he/she tries to provide the already registered email ID.
3.The password should be encrypted and the password field shouldn't be displayed in the admin panel.
4.Implementation of pagination for all the list view across the application.

# Prerequisites

1.Install XAMPP web server
2.Any Editor (Preferably VS Code or Sublime Text)
3.Any web browser with latest version

# Languages and Technologies used

1.HTML5/CSS3
2.JavaScript (to create dynamically updating content)
3.Bootstrap (An HTML, CSS, and JS library)
4.XAMPP (A web server by Apache Friends)
5.Php
6.MySQL (An RDBMS that uses SQL)

# Steps to run the project in your machine

1.Download and install XAMPP in your machine
2.Clone or download the repository
3.Extract all the files and move it to the 'htdocs' folder of your XAMPP directory.
4.Start the Apache and Mysql in your XAMPP control panel.
5.Open your web browser and type 'localhost/phpmyadmin'
6.In phpmyadmin page, create a new database from the left panel and name it as 'hms'
7.Import the file 'hms.sql' inside your newly created database and click ok.
8.Open a new tab and type 'localhost/foldername' in the url of your browser
9.Hurray! That's it!

# SOFTWARES USED

1.XAMPP was installed on the Ubuntu 19.04 machine and APACHE2 Server and MySQL were initialized. And, files were built inside opt/lampp/htdocs/hospital
2.Sublime Text 3.2 was used as a text editor.
3.Google Chrome Version 77.0.3865.90 was used to run the project (localhost/myhmsp was used as the url).

# Starting Apache And MySQL in XAMPP:

The XAMPP Control Panel allows you to manually start and stop Apache and MySQL. To start Apache or MySQL manually, click the ‘Start’ button under ‘Actions’.

![59350977-fcc68900-8d3a-11e9-9450-e5c478497caa](https://user-images.githubusercontent.com/80088899/232190743-93cd7ab9-3a1b-4045-acb4-e6fbe5041bfb.png)


# GETTING INTO THE PROJECT:
Hospital Management System in php and mysql. This system has a ‘Home’ page where the Dashboard is present and have all the options for the quick response. 

![image](https://user-images.githubusercontent.com/80088899/232192183-6855805e-0b03-4241-8b6d-0ea4d0fa6a5d.png)


# Login Page:
This system has a ‘Home’ page from where the patient, doctor & administrator can login into their accounts by toggling the tabs accordingly. Fig shows the ‘Home’ page of our project.

![image](https://user-images.githubusercontent.com/80088899/232192553-a3935059-b5bc-4a3e-8012-96bed3d7979a.png)


‘Contact’ page allows users to provide feedback or queries about the services of the hospital. Fig 1.3 shows the ‘Contact’ page.

![image](https://user-images.githubusercontent.com/80088899/232193595-075c786e-0b1c-4112-bed1-41ef9e0e608b.png)


The ‘Home’ page consists of 3 modules:

1.Patient Module
2.Doctor Module
3.Admin Module

# Patient Module:
      This module allows patients to create their account, book an appointment to see a doctor and see their appointment history. The registration page(in the home page itself) asks patients to enter their First Name, Last Name, Email ID, Contact Number, Password and radio buttons to select their gender.

![image](https://user-images.githubusercontent.com/80088899/232196398-5bdbfb85-0a40-47a8-a669-27c62d5da6c7.png)


Once the patient has created his/her own account after clicking the ‘Register’ button, then he will be redirected to his/her Dashboard.

![image](https://user-images.githubusercontent.com/80088899/232196758-5d0ff010-5520-4bcc-8622-b57d78a2dfe3.png)


The Dashboard page allows patients to perform two operations:

1. Book his/her appointment:

      Here, the patients can able to book their appointments to see a doctor. The appointment form fig requires patients to select the doctor that they want to see, Date and Time that they want to meet with the doctor. The consultancy fee will be shown accordingly to the patient as it was already determined by the doctor.
![image](https://user-images.githubusercontent.com/80088899/232197354-ad8a445b-1978-45bc-b97c-4d6b7678daa1.png)


After clicking on the ‘Create new entry’ button, the patient will receive an alert that acknowledges the successful appointment of the patient.(See Fig 1.7)

![image](https://user-images.githubusercontent.com/80088899/232197610-d246c0e2-aa0e-46bf-8872-8b34667393f2.png)


2. View patients’ Appointment History:

      Here, the patient can see their appointment history which contains Doctor Name, Consultancy Fee, Appointment Date and Time.(See Fig 1.8).

![image](https://user-images.githubusercontent.com/80088899/232198334-3b6a8941-0ee4-4957-878d-124a05945ce9.png)


Once the patient has logged out of his account, if he wants to go into his account again, he can login his account, instead of register his account again. Fig 1.9 shows the login page. Clicking on ‘Login’ button will redirect the patient to his dashboard page which we have seen earlier (Fig 1.5)

![image](https://user-images.githubusercontent.com/80088899/232198793-d09ae9f0-9830-4369-8463-5c621a722cae.png)


This is how the patient module works. On the whole, this module allows patients to register their account or login their account(if he/she has one), book an appointment and view his/her appointment history.

Doctor Module:
      The doctors can login into their account which can be done by toggling the tab from ‘Patient’ to ‘Doctor’. Fig 1.10 shows the login form for a doctor. Registration of a doctor account can be done only by admin. We will discuss more about this in Admin Module.

![image](https://user-images.githubusercontent.com/80088899/232199405-1135155f-1d57-4308-a6dc-35584453b9bc.png)


Once the doctor clicking the ‘Login’ button, they will be redirected to their own dashboard which is shown in Fig 1.11

![image](https://user-images.githubusercontent.com/80088899/232200422-6c570df6-2578-46a5-81a6-2eb5a2913bb6.png)


In this page, doctor can able to see their appointments which has been booked by the patients. Fig 1.12 shows the appointment of the doctor ‘Ganesh’ which has been booked by the patient ‘Kartik Bhapakar’ (Fig 1.6). This means that the doctor ‘Sai Charan’ will have an appointment with the patient ‘Kartik Bhapkar’ on 27-04-2023 2:00AM.

![image](https://user-images.githubusercontent.com/80088899/232200545-5fda7643-1f96-49e8-aac4-dcbdb99401a8.png)


In real-time, the doctors will have thousands of appointments. It will be easier for a doctor to search for appointment in the case of more appointments. To make it easier, I have a ‘Search’ box in the navigation bar (See Fig 1.12) which allows doctors to search for a patient by their contact number.       Once everything is done, the doctor can logout of their account. Thus, in general, a doctor can login into his/her account, view their appointments and search for a patient. This is all about Doctor Module.

Admin Module:
      This module is the heart of our project where an admin can see the list of all patients. Doctors and appointments and the feedback/queries received from the ‘Contact’ page. Also admin can add doctor too.       Login into admin account can be done by toggling into admin tab of the Home page. Fig 1.13 shows the login page for admin.       username: admin, password: admin123

![image](https://user-images.githubusercontent.com/80088899/232200993-1aa3c1c5-9660-424d-ba75-4f13d2e6419a.png)


On clicking the ‘Login’ button, the admin will be redirected to his/her dashboard as shown in Fig 1.14.

![image](https://user-images.githubusercontent.com/80088899/232200816-ca7cc2d9-fe9d-4e34-8cf8-7502258daaaf.png)


This module allows admin to perform five major operations:

1. View the list of all patients registered:

      Admin can able to view all the patients registered. This includes the patients’ First Name, Last Name, Email ID, Contact Number and Password. (See Fig 1.15).As like in doctor module, admin can also search for a patient by their contact number in the search box.

![image](https://user-images.githubusercontent.com/80088899/232203050-a51eb707-62ee-470b-8791-e9a95eb29013.png)


2. View the list of all doctors registered:

      Details of the doctors can also be viewed by the admin. This details include the Name of the doctor, Password, Email and Consultancy fees, shown in Fig 1.16. Searching for a doctor can be done by using the doctor’s Email ID in the search box.

![image](https://user-images.githubusercontent.com/80088899/232203092-5ffdf3c8-9362-4a08-9b72-eb310d373926.png)


3. View the Appointment lists:

      Admin can also able to see the entire details of the appointment that shows the appointment details of the patients with their respective doctors. This includes the First Name, Last Name, Email and Contact Number of patients, doctor’s name, Appointment Date, Time and the Consultancy Fees. (See Fig 1.17).

![image](https://user-images.githubusercontent.com/80088899/232204812-95b49cce-1abc-4590-bb4d-a2db0e6f7904.png)


4. Add Doctor:

      Admin alone can add a new doctor since anyone can register as a doctor if we put this section on the home page. This form asks Doctor’s Name, Email ID, Password and his/her Consultancy Fees.(See Fig 1.18)

![image](https://user-images.githubusercontent.com/80088899/232205162-40780489-27f0-4fd1-bc8a-cba0d32d2edd.png)


After adding a new doctor, if we check the doctor’s list, we will see the details of new doctor is added to the list as shown in the Fig 1.19

![image](https://user-images.githubusercontent.com/80088899/232205337-0261d9fd-2b65-402e-959d-319f969a9c58.png)


5. View User’s feedback/Queries:

      Admin is allowed to view the feedback/Query that has been given by the user in the ‘Contact’ page (Refer Fig 1.3). This includes User’s Name, Email Id, Contact Number and the message(Feedback/ Query) as shown in the Fig 1.20.

![image](https://user-images.githubusercontent.com/80088899/232205457-c3cb8a46-2133-4ac3-a1e7-eb5bc8db42ef.png)


      Taking everything into consideration, admin can able to view the details of patients and doctors, appointment details, Feedback by the user and can add a new doctor. Once everything is done, the admin can logout from his account.
