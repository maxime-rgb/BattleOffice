<?php

namespace Container6akZPsk;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHoldere0cc2 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerba12c = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties72edd = [
        
    ];

    public function getConnection()
    {
        $this->initializerba12c && ($this->initializerba12c->__invoke($valueHoldere0cc2, $this, 'getConnection', array(), $this->initializerba12c) || 1) && $this->valueHoldere0cc2 = $valueHoldere0cc2;

        return $this->valueHoldere0cc2->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerba12c && ($this->initializerba12c->__invoke($valueHoldere0cc2, $this, 'getMetadataFactory', array(), $this->initializerba12c) || 1) && $this->valueHoldere0cc2 = $valueHoldere0cc2;

        return $this->valueHoldere0cc2->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerba12c && ($this->initializerba12c->__invoke($valueHoldere0cc2, $this, 'getExpressionBuilder', array(), $this->initializerba12c) || 1) && $this->valueHoldere0cc2 = $valueHoldere0cc2;

        return $this->valueHoldere0cc2->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerba12c && ($this->initializerba12c->__invoke($valueHoldere0cc2, $this, 'beginTransaction', array(), $this->initializerba12c) || 1) && $this->valueHoldere0cc2 = $valueHoldere0cc2;

        return $this->valueHoldere0cc2->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerba12c && ($this->initializerba12c->__invoke($valueHoldere0cc2, $this, 'getCache', array(), $this->initializerba12c) || 1) && $this->valueHoldere0cc2 = $valueHoldere0cc2;

        return $this->valueHoldere0cc2->getCache();
    }

    public function transactional($func)
    {
        $this->initializerba12c && ($this->initializerba12c->__invoke($valueHoldere0cc2, $this, 'transactional', array('func' => $func), $this->initializerba12c) || 1) && $this->valueHoldere0cc2 = $valueHoldere0cc2;

        return $this->valueHoldere0cc2->transactional($func);
    }

    public function commit()
    {
        $this->initializerba12c && ($this->initializerba12c->__invoke($valueHoldere0cc2, $this, 'commit', array(), $this->initializerba12c) || 1) && $this->valueHoldere0cc2 = $valueHoldere0cc2;

        return $this->valueHoldere0cc2->commit();
    }

    public function rollback()
    {
        $this->initializerba12c && ($this->initializerba12c->__invoke($valueHoldere0cc2, $this, 'rollback', array(), $this->initializerba12c) || 1) && $this->valueHoldere0cc2 = $valueHoldere0cc2;

        return $this->valueHoldere0cc2->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerba12c && ($this->initializerba12c->__invoke($valueHoldere0cc2, $this, 'getClassMetadata', array('className' => $className), $this->initializerba12c) || 1) && $this->valueHoldere0cc2 = $valueHoldere0cc2;

        return $this->valueHoldere0cc2->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerba12c && ($this->initializerba12c->__invoke($valueHoldere0cc2, $this, 'createQuery', array('dql' => $dql), $this->initializerba12c) || 1) && $this->valueHoldere0cc2 = $valueHoldere0cc2;

        return $this->valueHoldere0cc2->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerba12c && ($this->initializerba12c->__invoke($valueHoldere0cc2, $this, 'createNamedQuery', array('name' => $name), $this->initializerba12c) || 1) && $this->valueHoldere0cc2 = $valueHoldere0cc2;

        return $this->valueHoldere0cc2->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerba12c && ($this->initializerba12c->__invoke($valueHoldere0cc2, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerba12c) || 1) && $this->valueHoldere0cc2 = $valueHoldere0cc2;

        return $this->valueHoldere0cc2->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerba12c && ($this->initializerba12c->__invoke($valueHoldere0cc2, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerba12c) || 1) && $this->valueHoldere0cc2 = $valueHoldere0cc2;

        return $this->valueHoldere0cc2->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerba12c && ($this->initializerba12c->__invoke($valueHoldere0cc2, $this, 'createQueryBuilder', array(), $this->initializerba12c) || 1) && $this->valueHoldere0cc2 = $valueHoldere0cc2;

        return $this->valueHoldere0cc2->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerba12c && ($this->initializerba12c->__invoke($valueHoldere0cc2, $this, 'flush', array('entity' => $entity), $this->initializerba12c) || 1) && $this->valueHoldere0cc2 = $valueHoldere0cc2;

        return $this->valueHoldere0cc2->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerba12c && ($this->initializerba12c->__invoke($valueHoldere0cc2, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerba12c) || 1) && $this->valueHoldere0cc2 = $valueHoldere0cc2;

        return $this->valueHoldere0cc2->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerba12c && ($this->initializerba12c->__invoke($valueHoldere0cc2, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerba12c) || 1) && $this->valueHoldere0cc2 = $valueHoldere0cc2;

        return $this->valueHoldere0cc2->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerba12c && ($this->initializerba12c->__invoke($valueHoldere0cc2, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerba12c) || 1) && $this->valueHoldere0cc2 = $valueHoldere0cc2;

        return $this->valueHoldere0cc2->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerba12c && ($this->initializerba12c->__invoke($valueHoldere0cc2, $this, 'clear', array('entityName' => $entityName), $this->initializerba12c) || 1) && $this->valueHoldere0cc2 = $valueHoldere0cc2;

        return $this->valueHoldere0cc2->clear($entityName);
    }

    public function close()
    {
        $this->initializerba12c && ($this->initializerba12c->__invoke($valueHoldere0cc2, $this, 'close', array(), $this->initializerba12c) || 1) && $this->valueHoldere0cc2 = $valueHoldere0cc2;

        return $this->valueHoldere0cc2->close();
    }

    public function persist($entity)
    {
        $this->initializerba12c && ($this->initializerba12c->__invoke($valueHoldere0cc2, $this, 'persist', array('entity' => $entity), $this->initializerba12c) || 1) && $this->valueHoldere0cc2 = $valueHoldere0cc2;

        return $this->valueHoldere0cc2->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerba12c && ($this->initializerba12c->__invoke($valueHoldere0cc2, $this, 'remove', array('entity' => $entity), $this->initializerba12c) || 1) && $this->valueHoldere0cc2 = $valueHoldere0cc2;

        return $this->valueHoldere0cc2->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerba12c && ($this->initializerba12c->__invoke($valueHoldere0cc2, $this, 'refresh', array('entity' => $entity), $this->initializerba12c) || 1) && $this->valueHoldere0cc2 = $valueHoldere0cc2;

        return $this->valueHoldere0cc2->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerba12c && ($this->initializerba12c->__invoke($valueHoldere0cc2, $this, 'detach', array('entity' => $entity), $this->initializerba12c) || 1) && $this->valueHoldere0cc2 = $valueHoldere0cc2;

        return $this->valueHoldere0cc2->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerba12c && ($this->initializerba12c->__invoke($valueHoldere0cc2, $this, 'merge', array('entity' => $entity), $this->initializerba12c) || 1) && $this->valueHoldere0cc2 = $valueHoldere0cc2;

        return $this->valueHoldere0cc2->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerba12c && ($this->initializerba12c->__invoke($valueHoldere0cc2, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerba12c) || 1) && $this->valueHoldere0cc2 = $valueHoldere0cc2;

        return $this->valueHoldere0cc2->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerba12c && ($this->initializerba12c->__invoke($valueHoldere0cc2, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerba12c) || 1) && $this->valueHoldere0cc2 = $valueHoldere0cc2;

        return $this->valueHoldere0cc2->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerba12c && ($this->initializerba12c->__invoke($valueHoldere0cc2, $this, 'getRepository', array('entityName' => $entityName), $this->initializerba12c) || 1) && $this->valueHoldere0cc2 = $valueHoldere0cc2;

        return $this->valueHoldere0cc2->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerba12c && ($this->initializerba12c->__invoke($valueHoldere0cc2, $this, 'contains', array('entity' => $entity), $this->initializerba12c) || 1) && $this->valueHoldere0cc2 = $valueHoldere0cc2;

        return $this->valueHoldere0cc2->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerba12c && ($this->initializerba12c->__invoke($valueHoldere0cc2, $this, 'getEventManager', array(), $this->initializerba12c) || 1) && $this->valueHoldere0cc2 = $valueHoldere0cc2;

        return $this->valueHoldere0cc2->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerba12c && ($this->initializerba12c->__invoke($valueHoldere0cc2, $this, 'getConfiguration', array(), $this->initializerba12c) || 1) && $this->valueHoldere0cc2 = $valueHoldere0cc2;

        return $this->valueHoldere0cc2->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerba12c && ($this->initializerba12c->__invoke($valueHoldere0cc2, $this, 'isOpen', array(), $this->initializerba12c) || 1) && $this->valueHoldere0cc2 = $valueHoldere0cc2;

        return $this->valueHoldere0cc2->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerba12c && ($this->initializerba12c->__invoke($valueHoldere0cc2, $this, 'getUnitOfWork', array(), $this->initializerba12c) || 1) && $this->valueHoldere0cc2 = $valueHoldere0cc2;

        return $this->valueHoldere0cc2->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerba12c && ($this->initializerba12c->__invoke($valueHoldere0cc2, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerba12c) || 1) && $this->valueHoldere0cc2 = $valueHoldere0cc2;

        return $this->valueHoldere0cc2->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerba12c && ($this->initializerba12c->__invoke($valueHoldere0cc2, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerba12c) || 1) && $this->valueHoldere0cc2 = $valueHoldere0cc2;

        return $this->valueHoldere0cc2->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerba12c && ($this->initializerba12c->__invoke($valueHoldere0cc2, $this, 'getProxyFactory', array(), $this->initializerba12c) || 1) && $this->valueHoldere0cc2 = $valueHoldere0cc2;

        return $this->valueHoldere0cc2->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerba12c && ($this->initializerba12c->__invoke($valueHoldere0cc2, $this, 'initializeObject', array('obj' => $obj), $this->initializerba12c) || 1) && $this->valueHoldere0cc2 = $valueHoldere0cc2;

        return $this->valueHoldere0cc2->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerba12c && ($this->initializerba12c->__invoke($valueHoldere0cc2, $this, 'getFilters', array(), $this->initializerba12c) || 1) && $this->valueHoldere0cc2 = $valueHoldere0cc2;

        return $this->valueHoldere0cc2->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerba12c && ($this->initializerba12c->__invoke($valueHoldere0cc2, $this, 'isFiltersStateClean', array(), $this->initializerba12c) || 1) && $this->valueHoldere0cc2 = $valueHoldere0cc2;

        return $this->valueHoldere0cc2->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerba12c && ($this->initializerba12c->__invoke($valueHoldere0cc2, $this, 'hasFilters', array(), $this->initializerba12c) || 1) && $this->valueHoldere0cc2 = $valueHoldere0cc2;

        return $this->valueHoldere0cc2->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializerba12c = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHoldere0cc2) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHoldere0cc2 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHoldere0cc2->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerba12c && ($this->initializerba12c->__invoke($valueHoldere0cc2, $this, '__get', ['name' => $name], $this->initializerba12c) || 1) && $this->valueHoldere0cc2 = $valueHoldere0cc2;

        if (isset(self::$publicProperties72edd[$name])) {
            return $this->valueHoldere0cc2->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere0cc2;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHoldere0cc2;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializerba12c && ($this->initializerba12c->__invoke($valueHoldere0cc2, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerba12c) || 1) && $this->valueHoldere0cc2 = $valueHoldere0cc2;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere0cc2;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHoldere0cc2;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializerba12c && ($this->initializerba12c->__invoke($valueHoldere0cc2, $this, '__isset', array('name' => $name), $this->initializerba12c) || 1) && $this->valueHoldere0cc2 = $valueHoldere0cc2;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere0cc2;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHoldere0cc2;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializerba12c && ($this->initializerba12c->__invoke($valueHoldere0cc2, $this, '__unset', array('name' => $name), $this->initializerba12c) || 1) && $this->valueHoldere0cc2 = $valueHoldere0cc2;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere0cc2;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHoldere0cc2;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializerba12c && ($this->initializerba12c->__invoke($valueHoldere0cc2, $this, '__clone', array(), $this->initializerba12c) || 1) && $this->valueHoldere0cc2 = $valueHoldere0cc2;

        $this->valueHoldere0cc2 = clone $this->valueHoldere0cc2;
    }

    public function __sleep()
    {
        $this->initializerba12c && ($this->initializerba12c->__invoke($valueHoldere0cc2, $this, '__sleep', array(), $this->initializerba12c) || 1) && $this->valueHoldere0cc2 = $valueHoldere0cc2;

        return array('valueHoldere0cc2');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerba12c = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerba12c;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerba12c && ($this->initializerba12c->__invoke($valueHoldere0cc2, $this, 'initializeProxy', array(), $this->initializerba12c) || 1) && $this->valueHoldere0cc2 = $valueHoldere0cc2;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldere0cc2;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldere0cc2;
    }


}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
