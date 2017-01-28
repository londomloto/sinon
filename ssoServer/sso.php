<?php

abstract class SSO {

    protected $options = ['files_cache_directory' => '/tmp', 'files_cache_ttl' => 36000];
    protected $cache;
    protected $returnType;
    protected $appsId;
    
    public function __construct(array $options = [])
    {
        $this->options = $options + $this->options;
        $this->cache = $this->createCacheAdapter();
    }

}
