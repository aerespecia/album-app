## Album App Test
Basic CRUD for Album and Photos
API: Laravel 7.X
FE: Quasar

## Setup

Install dependencies
`php composer.phar install`

Run migration
`php artisan migrate`

Run Database Seeder. This will take a few minutes
`php artisan db:seed --class=PhotoAlbumSeeder`

Start app
`php artisan serve`
## API LIST

# ALBUMS
GET     /albums         - Returns all albums with corresponding photos
GET     /albums/{id}    - Returns single Album
POST    /albums         - Creates new Album
PUT     /albums/{id}    - Updates an Album
DELETE  /albums/{id}    - Soft Deletes an Album

# PHOTOS
GET     /photos         - Returns all photos
GET     /photos/{id}    - Returns single Photo
POST    /photos         - Creates new Photo
PUT     /photos/{id}    - Updates a Photo
DELETE  /photos/{id}    - Soft Deletes a Photo
