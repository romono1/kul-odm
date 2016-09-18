<?php

namespace Cmn\UserBundle\Document;


use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

/**
 * @MongoDB\Document(repositoryClass="Cmn\UserBundle\Repository\UserRepository")
 */
class User extends BaseUser
{
    /** @MongoDB\Id(strategy="auto") */
    protected $id;

    /**
     * @MongoDB\ReferenceMany(targetDocument="Cmn\UserBundle\Document\Group")
     */
    protected $groups;
}