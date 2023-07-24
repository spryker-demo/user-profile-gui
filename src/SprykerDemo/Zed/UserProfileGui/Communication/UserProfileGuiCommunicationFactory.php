<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerDemo\Zed\UserProfileGui\Communication;

use Spryker\Zed\Kernel\Communication\AbstractCommunicationFactory;
use SprykerDemo\Zed\UserProfileGui\Communication\FormExpander\UserProfileFormExpander;
use SprykerDemo\Zed\UserProfileGui\Communication\FormExpander\UserProfileFormExpanderInterface;

class UserProfileGuiCommunicationFactory extends AbstractCommunicationFactory
{

    /**
     * @return \SprykerDemo\Zed\UserProfileGui\Communication\FormExpander\UserProfileFormExpanderInterface
     */
    public function createUserProfileFormExpander(): UserProfileFormExpanderInterface
    {
        return new UserProfileFormExpander();
    }
}
