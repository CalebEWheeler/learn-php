Thank you for taking the time to view my repository on my journey learning PHP.

Before cloning this repo, ensure that you have the proper stack downloaded to be able to clone this repository to the proper directory 'htdocs'. There are quite a few different stacks available for your PHP environment. For the purposes of this project the stack I am using is MAMP on MacOS, and the IDE I am using is VSCode. 

  • MAMP can be used on MacOS or Windows, it can be downloaded at this url: 
      https://www.mamp.info/en/downloads/

Other stacks are also available like XAMPP, which is a cross-platform stack that can be used on Linux, Windows, and MacOS. 

Setup
----------------------------------------------------------------
 
*FOR MacOS USERS ONLY*
  After you have downloaded the stack you choose to use, open your preferred IDE and in the terminal cd to MacintoshHD. Typically you will be cd'd to the root directory of your logged in user, to get to the correct directory type the following into the terminal 'cd /'. You will now be in MacintoshHD directory, from here type in the terminal 'cd applications/PREFERRED_STACK/htdocs' in my case I am using MAMP so I am typing in the terminal 'cd applications/mamp/htdocs'. From here VSCode makes it easy to clone github repositories to a project. 

    • Click 'fn + f1' and a dialogue box will appear at the top of VSCode
    • Type into the dialogue box 'gitcl' 
    • Select the option 'Git:clone'
    • Type into the new dialogue box the URL path to this repository:
        'https://github.com/CalebEWheeler/learn-php'

*FOR OTHER OS USERS*
  Whichever stack you decide to use, ensure that in your IDE's terminal you cd to the location of your stack and you are cd'd into the directory 'htdocs'.  
  -*All PHP files should live in 'htdocs' for proper deployment purposes*-
  Whichever IDE you decide to use, learn that IDE's method for cloning Github repositories. Each IDE is a little different, the majority of my experience is coming from IntelliJ. Each is easy, but VSCode's method is much easier to utilize. 


*Database Setup*
  Create this file in 'htdocs', '/LearnPHP/MySQL/db.php', and paste lines 31-36 into it. 

    //mysqli_connect is PHP's method to connect to the MySQL database in the stacks
    //mysqli_connect will take in four parameters('SERVER', 'USERNAME', 'PASSWORD', 'DATABASE_NAME');
    $connection = mysqli_connect('SERVER', 'USERNAME', 'PASSWORD', 'DATABASE_NAME');

    //if will check if the connection is true and display a message in the browser if the connection is established.
    if(!$connection) { die("Database connection failed."); }

    Apply the following to line 33
    ------------------------------

    • If you are locally serving your application replace 'SERVER' with 'localhost';
    • Next, enter your database credentials. Replace 'USERNAME' with your username and 'PASSWORD' with your password.
    • Finally, replace the 'DATABASE_NAME' with your created database name for the application. 

    If you create the proper file path for the application the .gitignore file should not track the db.php file! If the db.php file is tracked, check your file path for the file and ensure it is correct.
    
Happy coding!