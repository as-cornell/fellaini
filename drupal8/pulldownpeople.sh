platform mount:download --app=drupal8 --mount=web/sites/people/files --target=web/sites/people/files -y
platform db:dump --app=drupal8 --relationship people -y
drush @drupalvm.people sql-drop -y
drush @drupalvm.people sql-cli < ../ydfzxlmxa2d3a--master-7rqtwti--mysqldb--peopledb--dump.sql
drush @drupalvm.people pmu simplesamlphp_auth
drush @drupalvm.people en twig_vardumper
drush @drupalvm.people cr
drush @drupalvm.people uli
