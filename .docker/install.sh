git clone --depth 1 https://github.com/phpmyadmin/phpmyadmin.git
cd phpmyadmin
composer update --no-dev
yarn install
cp ../.docker/config.inc.php .
# Cópia da chave para autenticação SSL.
cp ../.docker/rds-combined-ca-bundle.pem .

echo "Done"

cd ..
sudo chmod -R 775 .
source ~/.bashrc