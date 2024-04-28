<?php 
#
#  _   _ _____ ____ _____ _____  _____ ____ 
# | \ | | ____|  _ \_   _/ _ \ \/ /_ _/ ___|
# |  \| |  _| | |_) || || | | \  / | | |    
# | |\  | |___|  _ < | || |_| /  \ | | |___ 
# |_| \_|_____|_| \_\|_| \___/_/\_\___\____|
#
#

# USE DOCS FROM https://api.ptero.sh/ or https://dashflo.net/docs/api/pterodactyl/v1/ (client)

$ptero = new Ptero($PTERODACTYL_URL, $PTERODACTYL_KEY);

class Ptero
{

    /*
    * initialize the class with the url and the key
    */
    public function __construct(string $url, string $key, string $tpye = "client")
    {
        $this->url = $url; //https://pterodactyl.test/api/client
        $this->key = $key; //123
        $this->tpye = $tpye; //client

        $this->general = new General();
        $this->account = new Account();
    }

}

class General
{
    
    /*
    * get the server list
    */
    public function getServers()
    {
        $servers = $curl->bearer($this->url . "/servers", $this->key);
        return $servers;
    }

    /*
    * list permissions
    */
    public function permissions()
    {
        $permissions = $curl->bearer($this->url . "/permissions", $this->key);
        return $permissions;
    }
}

//account
class Account 
{

}