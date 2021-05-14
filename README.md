# Laravel Livewire Todo-List

## Installation
1. PHP installieren inkl. CLI, so dass per Terminal/Commandline Befehle ausgeführt werden können
2. Composer installieren (PHP Paket-Manager): [https://getcomposer.org/download/](https://getcomposer.org/download/)
3. vorbereitetes Repo klonen: `git clone https://github.com/simonpirmann/livewire-todo-list.git` <br> Alternativ kann auch die manuelle Einrichtung durchgeführt werden (siehe unten)
4. In das neue Verzeichnis wechseln, z.B. `cd livewire-todo-list`
5. Die benötigten PHP-Packages über Composer installieren: `composer install` <br> Sollte es zu Memory-Problemen kommen hat bei mir folgender Befehl geholfen (anstatt normalem composer install): `php -d memory_limit=-1 $(which composer) install`
6. Eine .env Datei im Root-Verzeichnis anlegen. <br>Im Optimalfall wird die example-Datei kopiert: `cp .env-example .env`
7. Application-Key erstellen: `php artisan key:generate`
8. Server starten: `php artisan serve` <br> In der Console wird der Localhost-Port bzw. der Link zur App angezeigt, im Normalfall: `http://127.0.0.1:8000`
9. Optional: Den Link aufrufen, es sollte "Hello Simon" angezeigt werden.
10. Auch Optional: Unter `/livewire-todo-list/app/Http/Livewire/HelloWorld.php` den Parameter `name` anpassen und überprüfen, ob dieser sich auch auf der Seite geändert hat.


## Manuelle Einrichtung
Bei dem zuvor beschriebenen Vorgehen, wird ein bereits eingerichtetes Repository verwendet.
Für diejenigen, die etwas mehr wollen, ist die folgende manuelle Einrichtung, ohne das Repository.

1. PHP und Composer installieren
2. Laravel installieren
<br>
`composer create-project laravel/laravel laravel-livewire`
<br>
`cd laravel-livewire`


3. Git einrichten (optional)
<br>
`git init`
<br>
`git add *`
<br>
`git commit -m "initial commit"`

4. Livewire installieren
<br>
`composer require livewire/livewire`
<br>
Bei Memory-Problemen:
<br>
`php -d memory_limit=-1 $(which composer) require livewire/livewire`

5. Cleanup  welcome.blade + Livewire  Styles (Z9) und Scripts (Z14) hinzufügen<br>
  <img src="https://www.simon-pirmann.de/codepen-assets/livewire-installation/livewire-installation-cleanup-welcome.png" width="600">

6. Erste Komponente erstellen - Hello World
<br>
`php artisan make:livewire hello-world`

Ergebnis:
<br>
Class / Livewire-Component (wie ein Controller): `app/Http/Livewire/HelloWorld.php`
<br>
View: `resources/views/livewire/hello-world.blade.php`

7. Komponente in View laden:
<br>
`@livewire('hello-world')`


8. Render-Method um Data erweitern:<br>
<img src="https://www.simon-pirmann.de/codepen-assets/livewire-installation/livewire-installation-render-method.png" width="550">

9. Data im Komponen-View ausgeben:<br>
<img src="https://www.simon-pirmann.de/codepen-assets/livewire-installation/livewire-installation-component-view.png" width="250">