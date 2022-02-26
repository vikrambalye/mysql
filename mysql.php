<?php 
	
	### notepad configuration ###
	
# Check Notepad Installed or Notepad
$ notepad++ 
bash command not found	
	-> means bash not configured notepad++
	-> a) right click on pc -> advanced system settings -> environment veriable -> system veriables -> edit path ->add notepad++ path
	-> close all
	-> open again git bash
	-> check now through following command
$ notepad++
	-> opens notepad++ editor
	
#############################################################################################
# 					|	-- 	LOCAL --	 |					#	-- REMOTE --				#
#	Working Area	|	Staging Area	 | Repository Ares	#	  git hub					#
#					|	(Inded Area)	 | .git Floder		#								#	
#############################################################################################

### Regular Commands ###
$ cd
	->  setting path
$ mkdir	
	-> create direcotry/ project
$ ls -al
	-> list all 
$ cd..
	-> one step backward
$ clear
	-> clear commands
$ rm -rf dir
	-> remove dir
	
	
### git Commands ###	
$ git status
	-> tracked ,  un tracked files and also intiated or not

$ git init
	-> git intiation
	
$ git -al
	-> showing all hidden and .git files

$ git add .
	-> . indicates all (working area to staging area)
	
$ git commit -m 'commit message'
	-> commit and message ( staging area to repository ready to move git hub)
	
$ git diff
	-> showing difference between stagged and modified sgag
$ git diff --staged


