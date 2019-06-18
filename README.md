<p align="center">
    <img alt="Replaque" src="https://i.ibb.co/LDyCz3Z/logo.png" width="400px">
</p>

## Introduction

Replaque is a web app used to maintain the [Blue plaques of Leeds](https://datamillnorth.org/dataset/blue-plaques-of-leeds).
This is done by maintaining a list of all the Blue plaques, along with a 
ticketing system, used to raise a request for a Plaque - which could be anything
from needing a clean, to needing repairs due to vandalism.

> A blue plaque is a permanent sign installed in a public place in the United 
> Kingdom and elsewhere to commemorate a link between that location and a famous 
> person or event, serving as a historical marker.

The app consists of a RESTful JSON API locked down with basic token 
authentication, accompanied by a JavaScript frontend used to interface with the
API.

## Links and resources

* [Laravel 5.8 documentation](https://laravel.com/docs/5.8)
* [Composer documentation](https://getcomposer.org/doc)
* [NPM documentation](https://docs.npmjs.com)
* [Blue plaques of Leeds dataset](https://datamillnorth.org/dataset/blue-plaques-of-leeds)
* [Postman (API client)](https://www.getpostman.com)

## Requirements

This project has two sets of requirements, **core** and **optional**. The core
requirements must be completed by the end of this workshop, whereas the optional
requirements are for you to complete in your own time. They are real world tasks
that would need to be carried out on production ready APIs, so it's highly
recommended you look into them.

### Core requirements

This skeleton [Laravel 5.8](https://laravel.com/docs/5.8) project has been 
provided for you, with the foundation work having already been written for you.

#### OpenAPI specification

An [OpenAPI](https://swagger.io/docs/specification/about) specification has been
written to dictate how the API should work. Once you've followed the **Setup and 
installation** section, you can view the docs by heading to:

* [http://localhost/docs](http://localhost/docs) - for Docker setups
* [http://todo/docs](http://todo/docs) - for Cloud9 setups

#### For you to do

Your jobs will be to finish the API by:

* Complete the controller logic (files located in `app/Http/Controllers/V1/*`) 
* Complete the API resource logic (files located in `app/Http/Resources/*`)

#### Accessing authenticated endpoints

When testing endpoints that require authenticated users, you must provide the
`api_token` parameter as part of the query string. Each user of the system has a
unique token which you can find in the `database/seeds/UsersTableSeeder.php` file.

### Optional requirements

Most of these requirements require knowledge of the subject before being able to
implement them, which is why they have been marked as optional. Look into the
following:

* TODO

## Setup and installation

Depending on your chosen development environment, the setup and installation
slightly differs. Follow the one that matches what you picked:

### Docker

A Docker setup has been provided for you to ensure you have the infrastructure
you need for working on this project. To keep things simple, we have also
provided a helper script called `develop` to abstract the complexities of the 
Docker Compose CLI away from you. 

**This helper script will only work on Mac or Linux. If you plan on using this 
on a different operating system, then please speak to a helper at the 
workshop.**

#### Spinning up the containers

When you first spin up the containers, it may take some time as it first needs
to download the images. You can do this as follows:

```bash
./develop up -d
```

When you need to stop the containers, run the following:

```bash
./develop down
```

> Note that whenever you stop and start the containers, the database will be
> reset to its initial state (with the seeded data).

#### Installing dependencies

Both PHP (Composer) and Node (NPM) dependencies need to be installed, with an
extra step for then compiling the static assets (JS and CSS):

```
./develop composer install
./develop npm install
./develop npm run dev
```

#### Generating an encryption key

Although not explicitly used in this app, Laravel needs one for things such as
encrypting sessions and cookies:

```bash
./develop artisan key:generate
```

#### Running migrations and seeders

The database tables along with the Plaque data has already been provided, so you
only need to run the migration to create the tables and then the seeders to
populate the `plaques` table with the data:

```bash
./develop artisan migrate:fresh --seed
```

### Cloud9

*TODO*

## Deploying

Deployment is done through [Heroku](https://www.heroku.com) whenever you
push a commit to the `master` branch.

*TODO*
