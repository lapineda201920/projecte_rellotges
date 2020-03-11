
<h1 align="center">Projecte Rellotges by lapineda201920</h1>

## Pasos a seguir pel correcte funcionament

0. Descarreguem tot el projecte a local.
- 

1. Descarreguem tot el projecte a local.
- 

2. Descarreguem el Docker:
- Primer de tot, anem a la consola i fem un update:
	- sudo apt-get update

- A continuació, anem a instal·lar el Docker:
	- sudo apt-key adv --keyserver hkp://p80.pool.sks-keyservers.net:80 --recv-keys

- Agreguem el repositori Docker:
	- sudo apt-add-repository 'deb https_//apt.dockerproject.org/repo ubuntu-xenial main'

- Tornem a fer un update:
	- sudo apt-get update

- :
	- apt-cache policy docker-engine

- :
	- sudo apt-get install -y docker-engine

- :
	- docker docker-subcommand --help

- :
	- sudo docker pull ubuntu

- :
	- sudo docker run -it ubuntu

	- apt-get update

	- apt-get install -y nodejs --fix-missing

	- exit

3. Descarreguem el Docker-Compose:
- Primer de tot, instal·lem el curl:
	- sudo apt install curl

- A continuació, instal·lem el docker-compose:
	- sudo curl -L "https://github.com/docker/compose/releases/download/1.24.0/docker-compose-$(uname -s)-$(uname -m)" -o /usr/local/bin/docker-compose

- Per acabar, instal·lem el curl:
	- sudo chmod +x /usr/local/bin/docker-compose

4. Emprem el .yml:
- Agafem el document docker-compose.yml, el qual està a la carpeta arrel, i el possem a la carpeta on tenim instal·lat el docker-compose.

- Un cop fet això, fem un:
	- sudo docker-compose up -d

- A continuació, obrim el docker-compose:
	- sudo docker-compose up

