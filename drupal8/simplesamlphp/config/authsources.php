<?php

$config = array(
    // This is a authentication source which handles admin authentication.
    'admin' => array(
        // The default is to use core:AdminPassword, but it can be replaced with
        // any authentication source.

        'core:AdminPassword',
    ),
    // An authentication source which can authenticate against both SAML 2.0
    // and Shibboleth 1.3 IdPs.
    'as-sp' => array(
        'saml:SP',
        'privatekey' => 'saml.pem',
        'certificate' => 'saml.crt',
        'entityID' => 'https://as.cornell.edu/',
        'idp' => 'https://shibidp.cit.cornell.edu/idp/shibboleth',
    ),
    'people-sp' => array(
        'saml:SP',
        'privatekey' => 'saml.pem',
        'certificate' => 'saml.crt',
        'entityID' => 'https://people.as.cornell.edu/',
        'idp' => 'https://shibidp.cit.cornell.edu/idp/shibboleth'
    ),
);
