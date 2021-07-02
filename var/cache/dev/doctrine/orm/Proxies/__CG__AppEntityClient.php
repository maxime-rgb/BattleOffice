<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Client extends \App\Entity\Client implements \Doctrine\ORM\Proxy\Proxy
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
     * @see \Doctrine\Persistence\Proxy::__isInitialized
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
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Client' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Client' . "\0" . 'firstName', '' . "\0" . 'App\\Entity\\Client' . "\0" . 'lastName', '' . "\0" . 'App\\Entity\\Client' . "\0" . 'adress', '' . "\0" . 'App\\Entity\\Client' . "\0" . 'otherAdress', '' . "\0" . 'App\\Entity\\Client' . "\0" . 'city', '' . "\0" . 'App\\Entity\\Client' . "\0" . 'postalCode', '' . "\0" . 'App\\Entity\\Client' . "\0" . 'country', '' . "\0" . 'App\\Entity\\Client' . "\0" . 'phone', '' . "\0" . 'App\\Entity\\Client' . "\0" . 'mail', '' . "\0" . 'App\\Entity\\Client' . "\0" . 'mailConfirm', '' . "\0" . 'App\\Entity\\Client' . "\0" . 'delivery_adress'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Client' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Client' . "\0" . 'firstName', '' . "\0" . 'App\\Entity\\Client' . "\0" . 'lastName', '' . "\0" . 'App\\Entity\\Client' . "\0" . 'adress', '' . "\0" . 'App\\Entity\\Client' . "\0" . 'otherAdress', '' . "\0" . 'App\\Entity\\Client' . "\0" . 'city', '' . "\0" . 'App\\Entity\\Client' . "\0" . 'postalCode', '' . "\0" . 'App\\Entity\\Client' . "\0" . 'country', '' . "\0" . 'App\\Entity\\Client' . "\0" . 'phone', '' . "\0" . 'App\\Entity\\Client' . "\0" . 'mail', '' . "\0" . 'App\\Entity\\Client' . "\0" . 'mailConfirm', '' . "\0" . 'App\\Entity\\Client' . "\0" . 'delivery_adress'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Client $proxy) {
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
    public function getFirstName(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFirstName', []);

        return parent::getFirstName();
    }

    /**
     * {@inheritDoc}
     */
    public function setFirstName(string $firstName): \App\Entity\Client
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFirstName', [$firstName]);

        return parent::setFirstName($firstName);
    }

    /**
     * {@inheritDoc}
     */
    public function getLastName(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLastName', []);

        return parent::getLastName();
    }

    /**
     * {@inheritDoc}
     */
    public function setLastName(string $lastName): \App\Entity\Client
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLastName', [$lastName]);

        return parent::setLastName($lastName);
    }

    /**
     * {@inheritDoc}
     */
    public function getAdress(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAdress', []);

        return parent::getAdress();
    }

    /**
     * {@inheritDoc}
     */
    public function setAdress(string $adress): \App\Entity\Client
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAdress', [$adress]);

        return parent::setAdress($adress);
    }

    /**
     * {@inheritDoc}
     */
    public function getOtherAdress(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOtherAdress', []);

        return parent::getOtherAdress();
    }

    /**
     * {@inheritDoc}
     */
    public function setOtherAdress(?string $otherAdress): \App\Entity\Client
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOtherAdress', [$otherAdress]);

        return parent::setOtherAdress($otherAdress);
    }

    /**
     * {@inheritDoc}
     */
    public function getCity(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCity', []);

        return parent::getCity();
    }

    /**
     * {@inheritDoc}
     */
    public function setCity(string $city): \App\Entity\Client
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCity', [$city]);

        return parent::setCity($city);
    }

    /**
     * {@inheritDoc}
     */
    public function getPostalCode(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPostalCode', []);

        return parent::getPostalCode();
    }

    /**
     * {@inheritDoc}
     */
    public function setPostalCode(int $postalCode): \App\Entity\Client
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPostalCode', [$postalCode]);

        return parent::setPostalCode($postalCode);
    }

    /**
     * {@inheritDoc}
     */
    public function getCountry(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCountry', []);

        return parent::getCountry();
    }

    /**
     * {@inheritDoc}
     */
    public function setCountry(string $country): \App\Entity\Client
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCountry', [$country]);

        return parent::setCountry($country);
    }

    /**
     * {@inheritDoc}
     */
    public function getPhone(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPhone', []);

        return parent::getPhone();
    }

    /**
     * {@inheritDoc}
     */
    public function setPhone(int $phone): \App\Entity\Client
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPhone', [$phone]);

        return parent::setPhone($phone);
    }

    /**
     * {@inheritDoc}
     */
    public function getMail(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMail', []);

        return parent::getMail();
    }

    /**
     * {@inheritDoc}
     */
    public function setMail(string $mail): \App\Entity\Client
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMail', [$mail]);

        return parent::setMail($mail);
    }

    /**
     * {@inheritDoc}
     */
    public function getMailConfirm(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMailConfirm', []);

        return parent::getMailConfirm();
    }

    /**
     * {@inheritDoc}
     */
    public function setMailConfirm(string $mailConfirm): \App\Entity\Client
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMailConfirm', [$mailConfirm]);

        return parent::setMailConfirm($mailConfirm);
    }

    /**
     * {@inheritDoc}
     */
    public function getDeliveryAdress(): ?\App\Entity\deliveryAdress
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDeliveryAdress', []);

        return parent::getDeliveryAdress();
    }

    /**
     * {@inheritDoc}
     */
    public function setDeliveryAdress(?\App\Entity\deliveryAdress $delivery_adress): \App\Entity\Client
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDeliveryAdress', [$delivery_adress]);

        return parent::setDeliveryAdress($delivery_adress);
    }

}