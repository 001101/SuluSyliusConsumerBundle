<?php

declare(strict_types=1);

/*
 * This file is part of Sulu.
 *
 * (c) MASSIVE ART WebServices GmbH
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Sulu\Bundle\SyliusConsumerBundle;

use Sulu\Bundle\PersistenceBundle\PersistenceBundleTrait;
use Sulu\Bundle\SyliusConsumerBundle\Model\Product\ProductInformation;
use Sulu\Bundle\SyliusConsumerBundle\Model\Product\ProductInterface;
use Sulu\Bundle\SyliusConsumerBundle\Model\Product\ProductVariantInformationInterface;
use Sulu\Bundle\SyliusConsumerBundle\Model\Product\ProductVariantInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class SuluSyliusConsumerBundle extends Bundle
{
    use PersistenceBundleTrait;

    public function build(ContainerBuilder $container)
    {
        $this->buildPersistence(
            [
                ProductInterface::class => 'sulu.model.product.class',
                ProductInformation::class => 'sulu.model.product_information.class',
                ProductVariantInterface::class => 'sulu.model.product_variant.class',
                ProductVariantInformationInterface::class => 'sulu.model.product_variant_information.class',
            ],
            $container
        );
    }
}
