<?php

declare(strict_types=1);

/*
 * This file is part of the Sonata Project package.
 *
 * (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sonata\UserBundle\Document;

use Sonata\Doctrine\Document\BaseDocumentManager;
use Sonata\UserBundle\Model\GroupManagerInterface;

/**
 * @author Hugo Briand <briand@ekino.com>
 */
class GroupManager extends BaseDocumentManager implements GroupManagerInterface
{
}
