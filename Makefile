docker-up:
	docker-compose up -d

docker-up-build:
	docker-compose up --build -d

docker-restart:
	docker-compose down --remove-orphans && docker-compose up -d

docker-down:
	docker-compose down --remove-orphans

composer-install:
	docker container exec -it magento-php-cli composer install

composer-update:
	docker container exec -it  magento-php-cli composer update

composer-require-dev:
	docker container exec -it magento-php-cli composer require --dev ${p}

composer-require:
	docker container exec -it magento-php-cli composer require ${p}

composer-command:
	docker container exec -it magento-php-cli composer ${c}

yarn-install:
	docker-compose exec node yarn install

yarn-add:
	docker-compose exec node yarn add ${p}

yarn-run-dev:
	docker-compose exec node yarn run dev

assets-install:
	docker-compose exec node yarn install

chmod:
	sudo chmod -R 777 ${p}

chmod-all:
	sudo chmod -R 777 ./

m-cache-flush:
	docker container exec -it magento-php-cli bin/magento cache:flush

m-cache-clean:
	docker container exec -it magento-php-cli bin/magento cache:clean

m-reindex:
	 docker container exec -it magento-php-cli bin/magento indexer:reindex

m-setup-upgrade:
	docker container exec -it magento-php-cli bin/magento setup:upgrade

m-setup-install:
	docker container exec -it magento-php-cli bin/magento setup:upgrade

m-setup-content-deploy:
	docker container exec -it magento-php-cli bin/magento setup:static-content:deploy
