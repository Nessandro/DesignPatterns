<?php
namespace DesignPatterns\Structural\Composite\Abstracts;

/*
File:   AbstractForm.php
Date:   24.09.2020
Author: Tomasz Bielecki (tomasz.bi@modulesgarden.com)
Class AbstractForm
*/

/**
 * Class AbstractForm
 * @package DesignPatterns\Structural\Composite\Abstracts
 */
abstract class AbstractFieldContainer implements Renderable
{
    /**
     * @var AbstractFieldContainer
     */
    protected $parent;

    /**
     * @var array
     */
    protected $nodes = [];

    /**
     * @var
     */
    protected $name;

    /**
     * AbstractForm constructor.
     * @param $name
     */
    public function __construct(string $name = null)
    {
        $this->setName($name);
    }

    /**
     * @param AbstractFieldContainer $parent
     * @return AbstractFieldContainer
     */
    public function setParent(AbstractFieldContainer &$parent): AbstractFieldContainer
    {
        $this->parent  = $parent;
        return $this;
    }

    /**
     * @return AbstractFieldContainer
     */
    public function getParent(): AbstractFieldContainer
    {
        return $this->parent;
    }

    /**
     * @param AbstractFieldContainer $child
     * @return AbstractFieldContainer
     */
    public function addNode(AbstractFieldContainer $child): AbstractFieldContainer
    {
        $child->setParent($child);
        $this->nodes[] = $child;
        return $this;
    }

    /**
     * @return array
     */
    public function getNodes(): array
    {
        return $this->nodes;
    }

    /**
     * @return mixed
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string|null $name
     * @return AbstractFieldContainer
     */
    public function setName(string $name = null): AbstractFieldContainer
    {
        $this->name = $name;
        return $this;
    }

}