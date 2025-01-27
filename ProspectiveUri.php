<?php
declare(strict_types=1);

interface ProspectiveUri extends Stringable
{
    public function getScheme() : ?string;

    public function getHost() : ?string;

    public function getPort() : ?int   ;

    public function getUser() : ?string;

    public function getPass() : ?string;

    public function getPath() : ?string;

    public function getQuery() : ?string;

    public function getFragment() : ?string;

    public function __toString() : string;
}
