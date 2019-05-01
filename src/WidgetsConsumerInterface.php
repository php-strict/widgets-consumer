<?php
/**
 * PHP Strict.
 * 
 * @copyright   Copyright (C) 2018 - 2019 Enikeishik <enikeishik@gmail.com>. All rights reserved.
 * @author      Enikeishik <enikeishik@gmail.com>
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

declare(strict_types=1);

namespace PhpStrict\WidgetsConsumer;

/**
 * Describes the interface of a widgets consumer 
 * which can take prepared widgets from widgets provider.
 */
interface WidgetsConsumerInterface
{
    /**
     * Gets current scope as string key.
     * 
     * @return string The current scope identifier - URL, path or else.
     */
    public function getCurrentScope(): string;
    
    /**
     * Gets array of places there widgets can be showed.
     * 
     * @return array The array of places names.
     */
    public function getWidgetsPlaces(): array;
    
    /**
     * Injects widgets into consumer, all previous injected widgets will be lost.
     * 
     * @param array $widgets The array of objects which are implements \PhpStrict\WidgetsProvider\WidgetInterface.
     * 
     * @return void
     * 
     * @throws \InvalidArgumentException for $widgets elements which not implements WidgetInterface.
     */
    public function setWidgets(array $widgets): void;
    
    /**
     * Injects widgets into consumer, new widgets will be merged with existings.
     * 
     * @param array $widgets The array of objects which are implements \PhpStrict\WidgetsProvider\WidgetInterface.
     * 
     * @return void
     * 
     * @throws \InvalidArgumentException for $widgets elements which not implements WidgetInterface.
     */
    public function appendWidgets(array $widgets): void;
}
