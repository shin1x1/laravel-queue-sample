Laravel Queue Sample
=====================

[![Build Status](https://travis-ci.org/shin1x1/laravel-queue-sample.svg?branch=master)](https://travis-ci.org/shin1x1/laravel-queue-sample)

## Deploy to Heroku

remove composer.lock in .gitignore.

```
$ vim .gitignore
composer.lock <--- remove it
```

git init.

```
$ git init
```

execute `heroku_create` command.

```
$ ./heroku_create
Creating mighty-sea-4703... done, stack is cedar
http://xxxxxxxxxxxxx.herokuapp.com/ | git@heroku.com:xxxxxxxxxxxx.git
Git remote heroku added
Setting config vars and restarting xxxxxxxxxxx... done, v3
LARAVEL_ENV: heroku
Adding heroku-postgresql on xxxxxxxxx... done, v5 (free)
...
```

deploy application to heroku.

```
$ git add .
$ git commit -m 'init'
$ git push heroku master
```


