# HumHub IDE Module Description

This module adds a IDE (Codiad IDE) to the admin backend of Your HumHub installation.  You can use it to edit HumHub themes or to create other development projects. 

To starts the IDE visit the link in the admin panel sidebar **IDE Settings**


***

**NOTE: I will no longer make use of HumHub and I stop updating my modules and themes for HumHub. It is up to you, you are welcome to update the modules and themes in the future.**

***



## Installation
1. Download the module and unzip it
2. Rename the extracted (unziped) folder to ```ide``` (May not be required!)
3. The folder **ide_app** has to be uploaded to the same folder where HumHub is installed
4. Open protected/modules/ide/views/admin/index.php line 17 and check back if the iframe URL fits with your setup
5. Now upload the ide module folder (exclude the ide_app folder) to protected/modules/ and then activate the module from HumHubs admin backend.
6. After activation open the link IDE Settings and start the IDE installer. It is important to setup the **absolut server path to HumHubs theme folder**. In my installation it is: **/var/www/web917/html**. 
7. Have fun!

***

### Info
-  the root path in my installation is **/var/www/web917/html**
-  So for UNIX systems something like: /var/www/sites/my_project
-  And for WIN systems something like: E:/www/sites/my_project

***

### Screenshot


<a href="http://todgmbh.de">
    <img src="https://github.com/WebCrew/HumHub-Ide-Module/blob/master/ide2.png?raw=true" alt="IDE Screenshot"
         title="HumHub IDE Module" align="left" />
</a>

***







### Authors/Module Website

__Codiad IDE website:__ <https://github.com/Codiad/Codiad>

__Module website:__ <https://github.com/WebCrew/HumHub-IDE-Module>  

__Author website:__ [https://github.com/WebCrew](https://github.com/WebCrew)  

__Author:__ WebCrew (Andreas Holzer)


