
<h1 align="center" style="text-decoration:underline">Projecte Rellotges by lapineda201920</h1>

## Pasos a seguir pel correcte funcionament

0. Instal·lem el Composer, Git i llibreries PHP.
- sudo apt-get install composer git php7.0 php7.0-mbstring php-sqlite3


1. Descarreguem tot el projecte a local.
-  git clone https://github.com/el_meu_user/el_meu_projecte_de_laravel
-  cd el_meu_projecte_de_laravel
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
- Agafem el document docker-compose.yml, el qual està a la carpeta arrel, i el possem a la carpeta on tenim instal·lat el docker-compose.

- Un cop fet això, fem un:
	- sudo docker-compose up -d

- A continuació, obrim el docker-compose:
	- sudo docker-compose up


5. Modifiquem el document .env:
- Anem a la carpeta del projecte, i obrim el terminal. Executem la seguent comanda:
	- gedit .env

- Se'ns obrirà el editor de text. Hem de buscar en el document ua part semblant a la següent, i la modifiquem tal qual està ara:
	* DB_CONNECTION=mysql
	* DB_HOST=172.18.0.1
	* DB_PORT=3306
	* DB_DATABASE=projecte_rellotge
	* DB_USERNAME=projecte_rellotge
	* DB_PASSWORD=projecte_rellotge


6. Migrar DB
- Per a migrar la base de dades, fem la següent comanda:
	- php artisan migrate


7. Posem en marxa:
- Per a posar en marxa, fem la següent comanda:
	- php artisan serve


8. Visitar:
- Per a visitar la base de dades, fem la següent comanda:
	- http://localhost:8000
