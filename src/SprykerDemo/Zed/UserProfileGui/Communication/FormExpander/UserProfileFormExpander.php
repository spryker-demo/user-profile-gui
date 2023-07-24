<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerDemo\Zed\UserProfileGui\Communication\FormExpander;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;

class UserProfileFormExpander implements UserProfileFormExpanderInterface
{
    /**
     * @var string
     */
    protected const FIELD_PHOTO = 'photo';

    /**
     * @var string
     */
    protected const FIELD_PHOTO_LABEL = 'Photo';

    /**
     * @var string
     */
    protected const FIELD_PHONE = 'phone';

    /**
     * @var string
     */
    protected const FIELD_PHONE_LABEL = 'Phone';

    /**
     * @param \Symfony\Component\Form\FormBuilderInterface $builder
     *
     * @return void
     */
    public function buildForm(FormBuilderInterface $builder): void
    {
        $this->addPhotoField($builder);
        $this->addPhoneField($builder);
    }

    /**
     * @param \Symfony\Component\Form\FormBuilderInterface $builder
     *
     * @return void
     */
    protected function addPhotoField(FormBuilderInterface $builder): void
    {
        $builder->add(static::FIELD_PHOTO, TextType::class, [
            'label' => static::FIELD_PHOTO_LABEL,
            'required' => false,
        ]);
    }

    /**
     * @param \Symfony\Component\Form\FormBuilderInterface $builder
     *
     * @return void
     */
    protected function addPhoneField(FormBuilderInterface $builder): void
    {
        $builder->add(static::FIELD_PHONE, TextType::class, [
            'label' => static::FIELD_PHONE_LABEL,
            'required' => false,
        ]);
    }
}
