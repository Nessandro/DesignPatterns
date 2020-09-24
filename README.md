# Design Patterns

Design Patterns with a PHP language

##Run with docker

Run application on Windows distribution with docker (PHP 7.2)
```bash
docker container run -d -p 8080:80 -v %cd%:/var/www/html --name my_php php:7.2-apache
```

Run application on Linux distribution with docker (PHP 7.2)
```bash
docker container run -d -p 8080:80 -v $(pwd):/var/www/html --name my_php php:7.2-apache
```

For build the image, you can use the following command:
```bash
docker image build -t <immage_name> .
```

##License
[MIT](https://choosealicense.com/licenses/mit/)