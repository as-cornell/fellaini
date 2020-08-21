# Fellaini

Fellaini does what Fellaini is going to do.

![Fellaini](Fellaini.png)

## Drupal project template for Platform.sh

This project provides a starter kit for Drupal 8 multisite projects hosted on [Platform.sh](http://platform.sh). It
is very closely based on the [Drupal Composer project](https://github.com/drupal-composer/drupal-project).

It differs slightly from the standard [Drupal 8 project template](https://github.com/platformsh/platformsh-example-drupal8), in that it is setup for 2 multi-site instances, named `first` and `second`, both of which are setup to be subdomains of the same parent domain.  It can be used directly or as a reference for modifying your own project.

## Starting a new project

To start a new Drupal 8 project on Platform.sh, you have 2 options:

1. Create a new project through the Platform.sh user interface and select "start
   new project from a template".  Then select Drupal 8 as the template. That will
   create a new project using this repository as a starting point.

2. Take an existing project, add the necessary Platform.sh files, and push it
   to a Platform.sh Git repository. This template includes examples of how to
   set up a Drupal 8 site.  (See the "differences" section below.)

## Using as a reference

You can also use this repository as a reference for your own Drupal projects, and borrow whatever code is needed.

The important differences from the Drupal 8 template are as follows:

* The [`routes.yaml`](.platform/routes/yaml) file has two routes defined, one for each subdomain.  Each subdomain corresponds to a separate Multisite instance.

* There is a single MariaDB service that has a separate database and endpoint defined for each instance.  See [`services.yaml`](.platform/services.yaml#L9)

* The [`.platform.app.yaml` file](.platform.app.yaml#L21) has a separate relationship defined for each database, named the same.

* Each instance has its own [`sites`](web/sites) directory.  Note that while they are named consistently with the subdomain name they are not using the full domain name per Drupal default.  That's because the domain name will vary with the branch, and mapping in `sites.php` is required.

* The [`sites.php` file](web/sites/sites.php) includes code to dynamically map the request site name to the appropriate directory.  The code there is written to assume a subdirectory configuration.  It will almost certainly need to be modified for your site.  Additionally, production domain names should be added as well as explict maps.

* Each instance has its own [`settings.php` file](web/sites/default/settings.php).  The only notable difference from the single-site version is the definition of a `$platformsh_subsite_id` variable.  This variable is used in the shared `settings.platformsh.php` file, which is included from the `web/sites` directory.

* The unified [`settings.platformsh.php` file](web/sites/settings.platformsh.php) is nearly identical to the one used by the single-site version, except it uses the `$platformsh_subsite_id` to determine which database relationship has the credentials for its database.

## Managing a Drupal site built with Composer

Once the site is installed, there is no difference between a site hosted on Platform.sh
and a site hosted anywhere else.  It's just Composer.  See the [Drupal documentation](https://www.drupal.org/node/2404989)
for tips on how best to leverage Composer with Drupal 8.

## How does this starter kit differ from vanilla Drupal from Drupal.org?

1. The `vendor` directory (where non-Drupal code lives) and the `config` directory
   (used for syncing configuration from development to production) are outside
   the web root. This is a bit more secure as those files are now not web-accessible.

2. The `settings.php` and `settings.platformsh.php` files are provided by
   default. The `settings.platformsh.php` file automatically sets up the database connection on Platform.sh, and allows controlling Drupal configuration from environment variables.

3. We include recommended `.platform.app.yaml` and `.platform` files that should suffice
   for most use cases. You are free to tweak them as needed for your particular site.
