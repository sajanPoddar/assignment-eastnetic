### Installation
Follow the instructions below to install the project:

- Clone the repository using `git clone <git-repo-path>`
- Create `.env` by copying the `env.example` file
- `composer install`
- `php artisan key:generate`
- Update the `.env` file.
- in database/sql given `persons` sql file . Need to import that file in your db system
- currently it is given via mysql db
- Redis install in your server
- Ensure that you have set the below KEY (along with the Database cred) in the environment file:
    - CACHE_DRIVER will be redis

That's it!
