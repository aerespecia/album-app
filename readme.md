## Album App Test
Basic CRUD for Album and Photos <br/>
API: Laravel 7.X <br/>
FE: Quasar <br/>

## Setup

Install dependencies<br/>
`php composer.phar install`

Run migration<br/>
`php artisan migrate`

Run Database Seeder. This will take a few minutes<br/>
`php artisan db:seed --class=PhotoAlbumSeeder`

Start app<br/>
`php artisan serve`
## API LIST

### ALBUMS
GET     /albums         - Returns all albums with corresponding photos<br/>
GET     /albums/{id}    - Returns single Album<br/>
POST    /albums         - Creates new Album<br/>
PUT     /albums/{id}    - Updates an Album<br/>
DELETE  /albums/{id}    - Soft Deletes an Album<br/>

### PHOTOS
GET     /photos         - Returns all photos<br/>
GET     /photos/{id}    - Returns single Photo<br/>
POST    /photos         - Creates new Photo<br/>
PUT     /photos/{id}    - Updates a Photo<br/>
DELETE  /photos/{id}    - Soft Deletes a Photo<br/>
