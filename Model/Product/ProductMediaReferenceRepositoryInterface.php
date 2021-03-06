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

namespace Sulu\Bundle\SyliusConsumerBundle\Model\Product;

use Sulu\Bundle\MediaBundle\Entity\MediaInterface;

interface ProductMediaReferenceRepositoryInterface
{
    public function create(ProductInterface $product, MediaInterface $media, string $type, ?int $syliusId = null): ProductMediaReference;

    public function findBySyliusId(int $syliusId): ?ProductMediaReference;

    public function remove(ProductMediaReference $mediaReference): void;
}
