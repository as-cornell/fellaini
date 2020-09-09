platform mount:download --app=drupal8 --mount=web/sites/default/files --target=web/sites/default/files -y
platform db:dump --app=drupal8 --relationship first -y
drush @drupalvm.fellaini sql-drop -y
drush @drupalvm.fellaini sql-cli < ../ydfzxlmxa2d3a--master-7rqtwti--mysqldb--firstdb--dump.sql
drush @drupalvm.fellaini pmu simplesamlphp_auth
drush @drupalvm.fellaini en twig_vardumper
drush @drupalvm.fellaini cr
drush @drupalvm.fellaini uli
