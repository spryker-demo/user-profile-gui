<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerDemo\Zed\UserProfileGui\Communication\FormExpander;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\Regex;
use Symfony\Component\Validator\Constraints\Url;

class UserProfileFormExpander implements UserProfileFormExpanderInterface
{
    /**
     * @var string
     */
    protected const FIELD_PHOTO = 'photo';

    /**
     * @var string
     */
    protected const FIELD_PHOTO_LABEL = 'Photo URL';

    /**
     * @var string
     */
    protected const FIELD_PHONE = 'phone';

    /**
     * @var string
     */
    protected const FIELD_PHONE_LABEL = 'Phone Number';

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
            'constraints' => [
                new Url(),
            ],
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
            'constraints' => [
                new Regex([
                    'pattern' => '/^\+?\d{1,}[\s\d-]{5,}$/',
                    'message' => 'Please enter a valid phone number.',
                ]),
            ],
        ]);
    }
}
