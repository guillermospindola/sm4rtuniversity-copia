<?php

namespace DoctrineProxies\__CG__\Chamilo\CoreBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Skill extends \Chamilo\CoreBundle\Entity\Skill implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = [];



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'Chamilo\\CoreBundle\\Entity\\Skill' . "\0" . 'id', '' . "\0" . 'Chamilo\\CoreBundle\\Entity\\Skill' . "\0" . 'name', '' . "\0" . 'Chamilo\\CoreBundle\\Entity\\Skill' . "\0" . 'shortCode', '' . "\0" . 'Chamilo\\CoreBundle\\Entity\\Skill' . "\0" . 'description', '' . "\0" . 'Chamilo\\CoreBundle\\Entity\\Skill' . "\0" . 'accessUrlId', '' . "\0" . 'Chamilo\\CoreBundle\\Entity\\Skill' . "\0" . 'icon', '' . "\0" . 'Chamilo\\CoreBundle\\Entity\\Skill' . "\0" . 'criteria', '' . "\0" . 'Chamilo\\CoreBundle\\Entity\\Skill' . "\0" . 'status', '' . "\0" . 'Chamilo\\CoreBundle\\Entity\\Skill' . "\0" . 'updatedAt', 'profile', 'issuedSkills'];
        }

        return ['__isInitialized__', '' . "\0" . 'Chamilo\\CoreBundle\\Entity\\Skill' . "\0" . 'id', '' . "\0" . 'Chamilo\\CoreBundle\\Entity\\Skill' . "\0" . 'name', '' . "\0" . 'Chamilo\\CoreBundle\\Entity\\Skill' . "\0" . 'shortCode', '' . "\0" . 'Chamilo\\CoreBundle\\Entity\\Skill' . "\0" . 'description', '' . "\0" . 'Chamilo\\CoreBundle\\Entity\\Skill' . "\0" . 'accessUrlId', '' . "\0" . 'Chamilo\\CoreBundle\\Entity\\Skill' . "\0" . 'icon', '' . "\0" . 'Chamilo\\CoreBundle\\Entity\\Skill' . "\0" . 'criteria', '' . "\0" . 'Chamilo\\CoreBundle\\Entity\\Skill' . "\0" . 'status', '' . "\0" . 'Chamilo\\CoreBundle\\Entity\\Skill' . "\0" . 'updatedAt', 'profile', 'issuedSkills'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Skill $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function __toString()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', []);

        return parent::__toString();
    }

    /**
     * {@inheritDoc}
     */
    public function setName($name)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setName', [$name]);

        return parent::setName($name);
    }

    /**
     * {@inheritDoc}
     */
    public function getName($translated = true)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getName', [$translated]);

        return parent::getName($translated);
    }

    /**
     * {@inheritDoc}
     */
    public function setShortCode($shortCode)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setShortCode', [$shortCode]);

        return parent::setShortCode($shortCode);
    }

    /**
     * {@inheritDoc}
     */
    public function getShortCode($translated = true)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getShortCode', [$translated]);

        return parent::getShortCode($translated);
    }

    /**
     * {@inheritDoc}
     */
    public function setDescription($description)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescription', [$description]);

        return parent::setDescription($description);
    }

    /**
     * {@inheritDoc}
     */
    public function getDescription()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescription', []);

        return parent::getDescription();
    }

    /**
     * {@inheritDoc}
     */
    public function setAccessUrlId($accessUrlId)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAccessUrlId', [$accessUrlId]);

        return parent::setAccessUrlId($accessUrlId);
    }

    /**
     * {@inheritDoc}
     */
    public function getAccessUrlId()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAccessUrlId', []);

        return parent::getAccessUrlId();
    }

    /**
     * {@inheritDoc}
     */
    public function setIcon($icon)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIcon', [$icon]);

        return parent::setIcon($icon);
    }

    /**
     * {@inheritDoc}
     */
    public function getIcon()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIcon', []);

        return parent::getIcon();
    }

    /**
     * {@inheritDoc}
     */
    public function getWebIconPath($getSmall = false)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getWebIconPath', [$getSmall]);

        return parent::getWebIconPath($getSmall);
    }

    /**
     * {@inheritDoc}
     */
    public function setCriteria($criteria)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCriteria', [$criteria]);

        return parent::setCriteria($criteria);
    }

    /**
     * {@inheritDoc}
     */
    public function getCriteria()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCriteria', []);

        return parent::getCriteria();
    }

    /**
     * {@inheritDoc}
     */
    public function setStatus($status)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setStatus', [$status]);

        return parent::setStatus($status);
    }

    /**
     * {@inheritDoc}
     */
    public function getStatus()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getStatus', []);

        return parent::getStatus();
    }

    /**
     * {@inheritDoc}
     */
    public function setUpdatedAt(\DateTime $updatedAt)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUpdatedAt', [$updatedAt]);

        return parent::setUpdatedAt($updatedAt);
    }

    /**
     * {@inheritDoc}
     */
    public function getUpdatedAt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUpdatedAt', []);

        return parent::getUpdatedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function getProfile()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getProfile', []);

        return parent::getProfile();
    }

    /**
     * {@inheritDoc}
     */
    public function setProfile($profile)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setProfile', [$profile]);

        return parent::setProfile($profile);
    }

    /**
     * {@inheritDoc}
     */
    public function getIssuedSkills()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIssuedSkills', []);

        return parent::getIssuedSkills();
    }

}
