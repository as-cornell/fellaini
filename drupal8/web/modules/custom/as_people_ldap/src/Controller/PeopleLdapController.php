<?php

namespace Drupal\as_people_ldap\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\ldap_servers\LdapBridgeInterface;
use Psr\Log\LoggerInterface;
use Symfony\Component\Ldap\Exception\LdapException;


class PeopleLdapController extends ControllerBase {

  /**
   * Display the markup.
   *
   * @return array
   */
  public function content($netid) {
    //$main = $netid;
    $main = as_people_ldap_get_netid_ldap($netid);

    return array(
      '#type' => 'markup',
      '#markup' => $this->t('<h1>LDAP Data for '.$netid.'</h1><div class="slides">
<article class="slide-aside">'.$main.'</article></div>'),
    );
  }

}
