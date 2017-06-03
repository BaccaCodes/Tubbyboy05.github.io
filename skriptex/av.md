# Advanced Coding


## Auto Updater
* Step 1:
* - Goto your github account

* Step 2:
* - Create Autoupdater.sk and code.sk

* Step 3:
* - In autoupdater.sk type:

```
on load:
	delete file "plugins/Skript/scripts/code.sk"
	create file "plugins/Skript/scripts/code.sk"

	
	download from "https://raw.githubusercontent.com/[GitHub Name]/[Repo Name]/master/code.sk" to "plugins/Skript/scripts/code.sk"


	execute console command "sk reload code.sk"




		
on unload:
	delete file "plugins/Skript/scripts/code.sk"
	delete file "plugins/Skript/scripts/code.sk"```
  
* Step 4:
* - Your Done!
