# Test 1 of 3

Test 1 of 3 for Bravi.


## Installing


Clone this Repository.


To install the testing environment it is recommended that you have docker installed in order to get the most out of it.


## Running Docker Images

When running:

`sudo docker-compose up -d`

it will start up all the Docker images and will set the whole environment and you are ready to go.



## Intalling PHP Required Libraries

As the API uses PHP with composer, it is mandatory to install the PHP dependencies:

`sudo docker exec -it test1_php composer install`


## Running the Unit Tests

To test the results for Balanced Brackets run:

`sudo docker exec -it test1_php php vendor/bin/phpunit`

