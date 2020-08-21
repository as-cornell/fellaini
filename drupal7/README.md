# Scholsie

Old school Drupal in a composer based package for plagtform.sh.

![Scholsie](scholsie.jpg)


## Post-install

1. Run through the Drupal installer as normal.  You will not be asked for database credentials as those are already provided.

2. Once Drupal is fully installed, We strongly recommend switching to Redis-based caching.  See [the documentation](https://docs.platform.sh/frameworks/drupal7/redis.html) for instructions on how to do so.

## Customizations

The following files are of particular importance.  If using this project as a reference for your own existing project, replicate the changes below to your project.


* The `.platform.app.yaml`, `.platform/services.yaml`, and `.platform/routes.yaml` files have been added.  These provide Platform.sh-specific configuration and are present in all projects on Platform.sh.  You may customize them as you see fit.
* The `.platform.template.yaml` file contains information needed by Platform.sh's project setup process for templates.  It may be safely ignored or removed.
* The `settings.platformsh.php` file contains Platform.sh-specific code to map environment variables into Drupal configuration. You can add to it as needed. See [the documentation](https://docs.platform.sh/frameworks/drupal7.html) for more examples of common snippets to include here.
* The `settings.php` file has been heavily customized to only define those values needed for both Platform.sh and local development.  It calls out to `settings.platformsh.php` if available.  You can add additional values as documented in `default.settings.php` as desired.  It is also setup such that when you install Drupal on Platform.sh the installer will not ask for database credentials as they will already be defined.


## References

* [Drupal](https://www.drupal.org/)
* [Drupal on Platform.sh](https://docs.platform.sh/frameworks/drupal7.html)
* [PHP on Platform.sh](https://docs.platform.sh/languages/php.html)
