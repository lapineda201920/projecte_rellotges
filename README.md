
<h1 align="center" style="text-decoration:underline">Projecte Rellotges by lapineda201920</h1>

## Pasos a seguir pel correcte funcionament

0. Instal·lem el Composer, Git i llibreries PHP.
- sudo apt-get install composer php7.2 git php-mbstring php-dom


1. Descarreguem tot el projecte a local.
- Anem  a la carpeta on volem deixar la insta·lació. Fem:
	-  git clone https://github.com/lapineda201920/projecte_rellotges.git
	-  cd projecte_rellotges
	- composer install

2. Descarreguem el Docker:
- Primer de tot, anem a la consola i fem un update:
	- sudo apt-get update

- A continuació, anem a instal·lar el Docker:
	- sudo apt-key adv --keyserver hkp://p80.pool.sks-keyservers.net:80 --recv-keys

- Agreguem el repositori Docker:
	- sudo apt-add-repository 'deb https_//apt.dockerproject.org/repo ubuntu-xenial main'

- Tornem a fer un update:
	- sudo apt-get update

- Comprobem que ens hem descarregat la última versió de Docker:
	- apt-cache policy docker-engine

- Instal·lem el Docker:
	- sudo apt-get install -y docker-engine


3. Descarreguem el Docker-Compose:
- Primer de tot, instal·lem el curl:
	- sudo apt install curl

- A continuació, instal·lem el docker-compose:
	- sudo curl -L "https://github.com/docker/compose/releases/download/1.24.0/docker-compose-$(uname -s)-$(uname -m)" -o /usr/local/bin/docker-compose

- Per acabar, instal·lem el curl:
	- sudo chmod +x /usr/local/bin/docker-compose


4. Emprem el .yml:
- Obrim el docker-compose:
	- sudo docker-compose up


5. Modifiquem el document .env:
- Anem a la carpeta del projecte, i activem l'opció de veure els documents ocults. Agafem el document '.env.example', el copièm i l'engantxem. El document engatxat li canviem el nom per '.env'.

- Obrim el document amb el editor de text. Hem de buscar en el document una part semblant a la següent, i la modifiquem tal qual està ara:
	* DB_CONNECTION=mysql
	* DB_HOST=172.18.0.1
	* DB_PORT=3306
	* DB_DATABASE=projecte_rellotge
	* DB_USERNAME=root
	* DB_PASSWORD=claveroot


6. Migrar DB
- Per a migrar la base de dades, anem al localhost ( http://localhost:8000 ) amb el usuari: root i contrasenya: claveroot. Creem una BD.

- Per a migrar la base de dades, fem la següent comanda:
	- php artisan migrate
	- php artisan db:seed

7. Posem en marxa:
- Per a posar en marxa, fem la següent comanda:
	- php artisan key:generate
	- php artisan serve

- Anem al nostre cercador (Chrome, Firefox, ...)  i possem al buscador d’adalt:
	- localhost:8000

- Si accedim amb usuari: adria@gmail.com i contrasenya: adria, podrem accedir-hi.
