1. Turn off Hyper-v
	Go to: control Palnel > Programs and Feature > Turn Windowns features on or off > Unchecked Hyper-v > OK
	> Windowns will update and restart windowns
	
2. Install VirtualBox-5.2.20-125813-Win in soft directory formal

3. Install Docker for Windows Installer in soft directory
	Note: 
		Windowns ask "Do you want to allow this app to make change to your divice?" > yes
		Unchecked checkbox "Use windowns containers instead....." > click OK > Restart windowns
		
4. When windowns turn on, any way Docker runing
	Docker ask "Do you want to start service windowns...." > Ok
	Docker ask "Hyper-v features is not enable....." > Cancel
	Docker will exit. > OK
	=> Reason: default docker use Hyper-v to make virtual machine. In this demo I used virtualbox do not use Hyper-v.

5. Remember put your source in to C:/Users/User. Reason virtualbox machine allway share folder in C:/ and User directory have full permission.

6. Deploy project
	- Copy source of demo.zip file to here and unzip file
	Open CMD:
	- Create new machine: 
		docker-machine create dev --driver virtualbox
	- Check docker machine and sure it is runing.
		docker-machine ls
	- If machine not runing:
		docker-machine env dev  /*Apply environment to machine*/
		docker-machine start dev
	- Apply environment to machine
		docker-machine env dev > copy tocken LEM in last command, ex: @FOR /f "tokens=*" %i IN ('docker-machine env dev') DO @%i
	- Pass in to next cusor > enter
	- Run docker compose
		docker-compose up -d
		
7. View to browser
	- Check ip of virtual machine and make sure your Pc can see it.
	- Connect in browser http://yourIpVitualMachine:8080
	
Good luck!!!!!
	
	
	

	