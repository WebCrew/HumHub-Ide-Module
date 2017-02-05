# HumHub IDE Module Description

This module adds a IDE (CODEIT IDE) to the admin backend of Your HumHub installation.  You can use it to edit HumHub themes or to create other development projects. 

To starts the widget visit the link in the admin panel sidebar **IDE Settings** and then install the IDE. At the installation choose the HumHub themes folder as your project folder.

***



## Installation
1. Download the module and unzip it
2. Rename the extracted (unziped) folder to ```ide``` (May not be required!)
3. The folder **ide_app** has to be uploaded to HumHub **themes folder**
4. Open protected/modules/ide/views/admin/index.php line 17 and check back if the iframe URL fits with your setup
5. Now upload the ide module folder (exclude the ide_app folder) to protected/modules/ and then activate the module from HumHubs admin backend.
6. **Important:** point the IDE to your humhubs **theme folder**. It should become the IDE projects root folder. You have to do this in ide_app/CODEIT/config.php here you can also setup a user. The default useername is **Demo** and the default password is also **Demo**
7. Have fun!

***

### Info
-  the root path in my installation is ../../../themes

***

### Screenshot


<a href="http://todgmbh.de">
    <img src="https://github.com/WebCrew/TodGmbH-HumHub-Theme/blob/master/profile.png?raw=true" alt="IDE Screenshot"
         title="HumHub IDE Module" align="left" />
</a>

***







### Authors/Module Website

__CODEIT IDE website:__ <https://github.com/WebCrew/CODEIT-IDE>

__Module website:__ <https://github.com/WebCrew/HumHub-IDE-Module>  

__Author website:__ [https://github.com/WebCrew](https://github.com/WebCrew)  

__Author:__ WebCrew (Andreas Holzer)


