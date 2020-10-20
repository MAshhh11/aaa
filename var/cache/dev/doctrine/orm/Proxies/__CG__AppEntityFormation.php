<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Formation extends \App\Entity\Formation implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array<string, null> properties to be lazy loaded, indexed by property name
     */
    public static $lazyPropertiesNames = array (
);

    /**
     * @var array<string, mixed> default values of properties to be lazy loaded, with keys being the property names
     *
     * @see \Doctrine\Common\Proxy\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array (
);



    public function __construct(?\Closure $initializer = null, ?\Closure $cloner = null)
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
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Formation' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Formation' . "\0" . 'title', '' . "\0" . 'App\\Entity\\Formation' . "\0" . 'duration', '' . "\0" . 'App\\Entity\\Formation' . "\0" . 'price', '' . "\0" . 'App\\Entity\\Formation' . "\0" . 'is_active', '' . "\0" . 'App\\Entity\\Formation' . "\0" . 'created_at', '' . "\0" . 'App\\Entity\\Formation' . "\0" . 'updated_at', '' . "\0" . 'App\\Entity\\Formation' . "\0" . 'formationUsers', '' . "\0" . 'App\\Entity\\Formation' . "\0" . 'description'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Formation' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Formation' . "\0" . 'title', '' . "\0" . 'App\\Entity\\Formation' . "\0" . 'duration', '' . "\0" . 'App\\Entity\\Formation' . "\0" . 'price', '' . "\0" . 'App\\Entity\\Formation' . "\0" . 'is_active', '' . "\0" . 'App\\Entity\\Formation' . "\0" . 'created_at', '' . "\0" . 'App\\Entity\\Formation' . "\0" . 'updated_at', '' . "\0" . 'App\\Entity\\Formation' . "\0" . 'formationUsers', '' . "\0" . 'App\\Entity\\Formation' . "\0" . 'description'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Formation $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy::$lazyPropertiesDefaults as $property => $defaultValue) {
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
     * @deprecated no longer in use - generated code now relies on internal components rather than generated public API
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function updatedTimestamps(): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'updatedTimestamps', []);

        parent::updatedTimestamps();
    }

    /**
     * {@inheritDoc}
     */
    public function getId(): ?int
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
    public function getTitle(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTitle', []);

        return parent::getTitle();
    }

    /**
     * {@inheritDoc}
     */
    public function setTitle(string $title): \App\Entity\Formation
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTitle', [$title]);

        return parent::setTitle($title);
    }

    /**
     * {@inheritDoc}
     */
    public function getDuration(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDuration', []);

        return parent::getDuration();
    }

    /**
     * {@inheritDoc}
     */
    public function setDuration(?int $duration): \App\Entity\Formation
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDuration', [$duration]);

        return parent::setDuration($duration);
    }

    /**
     * {@inheritDoc}
     */
    public function getPrice(): ?float
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPrice', []);

        return parent::getPrice();
    }

    /**
     * {@inheritDoc}
     */
    public function setPrice(float $price): \App\Entity\Formation
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPrice', [$price]);

        return parent::setPrice($price);
    }

    /**
     * {@inheritDoc}
     */
    public function getIsActive(): ?bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIsActive', []);

        return parent::getIsActive();
    }

    /**
     * {@inheritDoc}
     */
    public function setIsActive(bool $is_active): \App\Entity\Formation
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIsActive', [$is_active]);

        return parent::setIsActive($is_active);
    }

    /**
     * {@inheritDoc}
     */
    public function getCreatedAt(): ?\DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreatedAt', []);

        return parent::getCreatedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreatedAt(\DateTimeInterface $created_at): \App\Entity\Formation
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreatedAt', [$created_at]);

        return parent::setCreatedAt($created_at);
    }

    /**
     * {@inheritDoc}
     */
    public function getUpdatedAt(): ?\DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUpdatedAt', []);

        return parent::getUpdatedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function setUpdatedAt(\DateTimeInterface $updated_at): \App\Entity\Formation
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUpdatedAt', [$updated_at]);

        return parent::setUpdatedAt($updated_at);
    }

    /**
     * {@inheritDoc}
     */
    public function getFormationUsers(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFormationUsers', []);

        return parent::getFormationUsers();
    }

    /**
     * {@inheritDoc}
     */
    public function addFormationUser(\App\Entity\FormationUser $formationUser): \App\Entity\Formation
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addFormationUser', [$formationUser]);

        return parent::addFormationUser($formationUser);
    }

    /**
     * {@inheritDoc}
     */
    public function removeFormationUser(\App\Entity\FormationUser $formationUser): \App\Entity\Formation
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeFormationUser', [$formationUser]);

        return parent::removeFormationUser($formationUser);
    }

    /**
     * {@inheritDoc}
     */
    public function getDescription(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescription', []);

        return parent::getDescription();
    }

    /**
     * {@inheritDoc}
     */
    public function setDescription(?string $description): \App\Entity\Formation
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescription', [$description]);

        return parent::setDescription($description);
    }

}
