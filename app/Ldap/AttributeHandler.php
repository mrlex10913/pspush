<?php

namespace App\Ldap;

use App\Models\User as DatabaseUser;
use LdapRecord\Models\ActiveDirectory\User as LdapUser;

class AttributeHandler
{
    public function handle(LdapUser $ldap, DatabaseUser $database)
    {
       
        $dn = $ldap->getFirstAttribute('distinguishedName');

        if (preg_match('/OU=([^,]+),DC=panasiaticsolutions,DC=net/i', $dn, $matches)) 
        {
            $ou = $matches[1];
            
            $database->ou = $ou;
        }
    }
}

