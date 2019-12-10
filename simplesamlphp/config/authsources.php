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
    'default-sp' => array(
        'saml:SP',
        'privatekey' => 'saml.pem',
        'certificate' => 'saml.crt',
        'entityID' => 'https://asd8.as.cornell.edu/',
        'idp' => 'https://shibidp-test.cit.cornell.edu/idp/shibboleth'
    ),
    'people-sp' => array(
        'saml:SP',
        'privatekey' => 'saml.pem',
        'certificate' => 'saml.crt',
        'entityID' => 'https://people.asd8.as.cornell.edu/',
        'idp' => 'https://shibidp-test.cit.cornell.edu/idp/shibboleth'
    ),
    'departments-sp' => array(
        'saml:SP',
        'privatekey' => 'saml.pem',
        'certificate' => 'saml.crt',
        'entityID' => 'https://departments.asd8.as.cornell.edu/',
        'idp' => 'https://shibidp-test.cit.cornell.edu/idp/shibboleth'
    ),
);
