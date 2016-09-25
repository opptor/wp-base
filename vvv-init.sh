if [ ! -d "htdocs/wp-admin" ]; then
	echo 'Installing WordPress (release version) in wp-base/htdocs...'
	if [ ! -d "./htdocs" ]; then
		mkdir ./htdocs
	fi
	cd ./htdocs
	wp core download --locale=en_US --allow-root 
	wp core config --dbname="wp-base" --dbuser=wp --dbpass=wp --dbhost="localhost" --dbprefix=wp_ --locale=en_US --allow-root --extra-php <<PHP
define( 'WP_DEBUG', true );
define( 'WP_DEBUG_DISPLAY', false );
define( 'WP_DEBUG_LOG', true );
define( 'SCRIPT_DEBUG', true );
define( 'JETPACK_DEV_DEBUG', true );
if ( isset( \$_SERVER['HTTP_HOST'] ) && preg_match('/^(wp-base.)\d{1,3}\.\d{1,3}\.\d{1,3}\.\d{1,3}(.xip.io)\z/', \$_SERVER['HTTP_HOST'] ) ) {
define( 'WP_HOME', 'http://' . \$_SERVER['HTTP_HOST'] );
define( 'WP_SITEURL', 'http://' . \$_SERVER['HTTP_HOST'] );
}
PHP
	wp core install --url=wp-base.dev --title="wp-base" --admin_user=admin --admin_password=password --admin_email=admin@localhost.dev --allow-root
	curl -s https://raw.githubusercontent.com/manovotny/wptest/master/wptest.xml > import.xml && wp plugin install wordpress-importer --allow-root  && wp plugin activate wordpress-importer --allow-root  && wp import import.xml --authors=skip --allow-root && rm import.xml
	cd -
fi
