composer install
drush -y rsync @artscicornell.prod."$1":%files/ ~/Sites/drupal-vm-cd/sites/scholsie/docroot/sites/"$2"/files
drush @artscicornell.prod."$1" sql:dump > ~/Sites/drupal-vm-cd/sites/scholsie/docroot/"$2"acquia.sql -y
drush @drupalvm.scholsie."$2" sql-drop -y
drush @drupalvm.scholsie."$2" sql-cli < ~/Sites/drupal-vm-cd/sites/scholsie/docroot/"$2"acquia.sql
drush @drupalvm.scholsie."$2" updb -y
drush @drupalvm.scholsie."$2" dis simplesamlphp_auth -y
drush @drupalvm.scholsie."$2" dis securepages -y
drush @drupalvm.scholsie."$2" vset --yes file_public_path "sites/$2/files"
drush @drupalvm.scholsie."$2" vset --yes file_private_path "sites/$2/files/private"
drush @drupalvm.scholsie."$2" vset --yes file_temporary_path "/tmp"
drush @drupalvm.scholsie."$2" vset --yes preprocess_css FALSE
drush @drupalvm.scholsie."$2" vset --yes preprocess_js FALSE
drush @drupalvm.scholsie."$2" vset --yes jquery_update_jquery_version 1.9
drush @drupalvm.scholsie."$2" vset --yes jquery_update_jquery_admin_version 1.8
drush @drupalvm.scholsie."$2" cc all -y
drush @drupalvm.scholsie."$2" uli
