#!/bin/sh

cd ./docker/lint

docker-compose up -d
docker-compose exec lint ./vendor/bin/phpcs
docker-compose kill

cd ../../
