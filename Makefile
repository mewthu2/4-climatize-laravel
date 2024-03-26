setup:
	@make up 
up:
	rm -rf 4-climatize-laravel
	git clone https://github.com/mewthu2/4-climatize-laravel
	cp .env /home/dba/app/4-climatize-laravel/4-climatize/.env
	cd 4-climatize-laravel/4-climatize
	npm i
	composer install
	npm run build
	php artisan serve --host "0.0.0.0" --port "8000"
