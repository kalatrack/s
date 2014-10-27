
Start Project CMS using Codeigniter
change the framework directory stucture to make project more secue 
Make difference between Environment 
		Development ------ Production for this use index.php file in main folder
Separate Database for different environment
For this making directory with the same name inside config folder and put there releated databases with there 
 Create Config file inside config folder to setup some config data for our site like title etc.
respective crediential 
	In this Project we use Core functionality to get ride load on the framework to make cms fast smother. Aligent/

===>CI_Controller extend by MY_Controller
===>CI_Model extend by MY_Model in core directory 

create childs controller in library and load them using autoload function in config file of config directory.
----------- Admin_Controller ------Frontend_Controller-----

For the database we like to use migration system of CI 
	Table name ------------- Fields---------------------
	Pages					 [id,title,order,body,slug]	
	Users 					 [id,email,name,password]

inside the MY_Model create core functionality for CRUD Generic System for child class of databases 

MY_Model ['protected-tablename,primarykey,primaryfilter,orderby,timestamp,Rules'--- get(),get_by(),save(),delete()]

create page_m class extend MY_Model [protected-tablename,primarykey,primaryfilter,orderby,timestamp,Rules' 'papulate values of model (page_m)']

page_controller extend frontend_controller [Test our method to perform our CRUD]

Now Style our Project To make it Aligent.

	we have to delete some basic file form the project like welcome controller and view for welcome message

Now for Styling we just download twitter bootstrap and paste them into public directory for time to get start styling.
			
			create _layout_main and _layout_modal into view directory
			now create Controller to load such file for style
			Controller : ===> Deshboard.php Deshboard extends Admin_controller.
			create user controller for login inside admin directory extends Admin_controller
			in user controller make a function login() that contain login system 
			Next thing we have to setup valiation and user Authentication system user Model
			that will rander that data . set up validation rules as public variable and add some rules to it.
	Now time to secue admin authentication system. For that we have to use SESSION .
	load up session library in config/ config.php file. 
	encryption key
	in session setup do some configuration like this 
	take out _ in ci_session -----cisession
	session expire on close ----------TRUE
	sess encryption and cookies ------TRUE
	seesion use database ==------TRUE
	Next create session table to store session .. use migration system
	create_session.php file new some function in user model to check about the user state 
	After completing the User Management System . next we will managing pages that will go load quicker.
-------------------------------------------------
			Pages Management
-------------------------------------------------

create Page.php controller extends Admin_controller 
Add Hiearchy to Pages.
nested set model or modified pre-ordered traversal model but we will use Adjusted model for pages.
ordeing system for pages

/////////////////////////////////////////////////
                   Articles setup
////////////////////////////////////////////////

Article class extends admin controller it is similar to the pages class and model also 
Article class and article setup with its CRUD methods are gone to be done so next working will started as far..............




